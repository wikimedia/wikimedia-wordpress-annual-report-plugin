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
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_report_color_palette_override', 11 );
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

/**
 * Augment the color palette with Report-specific colors.
 */
function register_report_color_palette_override() : void {
	$palette = get_theme_support( 'editor-color-palette' );

	if ( is_array( $palette ) && isset( $palette[0][0]['color'] ) ) {
		// Editor support comes back as an array of arrays for some reason. Extract the inner array.
		$palette = $palette[0];
	}

	if ( empty( $palette ) ) {
		$palette = [];
	}

	$wmf_report_colors = [
		[
			'name'  => __( 'WMF Bright Blue', 'wmf-reports' ),
			'slug'  => 'wmf-report-brightblue',
			'color' => '#00A0FF',
		],
		[
			'name' => __( 'WMF Blue', 'wmf-reports' ),
			'slug' => 'wmf-report-blue',
			'color' => '#0067C7',
		],
		[
			'name' => __( 'WMF Report Bright Yellow', 'wmf-reports' ),
			'slug' => 'wmf-report-bright-yellow',
			'color' => '#e9e7c0',
		],
		[
			'name' => __( 'WMF Report Red', 'wmf-reports' ),
			'slug' => 'wmf-report-red',
			'color' => '#970302',
		],
		[
			'name' => __( 'WMF Report Orange', 'wmf-reports' ),
			'slug' => 'wmf-report-orange',
			'color' => '#FF7800',
		],
		[
			'name' => __( 'WMF Report Yellow', 'wmf-reports' ),
			'slug' => 'wmf-report-yellow',
			'color' => '#f0bc00',
		],
		[
			'name' => __( 'WMF Report Green', 'wmf-reports' ),
			'slug' => 'wmf-report-green',
			'color' => '#318557',
		],
		[
			'name' => __( 'Green-30', 'wmf-reports' ),
			'slug' => 'green-30',
			'color' => '#14866D',
		],
		[
			'name' => __( 'WMF Report Bright Green', 'wmf-reports' ),
			'slug' => 'wmf-report-bright-green',
			'color' => '#71d1b3',
		],
		[
			'name' => __( 'WMF Report Purple', 'wmf-reports' ),
			'slug' => 'wmf-report-purple',
			'color' => '#5748b5',
		],
		[
			'name' => __( 'WMF Report Link Color', 'wmf-reports' ),
			'slug' => 'wmf-report-link-color',
			'color' => '#3a25ff',
		],
		[
			'name' => __( 'WMF Report Toned Yellow', 'wmf-reports' ),
			'slug' => 'wmf-report-toned-yellow',
			'color' => '#fbeebf',
		],
	];
	$wend_report_colors = [
		[
			'name' => __( 'WEND Report Luminous Vivid Orange', 'wmf-reports' ),
			'slug' => 'wend-report-luminous-vivid-orange',
			'color' => '#ff6801',
		],
		[
			'name' => __( 'WEND Report Luminous Vivid Amber', 'wmf-reports' ),
			'slug' => 'wend-report-luminous-vivid-amber',
			'color' => '#fcb900',
		],
		[
			'name' => __( 'WEND Report Cobalt', 'wmf-reports' ),
			'slug' => 'wend-report-cobalt',
			'color' => '#0360fe',
		],
		[
			'name' => __( 'WEND Report Slate Blue', 'wmf-reports' ),
			'slug' => 'wend-report-slate-blue',
			'color' => '#1c2d3e',
		],
		[
			'name' => __( 'WEND Report Vivid Cyan Green', 'wmf-reports' ),
			'slug' => 'wend-report-vivid-cyan-green',
			'color' => '#00d084',
		],
		[
			'name' => __( 'WEND Report Pale Cyan Blue', 'wmf-reports' ),
			'slug' => 'wend-report-pale-cyan-blue',
			'color' => '#8fd1fc',
		],
		[
			'name' => __( 'WEND Report Vivid Purple', 'wmf-reports' ),
			'slug' => 'wend-report-vivid-purple',
			'color' => '#9b51df',
		],
		[
			'name' => __( 'WEND Report Bright Blue', 'wmf-reports' ),
			'slug' => 'wend-report-bright-blue',
			'color' => '#00ced6',
		],
		[
			'name' => __( 'WEND Report Gold', 'wmf-reports' ),
			'slug' => 'wend-report-gold',
			'color' => '#85754e',
		],
	];

	$is_foundation = ( wp_get_theme()->get( 'Name' ) ?? '' ) === 'Shiro';
	foreach ( array_reverse( $is_foundation ? $wmf_report_colors : $wend_report_colors ) as $palette_color ) {
		// Palette should be an array of arrays.
		array_unshift( $palette, $palette_color );
	}

	// Overwrite theme support with merged color palette.
	add_theme_support( 'editor-color-palette', $palette );
}
