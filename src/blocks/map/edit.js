import { __ } from '@wordpress/i18n';
import { createBlock } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
import { useSelect, useDispatch } from '@wordpress/data';
import { useEffect, useState } from '@wordpress/element';
import { useRef } from 'react';
import mapboxgl from '!mapbox-gl';
import './editor.scss';

import InnerBlocksDisplaySingle from './inner-block-slider/inner-block-single-display';
import Navigation from './inner-block-slider/navigation';

let map = {};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( {  attributes, clientId, setAttributes  }) {
	const { markers } = attributes;

	const slideBlocks = useSelect(
		( select ) => select( 'core/block-editor' ).getBlock( clientId ).innerBlocks
	);

	// Track state in a ref, to allow us to determine if slides are added or removed.
	const slideCount = useRef( slideBlocks.length );
	const { insertBlock, updateBlockAttributes } = useDispatch( 'core/block-editor' );

	const [ currentItemIndex, setCurrentItemIndex ] = useState( 0 );
	const [ activeCoords, setActiveCoords ] = useState( [-44.5, 40] );

	/**
	 * Custom "Add Block" appender.
	 *
	 * @returns {void}
	 */
	const addSlide = () => {
		const newMarkers = { ...markers };

		const center = map?.getCenter();

		if ( ! center ) {
			return;
		}

		const id = Date.now();
		const length = Object.keys( newMarkers ).length + 1;
		newMarkers[ id ] = {
			lngLat: [ center.lng, center.lat ],
			title: `Marker ${length}`,
		};

		const created = createBlock( 'wmf-reports/map-inner', { id, title: `Marker ${slideCount.current + 1}`, lat: center.lat, long: center.lng } );
		insertBlock( created, undefined, clientId );

		setAttributes( { markers: newMarkers } );
	};

	/**
	 * If a slide is added, switch to the new slide. If one is deleted, make sure we don't
	 * show a non-existent slide.
	 */
	useEffect( () => {
		if ( slideBlocks.length > slideCount.current ) {
			// Slide added
			setCurrentItemIndex( slideBlocks.length - 1 );
		} else if ( slideBlocks.length < slideCount.current ) {
			// Slide deleted
			if ( currentItemIndex + 1 > slideBlocks.length ) {
				setCurrentItemIndex( slideBlocks.length - 1 );
			}
		}

		// Update ref with new value..
		slideCount.current = slideBlocks.length;
	}, [ slideBlocks.length, currentItemIndex, slideCount ] );

	useEffect( () => {
		mapboxgl.accessToken = 'pk.eyJ1IjoibWF0dHdhdHNvbmhtIiwiYSI6ImNsdHpudnVmczAxdDkyaW1zYzMxNGJtbTgifQ.5UyJ9RgUB1YgoLG7vXm0aw';
		map = new mapboxgl.Map({
			container: 'map', // container ID
			center: activeCoords, // starting position [lng, lat]
			// cluster: true,
			// clusterRadius: 80,
			// dragPan: false,
			projection: 'equalEarth',
			scrollZoom: false,
			style: 'mapbox://styles/mapbox/light-v11', // style URL
			zoom: 3, // starting zoom
		});

		map.addControl( new mapboxgl.NavigationControl() );

		slideBlocks && slideBlocks.forEach( ( slideBlock, index ) => {
			console.log( slideBlock, slideBlock.props );
			const { id, lat, long } = slideBlock.attributes;

			const markerDiv = document.createElement( 'div' );
			markerDiv.className = 'marker';
			markerDiv.id = id;

			markerDiv.addEventListener( 'click', ( event ) => {
				const markerDivs = document.getElementsByClassName( 'marker' );
				markerDivs && markerDivs.forEach( ( div ) => {
					div.classList.remove( 'active' );
				});
				markerDiv.classList.add( 'active' );
				setCurrentItemIndex( index );
			} );

			const pin = new mapboxgl
				.Marker( markerDiv )
				.setDraggable( true )
				.setLngLat( [ long, lat ] )
				.addTo( map );

			pin.on( 'dragend', () => {
				const lngLat = pin.getLngLat();
				updateBlockAttributes( slideBlock.clientId, { lat: lngLat.lat, long: lngLat.lng } )
			});
		});

		map.on( 'moveend', () => {
			const center = map?.getCenter();
			if ( ! center ) {
				return;
			}
			setActiveCoords( [ center.lng, center.lat ] );
		} );

		map.on('load', () => {
			// add a clustered GeoJSON source for a sample set of earthquakes
			map.addSource('earthquakes', {
				'type': 'geojson',
				'data': 'https://docs.mapbox.com/mapbox-gl-js/assets/earthquakes.geojson',
				'cluster': true,
				'clusterRadius': 80,
				'clusterProperties': {"sum": ["get", "count", ["get", "value", ["properties"]]] }
			});
			// circle and symbol layers for rendering individual earthquakes (unclustered points)
			map.addLayer({
				'id': 'earthquake_circle',
				'type': 'circle',
				'source': 'earthquakes',
				'filter': ['!=', 'cluster', true],
				'paint': {
					'circle-color': '#000',
					'circle-radius': 12
				}
			});
			map.addLayer({
				'id': 'earthquake_label',
				'type': 'symbol',
				'source': 'earthquakes',
				'filter': ['!=', 'cluster', true],
				'layout': {
					'text-field': "{point_count_abbreviated}",
					'text-size': 10
				},
				'paint': {
					'text-color': 'white'
				}
			});

			// objects for caching and keeping track of HTML marker objects (for performance)
			const markers = {};
			let markersOnScreen = {};

			function updateMarkers() {
				const newMarkers = {};
				const features = map.querySourceFeatures('earthquakes');

				// for every cluster on the screen, create an HTML marker for it (if we didn't yet),
				// and add it to the map if it's not there already
				for (const feature of features) {
					const coords = feature.geometry.coordinates;
					const props = feature.properties;
					const id = props.cluster_id;

					console.log( feature );

					if ( ! props.cluster ){
						const markerDiv = document.createElement( 'div' );
						markerDiv.className = 'marker';
						markerDiv.id = id;

						const pin = new mapboxgl
							.Marker( markerDiv )
							.setDraggable( true )
							.setLngLat( coords )
							.addTo( map );

						newMarkers[id] = pin;

						if (!markersOnScreen[id]) pin.addTo(map);
					} else {;
						const markerDiv = document.createElement( 'div' );
						markerDiv.className = 'cluster';
						markerDiv.id = id;

						const pin = new mapboxgl
							.Marker( markerDiv )
							.setDraggable( false )
							.setLngLat( coords )
							.addTo( map );

						newMarkers[id] = pin;

						if (!markersOnScreen[id]) pin.addTo(map);
					}
				}
				// for every marker we've added previously, remove those that are no longer visible
				for (const id in markersOnScreen) {
					if (!newMarkers[id]) markersOnScreen[id].remove();
				}
				markersOnScreen = newMarkers;
			}

			// after the GeoJSON data is loaded, update markers on the screen on every frame
			map.on('render', () => {
				if (!map.isSourceLoaded('earthquakes')) return;
				updateMarkers();
			});

			map.on('moveend', () => {
				console.log( 'END' );
				if (!map.isSourceLoaded('earthquakes')) return;
				updateMarkers();
			});
		});

	}, [ slideBlocks.length ]);

	const blockProps = useBlockProps( {
		className: 'map map-carousel',
	} );

	return (
		<div { ...useBlockProps() }>
			<div id="map"></div>
			<div className="inner-block-slider">
			<p className="help">{ __( 'Click on the + below to add a marker. Position the marker by dragging or enter its coordinates', 'wmf-reports' ) }</p>
				<InnerBlocksDisplaySingle
					allowedBlocks={ [ 'wmf-reports/map-inner' ] }
					className="slides"
					currentItemIndex={ currentItemIndex }
					parentBlockId={ clientId }
					template={ [ 'wmf-reports/map-inner' ] }
				/>
				<Navigation
					addSlide={ addSlide }
					addSlideEnabled={ true }
					currentPage={ currentItemIndex + 1 }
					nextEnabled={ currentItemIndex + 1 < slideBlocks.length }
					prevEnabled={ currentItemIndex + 1 > 1 }
					setCurrentPage={ ( page ) => setCurrentItemIndex( page - 1 ) }
					totalPages={ slideBlocks.length }
				/>
			</div>
		</div>
	);
}
