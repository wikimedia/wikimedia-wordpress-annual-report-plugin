const { helpers, externals, presets } = require( '@humanmade/webpack-helpers' );

const { choosePort, cleanOnExit, filePath } = helpers;

// Clean up manifests on exit.
cleanOnExit( [
	filePath( 'assets/dist/asset-manifest.json' ),
] );

module.exports = choosePort( 8080 ).then( ( port ) => [
	presets.development( {
		name: 'editor',
		externals,
		devServer: {
			port,
		},
		entry: {
			editor: filePath( 'assets/src/editor.js' ),
		},
		output: {
			chunkFormat: 'array-push',
			path: filePath( 'assets/dist' ),
			publicPath: `http://localhost:${port}/annual-report/`,
		}
	} ),
	presets.development( {
		name: 'main',
		devServer: {
			port,
		},
		entry: {
			shiro: filePath( 'assets/src/main.js' ),
		},
		output: {
			chunkFormat: 'array-push',
			path: filePath( 'assets/dist' ),
			publicPath: `http://localhost:${port}/shiro-theme/`,
		},
	} ),
]
);
