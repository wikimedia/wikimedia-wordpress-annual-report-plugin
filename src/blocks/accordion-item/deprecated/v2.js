import { InnerBlocks, RichText } from '@wordpress/block-editor';

/**
 * Fixed borderColor slugs for use in CSS.
 */
const v2 = {
	attributes: {
		borderColor: {
			type: 'string',
		},
		title: {
			type: 'string',
			source: 'html',
			selector: '.wmf-accordion-item__title-text',
		},
	},
	save: ( { attributes } ) => {
		const { borderColor, title } = attributes;

		return (
			<div
				className="wmf-accordion-item"
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
};

export default v2;
