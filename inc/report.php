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
	add_filter( 'allowed_block_types_all', __NAMESPACE__ . '\\allowed_block_types', 11, 2 );
}

/**
 * Register custom post type for reports.
 */
function register_post_type() {
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
 * Filter the allowed blocks to ensure all our Annual Report blocks are included.
 *
 * @param bool|string[]            $allowed_block_types  Array of block type slugs, or boolean to enable/disable all.
 * @param \WP_Block_Editor_Context $block_editor_context The current block editor context.
 *
 * @return bool|string[] Filtered allowed blocks list.
 */
function allowed_block_types( $allowed_block_types, $block_editor_context ) {

	// Ensure all our blocks are allowed and not excluded by the theme.
	$ar_blocks = [
		'expandable'
	];

	foreach ( $ar_blocks as $block ) {
		$block_name = 'wikimedia-annual-report/' . $block;
		if ( ! in_array( $block_name, $allowed_block_types, true ) ) {
			$allowed_block_types[] = $block_name;
		}
	}
	
	return $allowed_block_types;
}