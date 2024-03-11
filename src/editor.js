/*
 * Editor functionality.
 */

/**
 * Autoload and require all block editor functionality.
 */
import { autoloadBlocks } from 'block-editor-hmr';

import { registerBlockCollection } from '@wordpress/blocks';

// Bundle all the Annual Report blocks into a single collection.
registerBlockCollection(
	'wikimedia-annual-report',
	{
		title: 'Annual Report',
		icon: 'chart-bar',
	}
);

// Load all block index files.
autoloadBlocks(
	{ getContext: () => require.context( './blocks', true, /index\.js$/ ) },
	( context, loadModules ) => {
		if ( module.hot ) {
			module.hot.accept( context.id, loadModules );
		}
	}
);

// Load all plugin index files.
// autoloadPlugins(
// 	{ getContext: () => require.context( './plugins', true, /index\.js$/ ) },
// 	( context, loadModules ) => {
// 		if ( module.hot ) {
// 			module.hot.accept( context.id, loadModules );
// 		}
// 	}
// );
