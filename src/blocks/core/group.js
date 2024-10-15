/**
 * Customizations for the core group block.
 */

import { createBlock } from '@wordpress/blocks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, ToggleControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { addFilter, removeFilter } from '@wordpress/hooks';
import { __ } from '@wordpress/i18n';

const toIdString = ( string ) => {
	return string
		.toLowerCase()
		.replace( /[^a-z0-9]/g, ' ' )
		.trim()
		.split( /\s+/ )
		.join( '-' );
};

/**
 * Recursively look for a Table of Contents block in a BlockList.
 *
 * @param {object[]} blocks Array of WP Block instances.
 * @return {boolean} Whether a ToC was found.
 */
function blockListContainsTableOfContents( blocks ) {
	for ( const block of blocks ) {
		if ( block.name === 'wmf-reports/table-of-contents' ) {
			return true;
		}
		if (
			blocks.innerBlocks &&
			blockListContainsTableOfContents( blocks.innerBlocks )
		) {
			return true;
		}
	}
	return false;
}

/**
 * Filter the BlockEdit component to inject custom controls into core/group block.
 *
 * @param {React.ReactNode} BlockEdit Gutenberg's default edit component for a block.
 * @return {React.ReactNode} Filtered edit component.
 */
const withCustomGroupControls = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		const shouldInjectControls =
			props.isSelected && props.name === 'core/group';
		const showControlsForToC = useSelect(
			( select ) => {
				if ( ! shouldInjectControls ) {
					return false;
				}
				// Only inject Report Table of Contents-related settings if a ToC is present.
				return blockListContainsTableOfContents(
					select( 'core/editor' ).getBlocks()
				);
			},
			[ shouldInjectControls ]
		);

		if ( ! shouldInjectControls ) {
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
						{ showControlsForToC && (
							<>
								<ToggleControl
									label={ __(
										'Include in Report Table of Contents',
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
										value={ attributes.tocLabel }
										onChange={ ( tocLabel ) => {
											const id = toIdString( tocLabel );
											setAttributes( {
												tocSlug: id
													? `toc-${ id }`
													: '',
												tocLabel,
											} );
										} }
									/>
								) }
							</>
						) }
						<ToggleControl
							label={ __(
								'Fill viewport height',
								'wmf-reports'
							) }
							checked={ attributes.fullViewportHeight }
							onChange={ ( fullViewportHeight ) => {
								setAttributes( { fullViewportHeight } );
							} }
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
 * Allow the "fill viewport height" toggle to be previewed. The style override
 * is added on the frontend using a PHP filter, but we use JS to filter in-editor
 * to add the override classname.
 */
const withFillViewportHeightStyle = createHigherOrderComponent(
	( BlockListBlock ) => {
		return ( props ) => {
			if (
				props.name !== 'core/group' ||
				! props.attributes.fullViewportHeight
			) {
				return <BlockListBlock { ...props } />;
			}
			const mergedCssClasses = `${
				props.className || ''
			} wp-block-group-is-full-viewport-height`;
			return (
				<BlockListBlock { ...props } className={ mergedCssClasses } />
			);
		};
	},
	'withFillViewportHeightStyle'
);

addFilter(
	'editor.BlockListBlock',
	'wmf-reports/block-list-block/group-block',
	withFillViewportHeightStyle,
	100
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
			tocLabel: {
				type: 'string',
			},
			tocSlug: {
				type: 'string',
			},
			fullViewportHeight: {
				type: 'boolean',
				default: false,
			},
		},
		transforms: {
			...settings.transforms,
			from: [
				// Permit transforming from expandable back to a group block.
				{
					type: 'block',
					blocks: [ 'wmf-reports/expandable' ],
					transform: ( attributes, innerBlocks ) => {
						return createBlock(
							'core/group',
							attributes,
							innerBlocks
						);
					},
				},
				...settings.transforms.from,
			],
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
			'editor.BlockListBlock',
			'wmf-reports/block-list-block/group-block'
		);
		removeFilter(
			'blocks.registerBlockType',
			'wmf-reports/custom-attributes/group-block'
		);
	} );
}
