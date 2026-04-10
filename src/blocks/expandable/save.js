/**
 * WordPress dependencies.
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

import { colorSlugToCSSVariable } from '../../helpers/cssVariables';

/**
 * Block Save function.
 * @param {Object} props            Component Props.
 * @param {Object} props.attributes Block attributes.
 * @return {React.ReactNode} Element to render.
 */
export default function Save( { attributes } ) {
	const blockProps = useBlockProps.save();

	const wrapperStyle = {};
	if ( attributes.fadeColor || attributes.customFadeColor ) {
		wrapperStyle['--expandable-fade-color'] = attributes.customFadeColor || colorSlugToCSSVariable(
			attributes.fadeColor
		);
	}

	return (
		<div { ...blockProps } style={ wrapperStyle }>
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
}
