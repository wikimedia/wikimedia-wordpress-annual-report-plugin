<?php
/**
 * Custom post type for reports
 */

namespace WMF\Reports\Report;

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_post_type' );
}

/**
 * Register custom post type for reports.
 */
function register_post_type() {
	register_post_type( [
		'wmf-report',
		[
			'label' => __( 'Reports', 'wmf-reports' ),
			'description' => __( 'Annual reports for Wikimedia Foundation', 'wmf-reports' ),
			'public' => true,
			'show_in_rest' => true,
			'supports' => [
				'title',
				'editor',
				'custom-fields',
				'revisions',
			],
			'rewrite' => [
				'slug' => 'report',
			],
		]
	] );
}
