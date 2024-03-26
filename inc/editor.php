<?php
/**
 * General editor functionality.
 */

namespace WMF\Reports\Editor;

/**
 * Determine whether the current screen is a block editor admin screen.
 *
 * @return boolean Are we on a block editor admin screen?
 */
function is_block_editor_admin_screen() : bool {
	if ( ! is_admin() || ! function_exists( 'get_current_screen' ) ) {
		return false;
	}

	$screen = get_current_screen();

	return isset( $screen ) && $screen->is_block_editor();
}

/**
 * Determine whether we are on a post edit screen in the admin.
 *
 * Internal helper function for use detecting block editor before we can access
 * get_current_screen, as well as to aid in disabling QueryMonitor when it might
 * cause performance impacts due to excessive DOM weight.
 *
 * @param string $post_type Optionally also check whether the current edit post screen
 *                          is for a specific custom post type object.
 * @return bool Are we on a post edit screen in the admin?
 */
function is_edit_post_screen( string $post_type = '' ) : bool {
	if ( ! is_admin() ) {
		return false;
	}

	// Short-circuit if get_current_screen IS available.
	if ( is_block_editor_admin_screen() ) {
		if ( ! empty( $post_type ) ) {
			return ( get_current_screen()->post_type ?? '' ) === $post_type;
		}
		return true;
	}

	// Fall back to manual inspection of current page.
	$pagenow = $GLOBALS['pagenow'];

	if ( ! in_array( $pagenow, [ 'post.php', 'post-new.php' ], true ) ) {
		return false;
	}

	if ( $pagenow === 'post.php' && strpos( $_SERVER['REQUEST_URI'], 'action=edit' ) === false ) {
		return false;
	}

	if ( ! empty( $post_type ) ) {
		if ( $pagenow === 'post-new.php' ) {
			return sanitize_text_field( $_GET['post_type'] ) === $post_type;
		}
		$post_id = sanitize_text_field( $_GET['post'] );
		if ( ! is_numeric( $post_id ) ) {
			return false;
		}
		return get_post_type( $post_id ) === $post_type;
	}
	return true;
}
