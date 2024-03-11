/**
 * External dependencies.
 */
import React from 'react';

/**
 * WordPress dependencies.
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

/**
 * Block Save function.
 * @param {object} props Props.
 * @param {object} props.attributes Block attributes.
 * @returns {Element} Element to render.
 */
export default function Save( { attributes } ) {
	const blockProps = useBlockProps.save();

	return (
		<div { ...blockProps }>
			<div
				className="expandable-content is-collapsed"
				data-visible-amount={ attributes.visibleAmount }
				data-visible-unit={ attributes.visibleUnit }
			>
				<InnerBlocks.Content />
			</div>
			<button className="expandable-expander" type="button">
				{ attributes.linkText }
			</button>
		</div>
	);
}
