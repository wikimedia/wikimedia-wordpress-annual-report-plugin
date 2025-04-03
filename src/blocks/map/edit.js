/* global wmf:false */
import { __ } from '@wordpress/i18n';
import { createBlock } from '@wordpress/blocks';
import {
	InspectorControls,
	useBlockProps,
	withColors,
} from '@wordpress/block-editor';
import { PanelBody, TextControl, SelectControl } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';
import { useCallback, useEffect, useRef, useState } from '@wordpress/element';

import mapboxgl from 'mapbox-gl';
import './editor.scss';

import InnerBlocksDisplaySingle from '../../components/inner-block-slider/inner-block-single-display';
import Navigation from '../../components/inner-block-slider/navigation';
import PaletteColorPicker from '../../components/palette-color-picker';

let map = null;
let mapItemIndex = 0;

const mapboxStyleOptions = [
	{
		label: 'WMF Report',
		value: 'mapbox://styles/mattwatsonhm/clu09j0hw00tf01p7dpw5hyv7',
	},
	{ label: 'Standard', value: 'mapbox://styles/mapbox/standard' },
	{
		label: 'Standard Satellite',
		value: 'mapbox://styles/mapbox/standard-satellite',
	},
	{ label: 'Streets', value: 'mapbox://styles/mapbox/streets-v12' },
	{ label: 'Outdoors', value: 'mapbox://styles/mapbox/outdoors-v12' },
	{ label: 'Light', value: 'mapbox://styles/mapbox/light-v11' },
	{ label: 'Dark', value: 'mapbox://styles/mapbox/dark-v11' },
	{ label: 'Satellite', value: 'mapbox://styles/mapbox/satellite-v9' },
	{
		label: 'Satellite Streets',
		value: 'mapbox://styles/mapbox/satellite-streets-v12',
	},
	{
		label: 'Navigation Day',
		value: 'mapbox://styles/mapbox/navigation-day-v1',
	},
	{
		label: 'Navigation Night',
		value: 'mapbox://styles/mapbox/navigation-night-v1',
	},
	{ label: 'Custom', value: '' },
];

/**
 * Render a container and initialize the map within it.
 *
 * @param {Object}   props               React component props.
 * @param {string}   props.mapStyle      mapbox:// style string URI.
 * @param {string}   props.projection    Which map projection to use.
 * @param {Object[]} props.slideBlocks   Block array, necessary for rerendering map.
 * @param {Function} props.updateMarkers Callback to update map pins.
 * @return {React.ReactNode} Container node for Map.
 */
const MapPreview = ( {
	mapStyle,
	projection = 'equirectangular',
	slideBlocks = [],
	updateMarkers,
} ) => {
	const containerRef = useRef( null );

	// Parse the slideBlocks into a stable JSON string, which we can use
	// to rerender the map as needed without unnecessarily causing it to
	// reinit (with a distracting visual flash) every time text is changed
	// in nested blocks.
	const serializedFeatures = JSON.stringify(
		slideBlocks.map( ( { attributes, clientId } ) => ( {
			clientId,
			id: attributes.id,
			lat: attributes.lat,
			long: attributes.long,
		} ) )
	);

	/**
	 * Init the map.
	 */
	useEffect( () => {
		if ( ! wmf?.apiKey || ! mapboxgl ) {
			// eslint-disable-next-line no-console
			console.error(
				'Unable to initialize mapbox. API key or mapbox global unavailable.'
			);
			return;
		}

		const fullScreenControl = new mapboxgl.NavigationControl();

		if ( map ) {
			map.removeControl( fullScreenControl );
			map.remove();
		}

		if ( containerRef.current ) {
			// Clear out DIV to avoid "The map container element should be empty"
			// warnings when re-rendering.
			containerRef.current.innerHTML = '';
		}
		mapboxgl.accessToken = wmf.apiKey;
		map = new mapboxgl.Map( {
			container: 'map',
			center: [ 8.18, 9 ],
			minZoom: 0,
			projection,
			renderWorldCopies: false,
			scrollZoom: false,
			style: mapStyle || 'mapbox://styles/mapbox/light-v11', // 'mapbox://styles/mattwatsonhm/clu09j0hw00tf01p7dpw5hyv7' >- custom grey colours.
			zoom: 0.5,
		} );

		map.addControl( fullScreenControl );

		const slideMarkers = JSON.parse( serializedFeatures );

		map.on( 'load', () => {
			// For clustering we need to add a data source.
			map.addSource( 'markers', {
				type: 'geojson',
				data: {
					type: 'FeatureCollection',
					features:
						slideMarkers.map(
							( { id, lat, long, clientId }, index ) => {
								return {
									geometry: {
										type: 'Point',
										coordinates: [ long, lat ],
									},
									type: 'Feature',
									properties: {
										clientId,
										id,
										index,
									},
								};
							}
						) || [],
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

			// For clustering we need to add a layer for markers.
			// We will replace these with HTML markers.
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

			// For clustering we need to add a layer for clusters.
			// We will replace these with HTML markers.
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
					'icon-color': '#000',
					'text-color': 'white',
				},
			} );

			// Rendering happen as the map moves, update the pins on the map
			// based on the above data source.
			map.on( 'render', () => {
				if ( ! map.isSourceLoaded( 'markers' ) ) {
					return;
				}
				updateMarkers();
			} );
		} );
		// We do not want a change to projection to trigger a re-render, that
		// is handled separately below.
		// eslint-disable-next-line react-hooks/exhaustive-deps
	}, [ mapStyle, serializedFeatures, updateMarkers ] );

	useEffect( () => {
		if ( map ) {
			// Keep the projection up to date as it changes.
			map.setProjection( projection );
		}
	}, [ projection ] );

	return (
		<div
			id="map"
			style={ { minHeight: '250px' } }
			ref={ containerRef }
		></div>
	);
};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props                      Block Props.
 * @param {Object}   props.attributes           Block Attributes.
 * @param {number}   props.clientId             Client ID.
 * @param {Function} props.setAttributes        Set Block Attributes.
 * @param {Object}   props.markerActiveColor    Color object for the active marker.
 * @param {Function} props.setMarkerActiveColor Function to update the active marker color.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
const Edit = ( {
	attributes,
	clientId,
	setAttributes,
	markerActiveColor,
	setMarkerActiveColor,
} ) => {
	const { mapStyle } = attributes;

	// Get the innerBlocks (slideBlocks).
	const slideBlocks = useSelect(
		( select ) =>
			select( 'core/block-editor' ).getBlock( clientId ).innerBlocks
	);

	const { insertBlock, selectBlock, updateBlockAttributes } =
		useDispatch( 'core/block-editor' );

	// Track state in a ref, to allow us to determine if slides are added or removed.
	const slideCount = useRef( slideBlocks.length );

	// Keep track of the selected Slide.
	const [ currentItemIndex, setCurrentItemIndex ] = useState( 0 );

	/**
	 * Add Slide Function.
	 */
	const addSlide = () => {
		const center = map?.getCenter();
		if ( ! center ) {
			return;
		}

		const created = createBlock( 'wmf-reports/marker', {
			id: Date.now(),
			title: `Marker ${ slideCount.current + 1 }`,
			lat: center.lat,
			long: center.lng,
		} );
		insertBlock( created, undefined, clientId );
	};

	/**
	 * Update Markers Function.
	 *
	 * As we move around the map, clusters will show and hide. We need to update
	 * the markers on the map dynamically to handle this.
	 */
	const updateMarkers = useCallback( () => {
		if ( ! map ) {
			return;
		}

		const features = map.querySourceFeatures( 'markers' );
		const mapMarkers = document.getElementsByClassName( 'marker' );
		const clusterMarkers = document.getElementsByClassName( 'cluster' );
		const newMarkers = [];
		const newClusters = [];

		// For every cluster on the screen, create an HTML marker for it
		// (if it does not already exist).
		for ( const feature of features ) {
			const coords = feature.geometry.coordinates;
			const {
				clientId: blockId,
				cluster,
				cluster_id: clusterId,
				id,
				index,
			} = feature.properties;

			// Existing Marker.
			const marker =
				Array.from( mapMarkers ).filter(
					( mapMarker ) => parseInt( mapMarker?.dataset?.id ) === id
				)?.[ 0 ] || null;

			// Existing Cluster.
			const clusterMarker =
				Array.from( clusterMarkers ).filter(
					( mapMarker ) =>
						parseInt( mapMarker?.dataset?.clusterId ) === clusterId
				)?.[ 0 ] || null;

			// Marker is a cluster, if it does not exist, create it.
			if ( cluster ) {
				if ( ! clusterMarker ) {
					const markerDiv = document.createElement( 'div' );
					markerDiv.className = 'cluster';
					markerDiv.dataset.clusterId = clusterId;
					markerDiv.innerHTML =
						feature.properties.point_count_abbreviated;

					new mapboxgl.Marker( markerDiv )
						.setDraggable( false )
						.setLngLat( coords )
						.addTo( map );

					// On click select zoom into the cluster.
					markerDiv.addEventListener( 'click', () => {
						const selectedClusters = features.filter(
							( c ) => c.id === clusterId
						);

						map.getSource( 'markers' ).getClusterExpansionZoom(
							clusterId,
							( err, zoom ) => {
								if ( err ) {
									return;
								}

								map.easeTo( {
									center: selectedClusters[ 0 ].geometry
										.coordinates,
									zoom: zoom + 1,
								} );
							}
						);
					} );
				}

				// Push it to our list of existing clusters.
				if ( ! newClusters.includes( clusterId ) ) {
					newClusters.push( clusterId );
				}
			}

			// Marker is a marker, if it does not exist, create it.
			if ( ! cluster ) {
				if ( ! marker ) {
					const markerDiv = document.createElement( 'div' );
					markerDiv.className = 'marker';
					markerDiv.dataset.id = id;

					const pin = new mapboxgl.Marker( markerDiv )
						.setDraggable( true )
						.setLngLat( coords )
						.addTo( map );

					// If the item being added is the active item.
					if ( index === mapItemIndex ) {
						markerDiv.classList.add( 'active' );
					}

					// On click select the related slide and highlight the marker.
					markerDiv.addEventListener( 'click', () => {
						Array.from( mapMarkers ).forEach( ( div ) =>
							div.classList.remove( 'active' )
						);

						markerDiv.classList.add( 'active' );

						mapItemIndex = index;
						setCurrentItemIndex( index );
						selectBlock( blockId );
					} );

					// On marker drag, update its attributes.
					pin.on( 'dragend', () => {
						const lngLat = pin.getLngLat();
						updateBlockAttributes( blockId, {
							lat: lngLat.lat,
							long: lngLat.lng,
						} );
					} );
				}

				// Push it to our list of existing markers.
				if ( ! newMarkers.includes( id ) ) {
					newMarkers.push( id );
				}
			}
		}

		// If there are markers which are on the map, but shouldn't be, remove them.
		Array.from( mapMarkers ).forEach( ( mapMarker ) => {
			if ( ! newMarkers.includes( parseInt( mapMarker?.dataset?.id ) ) ) {
				mapMarker.remove();
			}
		} );

		// If there are clusters which are on the map, but shouldn't be, remove them.
		Array.from( clusterMarkers ).forEach( ( clusterMarker ) => {
			if (
				! newClusters.includes(
					parseInt( clusterMarker?.dataset?.clusterId )
				)
			) {
				clusterMarker.remove();
			}
		} );
	}, [ selectBlock, updateBlockAttributes ] );

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

	const blockProps = useBlockProps( {
		className: 'map map--carousel carousel',
	} );

	// eslint-disable-next-line no-undef
	if ( ! wmf.apiKey ) {
		return (
			<div className="components-placeholder is-large">
				<div className="components-placeholder__fieldset">
					{ __(
						'Map not available, please ensure you have entered the map API key.',
						'wmf-reports'
					) }
				</div>
			</div>
		);
	}

	const customStyleSelected =
		mapStyle === '' ||
		! mapboxStyleOptions.find( ( { value } ) => value === mapStyle );

	return (
		<div
			{ ...blockProps }
			style={ {
				'--map-marker-active-color':
					markerActiveColor?.color || attributes.markerActiveColor,
			} }
		>
			<PaletteColorPicker
				label={ __( 'Active Marker', 'wmf-reports' ) }
				color={
					markerActiveColor?.color || attributes.markerActiveColor
				}
				onColorChange={ setMarkerActiveColor }
				clientId={ clientId }
			/>
			<InspectorControls>
				<PanelBody>
					<SelectControl
						label={ __( 'Select Mapbox style', 'wmf-reports' ) }
						help={ __(
							'Change the style associated with the map',
							'wmf-reports'
						) }
						options={ mapboxStyleOptions }
						// eslint-disable-next-line no-shadow
						onChange={ ( mapStyle ) =>
							setAttributes( { mapStyle } )
						}
						value={ customStyleSelected ? '' : mapStyle }
					/>
					{ customStyleSelected ? (
						<TextControl
							label={ __( 'Custom style', 'wmf-reports' ) }
							value={ mapStyle }
							// eslint-disable-next-line no-shadow
							onChange={ ( mapStyle ) => {
								setAttributes( { mapStyle } );
							} }
						/>
					) : null }
					<SelectControl
						label={ __( 'Choose projection', 'wmf-reports' ) }
						options={ [
							{
								value: 'equirectangular',
								label: 'Equirectangular',
							},
							{ value: 'mercator', label: 'Mercator' },
						] }
						value={ attributes.projection || 'equirectangular' }
						onChange={ ( projection ) =>
							setAttributes( { projection } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<MapPreview
				{ ...{ mapStyle, slideBlocks, updateMarkers } }
				projection={ attributes.projection }
			/>
			<div className="inner-block-slider">
				<InnerBlocksDisplaySingle
					allowedBlocks={ [ 'wmf-reports/marker' ] }
					className="slides"
					currentItemIndex={ currentItemIndex }
					parentBlockId={ clientId }
					template={ [ [ 'wmf-reports/marker' ] ] }
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
};

export default withColors( {
	markerActiveColor: 'active-marker-color',
} )( Edit );
