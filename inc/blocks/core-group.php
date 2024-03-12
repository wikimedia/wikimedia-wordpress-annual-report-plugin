<?php
/**
 * Block-specific PHP logic for the Expandable block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Core_Group;

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

	if ( empty( $block['attrs']['tocSlug'] ) ) {
		return $block_content;
	}

	// Render stored slug as an ID attribute on the container.
	// TODO: Worth exploring https://developer.wordpress.org/reference/classes/wp_html_tag_processor/ ?
	return preg_replace(
		'/class="wp-block-group/',
		sprintf( 'id="%s" class="wp-block-group', $block['attrs']['tocSlug'] ),
		$block_content
	);
}
