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
import deprecated from './deprecated';
import metadata from './block.json';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType( metadata.name, {
	/**
	 * @see ./edit.js
	 */
	edit: Edit,
	save: ( { attributes } ) => {
		let reserializedJSON = '';

		const blockStyle = {};
		if ( attributes.maxWidth && attributes.align !== 'full' ) {
			blockStyle.maxWidth = `${ attributes.maxWidth }px`;
		}

		try {
			const parsedJSON = JSON.parse( attributes.animationData );

			if ( parsedJSON.w && parsedJSON.h ) {
				blockStyle.aspectRatio = `${ parsedJSON.w } / ${ parsedJSON.h }`;
			}

			reserializedJSON = JSON.stringify( parsedJSON );
		} catch ( e ) {
			// Save as unchanged if invalid JSON.
			reserializedJSON = attributes.animationData;
		}
		return (
			<div
				{ ...useBlockProps.save( { className: 'wmf-animation' } ) }
				style={ blockStyle }
				data-animation={ reserializedJSON }
				data-loop={ attributes.loop }
			/>
		);
	},
	deprecated,
} );

// Block HMR boilerplate.
if ( module.hot ) {
	module.hot.accept();
	const { deregister, refresh } = require( '../../helpers/hot-blocks.js' );
	module.hot.dispose( deregister( metadata.name ) );
	refresh( metadata.name, module.hot.data );
}
