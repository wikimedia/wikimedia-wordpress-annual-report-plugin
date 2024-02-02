const { helpers, externals, plugins, presets } = require( '@humanmade/webpack-helpers' );
const { filePath } = helpers;
const { copy, clean, miniCssExtract } = plugins;

module.exports = [
	presets.production( {
		name: 'annual-report',
		externals,
		entry: {
			editor: filePath( 'assets/src/editor.js' ),
			main: filePath( 'assets/src/main.js' ),
		},
		output: {
			chunkFormat: 'array-push',
			chunkLoading: false,
			wasmLoading: false,
			path: filePath( 'assets/dist' ),
			filename: './[name]-[chunkhash].js',
		},
		plugins: [
			clean( {
				cleanOnceBeforeBuildPatterns: [ 'editor-*', 'main-*' ],
			} ),
			miniCssExtract( {
				filename: './[name]-[chunkhash].css',
			} ),
		],
	} ),
];
