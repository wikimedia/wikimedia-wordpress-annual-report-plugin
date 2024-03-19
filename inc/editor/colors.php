<?php
/**
 * Define (and override) theme-related functionality.
 */

namespace WMF\Reports\Editor\Colors;

use const WMF\Reports\Report\POST_TYPE as REPORT_POST_TYPE;

/**
 * Hook into WordPress.
 */
function bootstrap() : void {
	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\disable_shiro_text_color_restrictions', 11 );
}

/**
 * Unhook Shiro's color control overrides when editing a Report item.
 */
function disable_shiro_text_color_restrictions() : void {
	if ( ( get_current_screen()->post_type ?? '' ) !== REPORT_POST_TYPE ) {
		return;
	}

	wp_add_inline_script(
		'shiro_editor_js',
		"wp.hooks.removeFilter( 'blocks.registerBlockType', 'shiro/color-supports' );"
	);
}
