import { __ } from '@wordpress/i18n';
import { createBlock } from '@wordpress/blocks';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';
import { useCallback, useEffect, useRef, useState } from '@wordpress/element';

// eslint-disable-next-line import/no-unresolved
import mapboxgl from '!mapbox-gl';
import './editor.scss';

import InnerBlocksDisplaySingle from '../../components/inner-block-slider/inner-block-single-display';
import Navigation from '../../components/inner-block-slider/navigation';

let map = null;

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props               Block Props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {number}   props.clientId      Client ID.
 * @param {Function} props.setAttributes Set Block Attributes.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, clientId, setAttributes } ) {
	const { mapStyle } = attributes;

	const slideBlocks = useSelect(
		( select ) =>
			select( 'core/block-editor' ).getBlock( clientId ).innerBlocks
	);

	// Track state in a ref, to allow us to determine if slides are added or removed.
	const slideCount = useRef( slideBlocks.length );

	const { insertBlock, selectBlock, updateBlockAttributes } =
		useDispatch( 'core/block-editor' );

	const [ currentItemIndex, setCurrentItemIndex ] = useState( 0 );

	/**
	 * Custom "Add Block" appender.
	 *
	 * @return { void }
	 */
	const addSlide = () => {
		const center = map?.getCenter();
		if ( ! center ) {
			return;
		}

		const id = Date.now();
		const created = createBlock( 'wmf-reports/marker', {
			id,
			title: `Marker ${ slideCount.current + 1 }`,
			lat: center.lat,
			long: center.lng,
		} );
		insertBlock( created, undefined, clientId );
	};

	const markers = {};
	let markersOnScreen = {};

	/**
	 * Update Markers.
	 *
	 * Whenever we alter the map we need to make sure the markers are updated.
	 */
	const updateMarkers = useCallback( () => {
		const newMarkers = {};
		const features = map.querySourceFeatures( 'markers' );

		// for every cluster on the screen, create an HTML marker for it (if we didn't yet),
		// and add it to the map if it's not there already
		for ( const feature of features ) {
			const coords = feature.geometry.coordinates;
			const {
				clientId: blockId,
				cluster,
				id,
				index,
			} = feature.properties;

			let marker = markers?.[ id ];

			if ( ! cluster ) {
				if ( ! marker ) {
					const markerDiv = document.createElement( 'div' );
					markerDiv.className = 'marker';
					markerDiv.dataset.id = id;

					marker = new mapboxgl.Marker( markerDiv )
						.setDraggable( true )
						.setLngLat( coords )
						.addTo( map );

					markers[ id ] = marker;

					if ( index === 0 ) {
						markerDiv.classList.add( 'active' );
					}

					markerDiv.addEventListener( 'click', () => {
						setCurrentItemIndex( index );
						selectBlock( blockId );
					} );
				}

				marker.on( 'dragend', () => {
					const lngLat = marker.getLngLat();
					updateBlockAttributes( blockId, {
						lat: lngLat.lat,
						long: lngLat.lng,
					} );
				} );

				newMarkers[ id ] = marker;
			} else {
				if ( ! marker ) {
					const markerDiv = document.createElement( 'div' );
					markerDiv.className = 'cluster';
					markerDiv.dataset.id = id;
					markerDiv.innerHTML =
						feature.properties.point_count_abbreviated;

					marker = new mapboxgl.Marker( markerDiv )
						.setDraggable( false )
						.setLngLat( coords )
						.addTo( map );

					markers[ id ] = marker;
				}
				newMarkers[ id ] = marker;
			}

			if ( ! markersOnScreen[ id ] ) {
				marker.addTo( map );
			}
		}

		// For every marker we've added previously, remove those that are no longer visible
		for ( const id in markersOnScreen ) {
			if ( ! newMarkers[ id ] ) {
				markersOnScreen[ id ].remove();
			}
		}

		// eslint-disable-next-line react-hooks/exhaustive-deps
		markersOnScreen = newMarkers;
	}, [ map, selectBlock, updateBlockAttributes ] );

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
	}, [ slideBlocks.length, currentItemIndex, slideCount, slideBlocks ] );

	/**
	 * Init the map.
	 */
	useEffect( () => {
		const fullScreenControl = new mapboxgl.NavigationControl();

		if ( map ) {
			map.removeControl( fullScreenControl );
			map.remove();
		}

		mapboxgl.accessToken =
			'***REMOVED***';
		map = new mapboxgl.Map( {
			container: 'map',
			center: [ -28.326915886961197, 25.093160453432485 ],
			projection: 'equalEarth',
			scrollZoom: false,
			style: mapStyle || 'mapbox://styles/mapbox/light-v11', // 'mapbox://styles/mattwatsonhm/clu09j0hw00tf01p7dpw5hyv7' >- custom grey colours.
			zoom: 2,
		} );

		map.addControl( fullScreenControl );

		map.on( 'load', () => {
			// add a clustered GeoJSON source for a sample set of earthquakes
			map.addSource( 'markers', {
				type: 'geojson',
				data: {
					type: 'FeatureCollection',
					features:
						slideBlocks?.map( ( slideBlock, index ) => {
							const { id, lat, long } = slideBlock.attributes;
							return {
								geometry: {
									type: 'Point',
									coordinates: [ long, lat ],
								},
								type: 'Feature',
								properties: {
									clientId: slideBlock.clientId,
									id,
									index,
								},
							}
						} ) || [],
				},
				cluster: true,
				clusterRadius: 10,
				clusterProperties: {
					sum: [
						'get',
						'count',
						[ 'get', 'value', [ 'properties' ] ],
					],
				},
			} );
			// circle and symbol layers for rendering individual earthquakes (unclustered points)
			map.addLayer( {
				id: 'marker_circle',
				type: 'circle',
				source: 'markers',
				filter: [ '!=', 'cluster', true ],
				paint: {
					'circle-color': '#000',
					'circle-radius': 1,
				},
			} );
			map.addLayer( {
				id: 'marker_label',
				type: 'symbol',
				source: 'markers',
				filter: [ '!=', 'cluster', true ],
				layout: {
					'text-field': '{point_count_abbreviated}',
					'text-size': 10,
				},
				paint: {
					'circle-color': '#000',
					'text-color': 'white',
				},
			} );

			// after the GeoJSON data is loaded, update markers on the screen on every frame
			map.on( 'render', () => {
				if ( ! map.isSourceLoaded( 'markers' ) ) {
					return;
				}
				updateMarkers();

				const mapMarkers = document.getElementsByClassName( 'marker' );
				Array.from( mapMarkers ).forEach( ( div ) => {
					div.classList.remove( 'active' );
				} );

				const slideBlock = slideBlocks[ currentItemIndex ];
				const { id } = slideBlock?.attributes || {};

				if ( id ) {
					const nextMapMarkers = Array.from( mapMarkers ).filter(
						( mapMarker ) =>
							mapMarker.dataset.id.toString() === id.toString()
					);
					nextMapMarkers.forEach( ( mapMarker ) => {
						mapMarker.classList.add( 'active' );
					} );
				}
			} );

			map.on( 'moveend', () => {
				if ( ! map.isSourceLoaded( 'markers' ) ) {
					return;
				}
				updateMarkers();
			} );
		} );
	}, [ mapStyle, slideBlocks, slideBlocks.length, updateMarkers ] );

	const blockProps = useBlockProps( {
		className: 'map map-carousel',
	} );

	return (
		<div { ...blockProps }>
			<InspectorControls>
				<PanelBody>
					<TextControl
						help={ __(
							'Change the style associated with the map',
							'wmf-reports'
						) }
						label={ __( 'Map Style', 'wmf-reports' ) }
						value={ mapStyle }
						// eslint-disable-next-line no-shadow
						onChange={ ( mapStyle ) => {
							setAttributes( { mapStyle } );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<div id="map"></div>
			<div className="inner-block-slider">
				<InnerBlocksDisplaySingle
					allowedBlocks={ [ 'wmf-reports/marker' ] }
					className="slides"
					currentItemIndex={ currentItemIndex }
					parentBlockId={ clientId }
					template={ [ 'wmf-reports/marker' ] }
				/>
				<p className="help">
					{ __(
						'Click on the + below to add a marker. Position the marker by dragging or enter its coordinates',
						'wmf-reports'
					) }
				</p>
				<Navigation
					addSlide={ addSlide }
					addSlideEnabled={ true }
					currentPage={ currentItemIndex + 1 }
					nextEnabled={ currentItemIndex + 1 < slideBlocks.length }
					prevEnabled={ currentItemIndex + 1 > 1 }
					setCurrentPage={ ( page ) => {
						setCurrentItemIndex( page - 1 );
					} }
					totalPages={ slideBlocks.length }
				/>
			</div>
		</div>
	);
}
