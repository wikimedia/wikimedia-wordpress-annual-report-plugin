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
import { InnerBlocks, RichText, useBlockProps } from '@wordpress/block-editor';

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType( metadata.name, {
	/**
	 * @see ./edit.js
	 */
	edit: Edit,
	save: ( { attributes } ) => {
		const blockProps = useBlockProps.save( {
			className: 'wmf-accordion-item',
		} );
		const { borderColor, title } = attributes;

		return (
			<div
				{ ...blockProps }
				style={
					borderColor && {
						borderLeftColor: `var(--wp--preset--color--${ borderColor })`,
					}
				}
			>
				<button className="wmf-accordion-item__title">
					<RichText.Content
						className="wmf-accordion-item__title-text"
						tagName="h3"
						value={ title }
					/>
				</button>

				<div className="wmf-accordion-item__content">
					<InnerBlocks.Content />
				</div>
			</div>
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
