<?php
/**
 * Block styles for content editors to quickly vary the appearance of existing blocks.
 */

namespace WMF\Reports\Editor\Styles;

/**
 * Hook into WordPress
 */
function bootstrap() {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_styles' );
}

/**
 * Register our styles.
 */
function register_styles() : void {
	register_block_style(
		'core/heading',
		[
			'name' => 'report-section-heading',
			'label' => __( 'Report Section Heading', 'wmf-reports' ),
		]
	);
	register_block_style(
		'core/group',
		[
			'name' => 'report-overlapping-callout',
			'label' => __( 'Report Overlapping Callout', 'wmf-reports' ),
		]
	);
}
