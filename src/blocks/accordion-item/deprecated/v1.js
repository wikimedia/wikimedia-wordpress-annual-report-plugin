import { InnerBlocks, RichText } from '@wordpress/block-editor';

const v1 = {
	attributes: {
		fontColor: {
			type: 'string',
		},
		title: {
			type: 'string',
			source: 'html',
			selector: '.wmf-accordion-item__title-text',
		},
	},
	save: ( { attributes } ) => {
		const { fontColor, title } = attributes;

		return (
			<div
				className="wmf-accordion-item"
				style={ fontColor && { color: fontColor } }
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

export default v1;
