import {
	InnerBlocks,
	RichText,
	useBlockProps,
	InspectorControls,
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { Panel, PanelBody, ColorPalette } from '@wordpress/components';
import { useSelect } from '@wordpress/data';

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
export default function Edit( { attributes, setAttributes } ) {
	const { borderColor } = attributes;
	const colorPalette = useSelect(
		( select ) => select( 'core/block-editor' ).getSettings().colors || [],
		[]
	);
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<InspectorControls>
				<Panel header={ __( 'Set border color:', 'wmf-reports' ) }>
					<PanelBody>
						{ borderColor && (
							<p>{ __( 'Border Color', 'wmf-reports' ) }</p>
						) }
						<ColorPalette
							value={ borderColor }
							colors={ colorPalette }
							onChange={ ( color ) =>
								setAttributes( { borderColor: color } )
							}
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div
				className="wmf-accordion-item"
				aria-expanded
				style={ borderColor && { borderLeftColor: borderColor } }
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
}
