/**
 * External dependencies.
 */
import React from 'react';

/**
 * WordPress dependencies.
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

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
			<div className="expandable-expander">
				<button className="expandable-button">{ __( 'Show more', 'wikimedia-annual-report' ) }</button>
			</div>
		</div>
	);
}
