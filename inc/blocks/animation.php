<?php
/**
 * Block-specific PHP logic for the Overlay block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Animation;

use WMF\Reports\Report;
use WP_REST_Response;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\strip_problematic_encoded_html', 10, 2 );
	// TODO: Refactor to use a more central hook so we do not need to enumerate each type.
	add_filter( 'rest_prepare_post', __NAMESPACE__ . '\\strip_problematic_encoded_html_from_rest_content' );
	add_filter( 'rest_prepare_page', __NAMESPACE__ . '\\strip_problematic_encoded_html_from_rest_content' );
	add_filter( 'rest_prepare_' . Report\POST_TYPE, __NAMESPACE__ . '\\strip_problematic_encoded_html_from_rest_content' );
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

/**
 * When dispatching a REST request, if it contains a content.raw property,
 * run it through the encoded HTML removal filter above. This allows the
 * field to be transparently removed from the post content on load.
 *
 * @param WP_REST_Response $response Outgoing REST response.
 * @return WP_REST_Response Filtered response.
 */
function strip_problematic_encoded_html_from_rest_content( $response ) {
	$data = $response->get_data();
	if ( empty( $data['content']['raw'] ) || ! is_string( $data['content']['raw'] ) ) {
		return $response;
	}

	$data['content']['raw'] = strip_problematic_encoded_html( $data['content']['raw'] );
	$response->set_data( $data );
	return $response;
}
