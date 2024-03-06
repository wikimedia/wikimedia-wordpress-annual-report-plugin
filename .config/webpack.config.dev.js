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
			port: 8080,
		},
		entry: {
			main: filePath( 'assets/src/main.js' ),
			editor: filePath( 'assets/src/editor.js' ),
			// Include these standalone block view.js files in the editor build
			// configuration so they may use the block editor's externals.
			'blocks/expandable': filePath( 'assets/src/blocks/expandable/view.js' ),
		},
		output: {
			chunkFormat: 'array-push',
			path: filePath( 'assets/dist' ),
			publicPath: `http://localhost:${port}/annual-report/`,
		}
	} ),
]
);
