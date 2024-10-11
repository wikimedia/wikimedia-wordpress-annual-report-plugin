import { useState } from 'react';

import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { TextareaControl } from '@wordpress/components';

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
	const [ tempAnimationData, setTempAnimationData ] = useState( attributes.animationData || '' );
	const [ validationError, setValidationError ] = useState( false );
	return (
		<div { ...useBlockProps( { className: 'wmf-animation' } ) }>
			<TextareaControl
				label={ __( 'Paste LottieJSON animation data', 'wmf-reports' ) }
				value={ tempAnimationData }
				onChange={ ( animationData ) => {
					setTempAnimationData( animationData );
					setValidationError( false );
					try {
						if ( ! animationData ) {
							// Don't try to parse empty input.
							setAttributes( { animationData } );
							return;
						}
						// If we have input, make sure it's valid JSON.
						const reparsedJSON = JSON.stringify( JSON.parse( animationData ) );
						setTempAnimationData( reparsedJSON );
						setAttributes( { animationData: reparsedJSON } );
					} catch ( e ) {
						setValidationError( true );
					}
				} }
			/>
			{ validationError && (
				<p class="wmf-animation__editor-error">
					{ __( 'Invalid JSON: changes not saved.', 'wmf-reports' ) }
				</p>
			) }
			<a
				className="wmf-animation__editor-help"
				href="https://lottiefiles.com/integrations#create-animation"
			>
				{ __( 'Click here for more details on generating LottieJSON', 'wmf-reports' ) }
			</a>
		</div>
	);
}
