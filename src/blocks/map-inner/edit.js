import { __ } from '@wordpress/i18n';
import { InnerBlocks, InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const { lat, long } = attributes;
	return (
		<div { ...useBlockProps() }>
			<InspectorControls>
				<PanelBody>
					<TextControl
						help={ __( 'Update the latitude, or drag the marker to pin point a location.', 'wmf-reports' ) }
						label="Latitude"
						value={ lat }
						onChange={ ( lat ) => {
							setAttributes( { lat } );
						} }
					/>
					<TextControl
						help={ __( 'Update the longitude, or drag the marker to pin point a location.', 'wmf-reports' ) }
						label="Longitude"
						value={ long }
						onChange={ ( long ) => {
							setAttributes( { long } );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<InnerBlocks
				template={
					[
						[
							'core/group',
							{ align: 'full', backgroundColor: 'wmf-report-bright-yellow', layout: { type: 'constrained'} },
							[
								[ 'core/paragraph' ]
							]
						]
					]
				}
			/>
		</div>
	);
}
