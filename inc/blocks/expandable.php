<?php
/**
 * Block-specific PHP logic for the Expandable block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Expandable;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\inject_ids_and_inline_styles', 10, 2 );
}

/**
 * Render the block's set height to an inline style on the content element, and
 * set appropriate aria- and ID attributes on content container and toggle button.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Filtered block content.
 */
function inject_ids_and_inline_styles( string $block_content, array $block ) : string {
	if ( $block['blockName'] !== 'wmf-reports/expandable' ) {
		return $block_content;
	}

	// Render block dimensions into an inline style attribute to prevent layout shift.
	$block_content = preg_replace(
		'/class="expandable-content/',
		sprintf( '%s class="expandable-content', sprintf(
			'style="height:%d%s"',
			esc_attr( $block['attrs']['visibleAmount'] ?? 300 ),
			esc_attr( $block['attrs']['visibleUnit'] ?? 'px' )
		) ),
		$block_content
	);

	// Set up ARIA attributes on button and container.
	$client_id = esc_attr( uniqid( 'expandable-' ) );
	$block_content = preg_replace(
		'/class="expandable-content/',
		sprintf( 'id="%s" class="expandable-content', $client_id ),
		$block_content
	);
	$block_content = preg_replace(
		'/class="expandable-expander/',
		sprintf( 'aria-controls="%s" aria-expanded="false" class="expandable-expander', $client_id ),
		$block_content
	);
	return $block_content;
}
