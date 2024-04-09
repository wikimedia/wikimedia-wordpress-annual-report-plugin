import {
	InnerBlocks,
	useBlockProps,
	InspectorControls,
	useSetting,
} from '@wordpress/block-editor';
import { Panel, PanelBody, ColorPalette } from '@wordpress/components';
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
export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps(); // eslint-disable-line react-hooks/rules-of-hooks
	const { fontColor } = attributes;
	return (
		<>
			<InspectorControls>
				<Panel header={ __( 'Set title font color:', 'wmf-reports' ) }>
					<PanelBody>
						<ColorPalette
							value={ fontColor }
							colors={ [ ...useSetting( 'color.palette' ) ] }
							// eslint-disable-next-line no-shadow
							onChange={ ( fontColor ) =>
								setAttributes( { fontColor } )
							}
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div { ...blockProps }>
				<div className="wmf-accordion-wrapper">
					<InnerBlocks
						allowedBlocks={ [ 'wmf-reports/accordion-item' ] }
					/>
				</div>
			</div>
		</>
	);
}
