<?php
/**
 * Block-specific PHP logic for the Overlay block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Overlay;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\clone_share_button_to_top_of_overlay', 10, 2 );
}

/**
 * Copy the share button added in the block's render.php to the top of the
 * block, after the first identified heading.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Filtered block content.
 */
function clone_share_button_to_top_of_overlay( string $block_content, array $block ) : string {
	if ( $block['blockName'] !== 'wmf-reports/overlay' ) {
		return $block_content;
	}
	if ( strpos( $block_content, 'medical' ) ) {
		error_log( $block_content );
	}
	// Get existing button.
	preg_match( '/<div[^>]+class="[^"]+is-share-button.*?<\/div>/', $block_content, $matches );
	if ( empty( $matches[0] ?? '' ) ) {
		return $block_content;
	}

	$button_markup = $matches[0];
	return preg_replace(
		'/(<\/h[34]>)/',
		'$1' . $button_markup,
		$block_content,
		1
	);
}
