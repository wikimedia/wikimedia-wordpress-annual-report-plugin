/**
 * External dependencies
 */
import React from 'react';

/**
 * WordPress dependencies
 */
import {
	useBlockProps,
	InnerBlocks,
	BlockControls,
	RichText,
} from '@wordpress/block-editor';
import { ToolbarGroup, ToolbarButton } from '@wordpress/components';
import { useState } from '@wordpress/element';
import { __ } from '@wordpress/i18n';

/**
 * Block edit function.
 * @param {object} props Props.
 * @param {object} props.attributes Block attributes.
 * @param {Function} props.setAttributes Function to set attributes.
 * @returns {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const [ expanded, setExpanded ] = useState( true );

	const className = expanded
		? 'expandable-content is-expanded'
		: 'expandable-content is-collapsed';

	return (
		<div { ...useBlockProps() }>
			<BlockControls>
				<ToolbarGroup>
					<ToolbarButton
						icon={ expanded ? 'arrow-up-alt2' : 'arrow-down-alt2' }
						title={ expanded ? __( 'Collapse' ) : __( 'Expand' ) }
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
				<RichText
					tagName="span"
					className="expandable-linktext"
					value={ attributes.linkText }
					placeholder="Read more..."
					onChange={ ( content ) =>
						setAttributes( { linkText: content } )
					}
					withoutInteractiveFormatting
				/>
			</div>
		</div>
	);
}
