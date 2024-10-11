import lottie from 'lottie-web';
import { useRef, useEffect, useState } from 'react';

import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { TextareaControl } from '@wordpress/components';

import './editor.scss';

/**
 * Render a preview of the animation within the editor.
 *
 * @param {object} props               Component props.
 * @param {string} props.animationData Serialized LottieJSON.
 * @return {React.ReactNode} Rendered div which will be initialized as an animation.
 */
const AnimationPreview = ( { animationData } ) => {
	const containerRef = useRef( null );
	const animationRef = useRef( null );

	useEffect( () => {
		if ( animationRef.current ) {
			animationRef.current.destroy();
		}
		// This function deliberately only runs when animationData changes,
		// to clear the cached animation instance.
		// eslint:ignore react-hooks/exhaustive-deps
	}, [ animationData ] );

	useEffect( () => {
		if ( ! animationData || ! containerRef.current ) {
			return;
		}

		if ( animationRef.current ) {
			return;
		}

		try {
			animationRef.current = lottie.loadAnimation( {
				container: containerRef.current,
				renderer: 'svg',
				loop: false,
				autoplay: true,
				animationData: JSON.parse( animationData ),
			} );
		} catch ( e ) {
			// Don't crash editor if parsing gets into a bad state.
		}
	}, [ containerRef.current, animationRef.current, animationData ] );
	return <div ref={ containerRef } />;
};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {object}   props                          Component props.
 * @param {object}   props.attributes               Block Attributes.
 * @param {string}   props.attributes.animationData Serialized LottieJSON.
 * @param {Function} props.setAttributes            Block attribute setter.
 * @param {boolean}  props.isSelected               Whether the block is currently selected in the editor.
 * @return {React.ReactNode} Rendered element.
 */
export default function Edit( { attributes, setAttributes, isSelected } ) {
	const [ tempAnimationData, setTempAnimationData ] = useState(
		attributes.animationData || ''
	);
	const [ validationError, setValidationError ] = useState( false );
	const blockProps = useBlockProps( { className: 'wmf-animation' } );

	if ( attributes.animationData && ! isSelected ) {
		return (
			<div { ...blockProps }>
				<AnimationPreview animationData={ attributes.animationData } />
			</div>
		);
	}

	return (
		<div { ...blockProps }>
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
						const reparsedJSON = JSON.stringify(
							JSON.parse( animationData )
						);
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
				{ __(
					'Click here for more details on generating LottieJSON',
					'wmf-reports'
				) }
			</a>
		</div>
	);
}
