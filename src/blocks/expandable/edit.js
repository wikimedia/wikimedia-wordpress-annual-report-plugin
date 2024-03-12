/**
 * WordPress dependencies
 */
import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
	RichText,
	withColors,
} from '@wordpress/block-editor';
import {
	PanelBody,
	PanelRow,
	SelectControl,
	TextControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

import useIsChildBlockSelected from '../../hooks/use-is-child-block-selected';

const UNIT_OPTIONS = [
	{ label: 'px', value: 'px' },
	{ label: '%', value: '%' },
	{ label: 'vh', value: 'vh' },
];

/**
 * Block edit function.
 *
 * @param {Object}   props               Component Props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Function to set attributes.
 * @param {string}   props.clientId      Transient block clientId.
 * @param {bool}     props.isSelected    Whether this block is selected.
 * @return {React.ReactNode} Element to render.
 */
const Edit = ( { attributes, setAttributes, clientId, isSelected } ) => {
	const blockProps = useBlockProps();
	const isChildSelected = useIsChildBlockSelected( clientId );
	const isExpanded =
		isChildSelected ||
		! attributes.visibleAmount ||
		! attributes.visibleUnit;
	const innerBlockProps = useInnerBlocksProps(
		{
			className: `expandable-content${
				isExpanded ? ' is-expanded' : ''
			}`,
			'data-visible-amount': attributes.visibleAmount,
			'data-visible-unit': attributes.visibleUnit,
			style: {
				// Always open if child is selected or required variables are not present.
				...( isExpanded
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

	return (
		<div { ...blockProps }>
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

			<div { ...innerBlockProps } />

			{ ! isChildSelected && (
				<RichText
					tagName="div"
					className="expandable-expander"
					value={ attributes.showMoreText }
					placeholder="Show more"
					onChange={ ( showMoreText ) =>
						setAttributes( { showMoreText } )
					}
					withoutInteractiveFormatting
					allowedFormats={ [] }
				/>
			) }
			{ ( isSelected || isChildSelected ) && (
				<RichText
					tagName="div"
					className="expandable-expander is-expanded-in-editor"
					value={ attributes.showLessText }
					placeholder="Show less"
					onChange={ ( showLessText ) =>
						setAttributes( { showLessText } )
					}
					withoutInteractiveFormatting
					allowedFormats={ [] }
				/>
			) }
		</div>
	);
};

export default withColors( {
	buttonBackgroundColor: 'button-bg-color',
	buttonTextColor: 'button-text-color',
} )( Edit );
