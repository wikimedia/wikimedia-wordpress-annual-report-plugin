<?php
/**
 * Block-specific PHP logic for the Expandable block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Core_Group;

use WP_HTML_Tag_Processor;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\inject_ids', 10, 2 );
}

/**
 * Render the stored ID of the ToC title as an ID attribute on the group block.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Filtered block content.
 */
function inject_ids( string $block_content, array $block ) : string {
	if ( $block['blockName'] !== 'core/group' ) {
		return $block_content;
	}

	if ( empty( $block['attrs']['tocSlug'] ) && empty( $block['attrs']['fullViewportHeight' ] ) ) {
		// Saves on parsing HTML tags if we don't need to.
		return $block_content;
	}

	$tags = new WP_HTML_Tag_Processor( $block_content );
	if ( $tags->next_tag( [ 'class_name' => 'wp-block-group' ] ) ) {
		// Render stored slug as an ID attribute on the container.
		if ( ! empty( $block['attrs']['tocSlug'] ) ) {
			$tags->set_attribute( 'id', $block['attrs']['tocSlug'] );
		}
		// Set the view height minimum if requested.
		if ( ! empty( $block['attrs']['fullViewportHeight' ] ) ) {
			$tags->set_attribute( 'style', 'min-height: 100vh' );
		}
		return $tags->get_updated_html();
	}

	return $block_content;
}
