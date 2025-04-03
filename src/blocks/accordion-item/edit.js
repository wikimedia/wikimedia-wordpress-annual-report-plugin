import {
	InnerBlocks,
	RichText,
	useBlockProps,
	withColors,
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

import PaletteColorPicker from '../../components/palette-color-picker';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props                Block Props.
 * @param {Object}   props.attributes     Block Attributes.
 * @param {Function} props.setAttributes  Set Block Attributes.
 * @param {string}   props.clientId       Unique identifier for the block instance.
 * @param {Object}   props.borderColor    Color object for the border.
 * @param {Function} props.setBorderColor Function to update the border color.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
const Edit = ( {
	attributes,
	setAttributes,
	clientId,
	borderColor,
	setBorderColor,
} ) => {
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<PaletteColorPicker
				label={ __( 'Border color', 'wmf-reports' ) }
				color={ borderColor?.color || attributes.borderColor }
				onColorChange={ setBorderColor }
				clientId={ clientId }
			/>
			<div
				className="wmf-accordion-item"
				aria-expanded
				style={
					borderColor?.color && { borderLeftColor: borderColor.color }
				}
			>
				<div className="wmf-accordion-item__title">
					<RichText
						className="wmf-accordion-item__title-text"
						formattingControls={ [] }
						placeholder={ __(
							'Add Accordion Title…',
							'wmf-reports'
						) }
						tagName="h3"
						value={ attributes.title }
						onChange={ ( title ) => setAttributes( { title } ) }
					></RichText>
				</div>

				<div className="wmf-accordion-item__content">
					<InnerBlocks />
				</div>
			</div>
		</div>
	);
};

export default withColors( {
	borderColor: 'border-color',
} )( Edit );
