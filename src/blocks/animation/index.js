/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import Edit from './edit';
import metadata from './block.json';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType( metadata.name, {
	/**
	 * @see ./edit.js
	 */
	edit: Edit,
	save: ( { attributes } ) => {
		let reparsedJSON = '';
		try {
			reparsedJSON = JSON.stringify(
				JSON.parse( attributes.animationData )
			);
		} catch ( e ) {
			// Save as unchanged if invalid.
			reparsedJSON = attributes.animationData;
		}
		return (
			<div
				{ ...useBlockProps.save( { className: 'wmf-animation' } ) }
				style={
					attributes.maxWidth
						? `max-width: ${ attributes.maxWidth }px`
						: ''
				}
				data-animation={ reparsedJSON }
			/>
		);
	},
} );

// Block HMR boilerplate.
if ( module.hot ) {
	module.hot.accept();
	const { deregister, refresh } = require( '../../helpers/hot-blocks.js' );
	module.hot.dispose( deregister( metadata.name ) );
	refresh( metadata.name, module.hot.data );
}
