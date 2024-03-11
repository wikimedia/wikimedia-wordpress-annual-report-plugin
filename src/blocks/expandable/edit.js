/**
 * WordPress dependencies
 */
import {
	useBlockProps,
	InnerBlocks,
	BlockControls,
} from '@wordpress/block-editor';
import { ToolbarGroup, ToolbarButton } from '@wordpress/components';
import { useState } from '@wordpress/element';
import { __ } from '@wordpress/i18n';

/**
 * Block edit function.
 * @param {Object} props Props.
 * @param {Object} props.attributes Block attributes.
 * @return {Element} Element to render.
 */
export default function Edit( { attributes } ) {
	const [ expanded, setExpanded ] = useState( true );

	const className = expanded
		? 'expandable-content is-expanded'
		: 'expandable-content is-collapsed';
	const buttonText = expanded
		? __( 'Show less', 'wikimedia-annual-report' )
		: __( 'Show more', 'wikimedia-annual-report' );

	return (
		<div { ...useBlockProps() }>
			<BlockControls>
				<ToolbarGroup>
					<ToolbarButton
						icon={ expanded ? 'arrow-up-alt2' : 'arrow-down-alt2' }
						title={
							expanded
								? __( 'Collapse', 'wikimedia-annual-report' )
								: __( 'Expand', 'wikimedia-annual-report' )
						}
						onClick={ () => setExpanded( ! expanded ) }
					/>
				</ToolbarGroup>
			</BlockControls>

			<div
				className={ className }
				data-visible-amount={ attributes.visibleAmount }
				data-visible-unit={ attributes.visibleUnit }
			>
				<InnerBlocks />
			</div>

			<div className="expandable-expander">
				<button
					className="expandable-button"
					onClick={ () => setExpanded( ! expanded ) }
				>
					{ buttonText }
				</button>
			</div>
		</div>
	);
}
