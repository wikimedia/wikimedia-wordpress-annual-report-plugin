import { registerBlockType } from '@wordpress/blocks';

import Edit from './edit';
import Save from './save';
import metadata from './block.json';

/** @see https://www.npmjs.com/package/@wordpress/scripts#using-css */
import './style.scss';

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
