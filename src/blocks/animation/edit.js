import lottie from 'lottie-web';
import { useRef, useEffect, useState } from 'react';

import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import {
	// eslint-disable-next-line @wordpress/no-unsafe-wp-apis
	__experimentalNumberControl as NumberControl,
	PanelBody,
	TextareaControl,
} from '@wordpress/components';

import './editor.scss';

/**
 * Render a preview of the animation within the editor.
 *
 * @param {Object} props               Component props.
 * @param {string} props.animationData Serialized LottieJSON.
 * @return {React.ReactNode} Rendered div which will be initialized as an animation.
 */
const AnimationPreview = ( { animationData } ) => {
	const containerRef = useRef( null );
	const animationRef = useRef( null );

	useEffect( () => {
		if ( ! animationData || ! containerRef.current ) {
			return;
		}

		if ( animationRef.current && animationRef.current.destroy ) {
			animationRef.current.destroy();
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
	}, [ animationData ] );
	return <div ref={ containerRef } />;
};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Component props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {Function} props.setAttributes Block attribute setter.
 * @param {boolean}  props.isSelected    Whether the block is currently selected in the editor.
 * @return {React.ReactNode} Rendered element.
 */
export default function Edit( { attributes, setAttributes, isSelected } ) {
	const [ tempAnimationData, setTempAnimationData ] = useState(
		attributes.animationData || ''
	);
	const [ validationError, setValidationError ] = useState( false );
	const blockProps = useBlockProps( { className: 'wmf-animation' } );

	// If the block is full width, we don't want to set a max width.
	const isFullWidth = attributes.align === 'full';
	const maxWidthPx = isFullWidth ? null : `${ attributes.maxWidth }px`;

	if ( attributes.animationData && ! isSelected ) {
		return (
			<div { ...blockProps }>
				<div style={ { maxWidth: maxWidthPx } }>
					<AnimationPreview
						animationData={ attributes.animationData }
					/>
				</div>
			</div>
		);
	}

	return (
		<div { ...blockProps }>
			{ isSelected && (
				<InspectorControls>
					<PanelBody
						title={ __( 'Animation appearance', 'wmf-reports' ) }
					>
						<NumberControl
							label={ __( 'Maximum width', 'wmf-reports' ) }
							max="1280"
							value={ isFullWidth ? null : attributes.maxWidth }
							disabled={ isFullWidth }
							onChange={ ( maxWidth ) => {
								setAttributes( { maxWidth } );
							} }
						/>
					</PanelBody>
				</InspectorControls>
			) }
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
				<p className="wmf-animation__editor-error">
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
