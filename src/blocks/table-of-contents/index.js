import { registerBlockType } from '@wordpress/blocks';

/** @see https://www.npmjs.com/package/@wordpress/scripts#using-css */
import './frontend.scss';

import Edit from './edit';
import metadata from './block.json';
import Save from './save.js';

registerBlockType( metadata.name, {
	...metadata,
	edit: Edit,
	save: Save,
} );

// Block HMR boilerplate.
if ( module.hot ) {
	module.hot.accept();
	const { deregister, refresh } = require( '../../helpers/hot-blocks.js' );
	module.hot.dispose( deregister( metadata.name ) );
	refresh( metadata.name, module.hot.data );
}
