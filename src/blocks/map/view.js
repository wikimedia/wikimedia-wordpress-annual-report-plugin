// eslint-disable-next-line import/no-unresolved
import mapboxgl from 'mapbox-gl';

// eslint-disable-next-line no-undef
mapboxgl.accessToken = wmf.apiKey;

const mapDiv = document.getElementById( 'map' );
const markers = document.getElementsByClassName(
	'wp-block-wmf-reports-marker'
);
const backButton = document.getElementById( 'map-back' );
const forwardButton = document.getElementById( 'map-forward' );
const fullScreenControl = new mapboxgl.NavigationControl();
const map = new mapboxgl.Map( {
	attributionControl: false,
	container: 'map',
	center: [ 8.18, 11.83 ],
	projection: 'equalEarth',
	scrollZoom: false,
	style: mapDiv?.dataset?.mapStyle || 'mapbox://styles/mapbox/light-v11',
	zoom: 1,
} );
let mapItemIndex = 0;
let processingAnimation = false;

map.addControl( fullScreenControl );

const setMarker = ( id ) => {
	mapItemIndex = id;

	const nextMarkerInfoBox = markers[ id ];
	const mapMarkers = document.getElementsByClassName( 'marker' );
	const nextMapMarkers = Array.from( mapMarkers ).filter(
		( mapMarker ) => mapMarker.dataset.id === nextMarkerInfoBox.id
	);

	const currentSlide = document.querySelector(
		'.wp-block-wmf-reports-marker[style*="visibility: visible"]'
	);
	let currentId = 0;
	if ( currentSlide ) {
		currentId = Array.from( markers ).findIndex(
			( markerInfoBox ) =>
				parseInt( currentSlide.id ) === parseInt( markerInfoBox.id )
		);
	}

	Array.from( mapMarkers ).forEach( ( mapMarker ) => {
		mapMarker.classList.remove( 'active' );
	} );

	nextMapMarkers.forEach( ( mapMarker ) => {
		mapMarker.classList.add( 'active' );
	} );

	Array.from( markers ).forEach( ( markerInfoBox, index ) => {
		if ( processingAnimation ) {
			return;
		}

		if ( index === id ) {
			return;
		}

		// Handle animations.
		if ( index === currentId && currentId !== id ) {
			// Left to right animation.
			if ( id >= currentId ) {
				nextMarkerInfoBox.style.height = null;
				nextMarkerInfoBox.style.opacity = 0;

				markerInfoBox.style.opacity = 1;
				markerInfoBox.style.position = 'absolute';
				markerInfoBox.style.zIndex = 1;

				markerInfoBox.classList.add( 'animate' );

				setTimeout( () => {
					markerInfoBox.style.height = nextMarkerInfoBox.offsetHeight;
					markerInfoBox.style.opacity = 0;

					processingAnimation = true;
				}, 1 );

				setTimeout( () => {
					markerInfoBox.style.height = 0;
					markerInfoBox.style.opacity = null;
					markerInfoBox.style.position = null;
					markerInfoBox.style.visibility = 'hidden';
					markerInfoBox.style.zIndex = null;

					markerInfoBox.classList.remove( 'animate' );

					processingAnimation = false;
				}, 250 );

				nextMarkerInfoBox.style.height = null;
				nextMarkerInfoBox.style.opacity = null;
				nextMarkerInfoBox.style.visibility = 'visible';

				return;
			}

			// Right to left animation.
			if ( id < currentId ) {
				nextMarkerInfoBox.style.height = null;
				nextMarkerInfoBox.style.opacity = 0;
				nextMarkerInfoBox.style.position = 'absolute';
				nextMarkerInfoBox.style.visibility = 'visible';

				markerInfoBox.style.height = null;
				markerInfoBox.style.opacity = 1;
				markerInfoBox.style.visibility = 'visible';

				setTimeout( () => {
					nextMarkerInfoBox.classList.add( 'animate' );

					markerInfoBox.classList.add( 'animate' );
				}, 1 );

				setTimeout( () => {
					nextMarkerInfoBox.style.opacity = 1;

					markerInfoBox.style.opacity = 0;
					markerInfoBox.style.height =
						nextMarkerInfoBox.offsetHeight + 'px';

					processingAnimation = true;
				}, 2 );

				setTimeout( () => {
					nextMarkerInfoBox.style.height = null;
					nextMarkerInfoBox.style.opacity = null;
					nextMarkerInfoBox.style.position = null;
					nextMarkerInfoBox.style.visibility = 'visible';

					nextMarkerInfoBox.classList.remove( 'animate' );

					markerInfoBox.style.height = 0;
					markerInfoBox.style.opacity = null;
					markerInfoBox.style.visibility = 'hidden';

					markerInfoBox.classList.remove( 'animate' );

					processingAnimation = false;
				}, 250 );
				return;
			}
			return;
		}

		markerInfoBox.style.height = 0;
		markerInfoBox.style.visibility = 'hidden';
	} );
};

setMarker( 0 );

backButton.addEventListener( 'click', () => {
	const index = Array.from( markers ).findIndex(
		( marker ) => marker.style.visibility === 'visible'
	);

	const nextIndex = index - 1 < 0 ? markers.length - 1 : index - 1;
	setMarker( nextIndex );
} );

forwardButton.addEventListener( 'click', () => {
	let index = Array.from( markers ).findIndex(
		( marker ) => marker.style.visibility === 'visible'
	);

	if ( index < 0 ) {
		index = 0;
	}

	const nextIndex = index + 1 > markers.length - 1 ? 0 : index + 1;
	setMarker( nextIndex );
} );

/**
 * Update Markers Function.
 *
 * As we move around the map, clusters will show and hide. We need to update
 * the markers on the map dynamically to handle this.
 */
const updateMarkers = () => {
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
			cluster,
			cluster_id: clusterId,
			id,
			index,
		} = feature.properties;

		// Existing Marker.
		const marker =
			Array.from( mapMarkers ).filter(
				( mapMarker ) => mapMarker?.dataset?.id === id
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

				new mapboxgl.Marker( markerDiv )
					.setDraggable( false )
					.setLngLat( coords )
					.addTo( map );

				// If the item being added is the active item.
				if ( index === mapItemIndex ) {
					markerDiv.classList.add( 'active' );
				}

				// On click select the related slide and highlight the marker.
				markerDiv.addEventListener( 'click', () => {
					setMarker( index );
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
		if ( ! newMarkers.includes( mapMarker?.dataset?.id ) ) {
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
};

map.on( 'load', () => {
	// For clustering we need to add a data source.
	map.addSource( 'markers', {
		type: 'geojson',
		data: {
			type: 'FeatureCollection',
			features:
				Array.from( markers ).map( ( marker, index ) => {
					return {
						geometry: {
							type: 'Point',
							coordinates: [
								marker?.dataset?.long || 0,
								marker?.dataset?.lat || 0,
							],
						},
						type: 'Feature',
						properties: {
							id: marker?.id,
							index,
						},
					};
				} ) || [],
		},
		cluster: true,
		clusterRadius: 10,
		clusterProperties: {
			sum: [ 'get', 'count', [ 'get', 'value', [ 'properties' ] ] ],
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
			'circle-color': '#000',
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
