/**
 * External dependencies
 */
import React from 'react';

/**
 * WordPress dependencies
 */
import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
	BlockControls,
	RichText,
	withColors,
	__experimentalColorGradientSettingsDropdown as ColorGradientSettingsDropdown,
	__experimentalUseMultipleOriginColorsAndGradients as useMultipleOriginColorsAndGradients,
} from '@wordpress/block-editor';
import {
	ColorPicker,
	Panel,
	PanelBody,
	PanelRow,
	__experimentalNumberControl as NumberControl,
	SelectControl,
	TextControl,
	ToolbarGroup,
	ToolbarButton,
} from '@wordpress/components';
import { useState } from '@wordpress/element';
import { __ } from '@wordpress/i18n';

import useIsChildBlockSelected from '../../hooks/use-is-child-block-selected';

const UNIT_OPTIONS = [
	{ label: 'px', value: 'px' },
	{ label: '%', value: '%' },
];

/**
 * Block edit function.
 * @param {object} props Props.
 * @param {object} props.attributes Block attributes.
 * @param {Function} props.setAttributes Function to set attributes.
 * @returns {Element} Element to render.
 */
const Edit = ( {
	attributes,
	setAttributes,
	clientId,
	// From the withColors HOC:
	buttonBackgroundColor,
	setButtonBackgroundColor,
	buttonTextColor,
	setButtonTextColor,
	style,
} ) => {
	const blockProps = useBlockProps();
	const isChildSelected = useIsChildBlockSelected( clientId );
	const [ expanded, setExpanded ] = useState( true );
	const innerBlockProps = useInnerBlocksProps(
		{
			className: expanded
				? 'expandable-content is-expanded'
				: 'expandable-content is-collapsed',
			'data-visible-amount': attributes.visibleAmount,
			'data-visible-unit': attributes.visibleUnit,
			style: {
				// Always open if child is selected or required vqriables are not present.
				...( isChildSelected ||
				! attributes.visibleAmount ||
				! attributes.visibleUnit
					? {}
					: {
							height: `${ attributes.visibleAmount }${ attributes.visibleUnit }`,
							overflow: 'hidden',
					  } ),
			},
		},
		{
			template: [ [ 'core/paragraph' ] ],
		}
	);

	const colorGradientSettings = useMultipleOriginColorsAndGradients();

	return (
		<div { ...blockProps }>
			<BlockControls>
				<ToolbarGroup>
					<ToolbarButton
						icon={ expanded ? 'arrow-up-alt2' : 'arrow-down-alt2' }
						title={ expanded ? __( 'Collapse' ) : __( 'Expand' ) }
						onClick={ () => setExpanded( ! expanded ) }
					/>
				</ToolbarGroup>
			</BlockControls>
			<InspectorControls group="styles">
				<PanelBody intialOpen={ true }>
					<PanelRow className="wmf-expandable-dimensions-panel">
						<TextControl
							label={ __( 'Visible Amount', 'wmf-reports' ) }
							value={ attributes.visibleAmount }
							onChange={ ( visibleAmount ) => {
								if ( isNaN( +visibleAmount ) ) {
									return;
								}
								setAttributes( {
									visibleAmount: +visibleAmount,
								} );
							} }
						/>
						<SelectControl
							label={ __( 'Unit', 'wmf-reports' ) }
							options={ UNIT_OPTIONS }
							value={
								attributes.visibleUnit ||
								UNIT_OPTIONS[ 0 ].value
							}
							onChange={ ( visibleUnit ) =>
								setAttributes( { visibleUnit } )
							}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<InspectorControls group="color">
				<ColorGradientSettingsDropdown
					settings={ [
						{
							label: __(
								'Toggle Button Background',
								'wmf-reports'
							),
							colorValue:
								buttonBackgroundColor?.color ||
								attributes.buttonBackgroundColor,
							onColorChange: ( color ) => {
								setButtonBackgroundColor( color );

								setAttributes( {
									buttonBackgroundColor: color,
								} );
							},
						},
						{
							label: __( 'Toggle Button Text', 'wmf-reports' ),
							colorValue:
								buttonTextColor?.color ||
								attributes.buttonTextColor,
							onColorChange: ( color ) => {
								setButtonTextColor( color );

								setAttributes( {
									buttonTextColor: color,
								} );
							},
						},
					] }
					panelId={ clientId }
					hasColorsOrGradients={ false }
					disableCustomColors={ false }
					__experimentalIsRenderedInSidebar
					{ ...colorGradientSettings }
				/>
			</InspectorControls>

			<div { ...innerBlockProps } />

			<RichText
				tagName="div"
				className="expandable-expander"
				value={ attributes.linkText }
				placeholder="Show more..."
				onChange={ ( linkText ) => setAttributes( { linkText } ) }
				withoutInteractiveFormatting
				allowedFormats={ [] }
			/>
		</div>
	);
};

export default withColors( {
	buttonBackgroundColor: 'button-bg-color',
	buttonTextColor: 'button-text-color',
} )( Edit );
