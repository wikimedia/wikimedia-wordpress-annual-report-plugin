import { InnerBlocks } from '@wordpress/block-editor';

/**
 * Added support to change colour of the fade.
 */
const v1 = {
	attributes: {
		buttonBackgroundColor: {
			type: 'string',
		},
		buttonTextColor: {
			type: 'string',
		},
		fadeColor: {
			type: 'string',
			default: '#fff',
		},
		showMoreText: {
			type: 'string',
			default: 'Show more',
		},
		showLessText: {
			type: 'string',
			default: 'Show less',
		},
		visibleAmount: {
			type: 'number',
			default: 300,
		},
		visibleUnit: {
			enum: [ 'px', '%', 'vh' ],
			default: 'px',
		},
	},
	supports: {
		html: false,
	},
	save: ( { attributes } ) => {
		return (
			<div>
				<div
					className="expandable-content"
					data-visible-amount={ attributes.visibleAmount }
					data-visible-unit={ attributes.visibleUnit }
				>
					<InnerBlocks.Content />
				</div>
				<button
					className="expandable-expander"
					type="button"
					data-showmoretext={ attributes.showMoreText }
					data-showlesstext={ attributes.showLessText }
				>
					{ attributes.showMoreText }
				</button>
			</div>
		);
	},
};

export default v1;
