import { InnerBlocks, RichText, useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props               Block Props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {Function} props.setAttributes Set Block Attributes.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes, context } ) {
	const blockProps = useBlockProps(); // eslint-disable-line react-hooks/rules-of-hooks
	const fontColor = context['accordion/fontColor'];

	if ( fontColor !== attributes.fontColor ) {
		setTimeout( () => setAttributes( { fontColor } ) );
	}

	return (
		<div { ...blockProps }>
			<div className="wmf-accordion-item" aria-expanded>
				<div className="wmf-accordion-item__title">
					<RichText
						className="wmf-accordion-item__title-text"
						formattingControls={ [] }
						placeholder={ __( 'Add Accordion Title...', 'wmf-reports' ) }
						tagName="h3"
						value={ attributes.title }
						onChange={ ( title ) => setAttributes( { title } ) }
						style={ fontColor && { color: fontColor } }
					></RichText>
				</div>

				<div className="wmf-accordion-item__content">
					<InnerBlocks />
				</div>
			</div>
		</div>
	);
}
