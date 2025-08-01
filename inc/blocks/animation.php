<?php
/**
 * Block-specific PHP logic for the Overlay block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Animation;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\strip_problematic_encoded_html', 10, 2 );
}

/**
 * If there is a lottielabInfoHTML attribute in the encoded HTML, remove it.
 *
 * The HTML inside that attribute is improperly escaped when bootstrapping
 * the block editor, and causes a JS parse error.
 *
 * @param string $block_content The block content.
 * @return string Filtered block content.
 */
function strip_problematic_encoded_html( string $block_content ) : string {
	if ( strpos( $block_content, 'lottielabInfoHTML' ) === false ) {
		return $block_content;
	}
	return preg_replace( '/&quot;lottielabInfoHTML&quot;:&quot;.*?&quot;/', '', $block_content );
}
