<?php
/**
 * Custom post type for reports
 */
declare( strict_types=1 );

namespace WMF\Reports\Report;

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_post_type' );
	add_action( 'init', __NAMESPACE__ . '\\register_blocks' );
}

/**
 * Register custom post type for reports.
 */
function register_post_type() : void {
	\register_post_type(
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
	);
}

/**
 * Register blocks from their built block.json files.
 */
function register_blocks() : void {
	$block_dirs = glob( dirname( __DIR__ ) . '/build/blocks/*/block.json' );

	foreach ( $block_dirs as $block_dir ) {
		register_block_type_from_metadata( $block_dir );
	}
}
