/**
 * Customizations for the core group block.
 */

import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, ToggleControl } from '@wordpress/components';
import { addFilter, removeFilter } from '@wordpress/hooks';
import { __ } from '@wordpress/i18n';

/**
 * Filter the BlockEdit component to inject custom controls into core/group block.
 *
 * @param {React.ReactNode} BlockEdit Gutenberg's default edit component for a block.
 * @return {React.ReactNode} Filtered edit component.
 */
const withCustomGroupControls = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		if ( ! props.isSelected || props.name !== 'core/group' ) {
			return <BlockEdit key="edit" { ...props } />;
		}
		const { attributes, setAttributes } = props;
		return (
			<>
				<BlockEdit key="edit" { ...props } />
				<InspectorControls>
					<PanelBody
						title={ __( 'Report group settings', 'wmf-reports' ) }
						initialOpen={ true }
					>
						<ToggleControl
							label={ __(
								'Include in Table of Contents',
								'wmf-reports'
							) }
							checked={ attributes.includeInToC }
							onChange={ ( includeInToC ) => {
								setAttributes( { includeInToC } );
							} }
						/>
						{ attributes.includeInToC && (
							<TextControl
								label={ __(
									'Table of Contents Label',
									'wmf-reports'
								) }
								value={ attributes.tableOfContentsLabel }
								onChange={ ( tableOfContentsLabel ) => {
									setAttributes( { tableOfContentsLabel } );
								} }
							/>
						) }
						<ToggleControl
							label={ __(
								'Fill viewport height',
								'wmf-reports'
							) }
							value={ attributes.fullViewportHeight }
							onChange={ ( fullViewportHeight ) =>
								setAttributes( { fullViewportHeight } )
							}
							help={ __(
								'Makes this group take up at minimum a full viewport of vertical space',
								'wmf-reports'
							) }
						/>
					</PanelBody>
				</InspectorControls>
			</>
		);
	};
}, 'withCustomGroupControls' );

addFilter(
	'editor.BlockEdit',
	'wmf-reports/add-group-block-controls',
	withCustomGroupControls
);

/**
 * Add additional custom properties to group blocks.
 *
 * @todo Should this be restricted to groups on Report post type objects?
 *
 * @param {Object} settings Block settings object.
 * @param {string} name     Block type name.
 * @return {Object} Filtered settings object.
 */
function customizeGroupBlockAttributes( settings, name ) {
	if ( name !== 'core/group' ) {
		return settings;
	}

	return {
		...settings,
		attributes: {
			...settings.attributes,
			includeInToC: {
				type: 'boolean',
				default: false,
			},
			tableOfContentsLabel: {
				type: 'string',
			},
			fullViewportHeight: {
				type: 'boolean',
				default: false,
			},
		},
	};
}

addFilter(
	'blocks.registerBlockType',
	'wmf-reports/custom-attributes/group-block',
	customizeGroupBlockAttributes
);

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		removeFilter(
			'editor.BlockEdit',
			'wmf-reports/add-group-block-controls'
		);
		removeFilter(
			'blocks.registerBlockType',
			'wmf-reports/custom-attributes/group-block'
		);
	} );
}
