import { createBlock, registerBlockType } from '@wordpress/blocks';

import Edit from './edit';
import Save from './save';
import metadata from './block.json';

/** @see https://www.npmjs.com/package/@wordpress/scripts#using-css */
import './frontend.scss';

registerBlockType( metadata.name, {
	...metadata,
	edit: Edit,
	save: Save,
	transforms: {
		from: [
			{
				type: 'block',
				blocks: [ 'core/group' ],
				transform: ( attributes, innerBlocks ) => {
					return createBlock(
						metadata.name,
						attributes,
						innerBlocks
					);
				},
			},
		],
		// Attempted to put a "to" transform here to convert from Expandable TO
		// a group block, but did not take effect. Filtered core/group instead.
		// See blocks/core/group.js.
	},
} );

// Block HMR boilerplate.
if ( module.hot ) {
	module.hot.accept();
	const { deregister, refresh } = require( '../../helpers/hot-blocks.js' );
	module.hot.dispose( deregister( metadata.name ) );
	refresh( metadata.name, module.hot.data );
}
