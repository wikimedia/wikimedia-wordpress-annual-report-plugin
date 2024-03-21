// eslint-disable-next-line import/no-unresolved
import mapboxgl from '!mapbox-gl';

mapboxgl.accessToken =
	'***REMOVED***';

const mapDiv = document.getElementById( 'map' );
const fullScreenControl = new mapboxgl.NavigationControl();
const map = new mapboxgl.Map( {
	container: 'map',
	center: [ -28.326915886961197, 25.093160453432485 ],
	projection: 'equalEarth',
	scrollZoom: false,
	style: mapDiv?.dataset?.mapStyle || 'mapbox://styles/mapbox/light-v11',
	zoom: 2,
} );

let hasRendered = false;

map.addControl( fullScreenControl );

const markers = document.getElementsByClassName(
	'wp-block-wmf-reports-marker'
);

// Make all but first slide hidden.
Array.from( markers ).forEach( ( div, index ) => {
	if ( index === 0 ) {
		return;
	}
	div.style.visibility = 'hidden';
	div.style.height = 0;
} );


map.on( 'load', () => {
	// add a clustered GeoJSON source for a sample set of earthquakes
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

		if ( hasRendered ) {
			return;
		}

		const features = map.querySourceFeatures( 'markers' );

		for ( const feature of features ) {
			const coords = feature.geometry.coordinates;
			const { cluster, id, index } = feature.properties;

			if ( ! cluster ) {
				const markerDiv = document.createElement( 'div' );
				markerDiv.className = 'marker';
				markerDiv.dataset.id = id;

				new mapboxgl.Marker( markerDiv )
					.setDraggable( false )
					.setLngLat( coords )
					.addTo( map );

				if ( index === 0 ) {
					markerDiv.classList.add( 'active' );
				}

				markerDiv.addEventListener( 'click', ( e ) => {
					const markerId = e.target.dataset.id;

					// Remove existing active status.
					const markersDivs = document.getElementsByClassName( 'marker' );
					Array.from( markersDivs ).forEach( ( div ) => {
						div.classList.remove( 'active' );
					} );

					// Make current marker active.
					e.target.classList.add( 'active' );

					// Hide all existing info areas.
					const infoAreas = document.getElementsByClassName(
						'wp-block-wmf-reports-marker'
					);
					Array.from( infoAreas ).forEach( ( div ) => {
						div.style.visibility = 'hidden';
						div.style.height = 0;
					} );

					// Highlight selected info area.
					const infoArea = document.getElementById( markerId );
					infoArea.style.visibility = 'visible';
					infoArea.style.height = null;
				} );
			} else {
				const markerDiv = document.createElement( 'div' );
				markerDiv.className = 'cluster';
				markerDiv.id = id;
				markerDiv.innerHTML =
					feature.properties.point_count_abbreviated;

				new mapboxgl.Marker( markerDiv )
					.setDraggable( false )
					.setLngLat( coords )
					.addTo( map );
			}
		}

		hasRendered = true;
	} );
} );
