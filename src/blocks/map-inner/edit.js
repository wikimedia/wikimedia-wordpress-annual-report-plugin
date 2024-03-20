import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';
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
			<fieldset>
				<legend>Latitude and Longitude</legend>
				<p>You can drag the selected marker, or update the latitude and longitude here.</p>
				<TextControl
					label="Latitude"
					value={ lat }
					onChange={ ( lat ) => {
						setAttributes( { lat } );
					} }
				/>
				<TextControl
					label="Longitude"
					value={ long }
					onChange={ ( long ) => {
						setAttributes( { long } );
					} }
				/>
			</fieldset>
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
