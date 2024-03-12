<?php
/**
 * Custom post type for reports
 */
declare( strict_types=1 );

namespace WMF\Reports\Report;

const POST_TYPE = 'wmf-report';

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_post_type' );
	add_action( 'init', __NAMESPACE__ . '\\register_blocks' );
	add_filter( 'allowed_block_types_all', __NAMESPACE__ . '\\allow_report_block_types', 11, 2 );
}

/**
 * Register custom post type for reports.
 */
function register_post_type() : void {
	\register_post_type(
		POST_TYPE,
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

/**
 * Filter the allowed blocks to ensure all our Annual Report blocks are included.
 *
 * @param bool|string[]            $allowed_block_types  Array of block type slugs, or boolean to enable/disable all.
 * @param \WP_Block_Editor_Context $block_editor_context The current block editor context.
 *
 * @return bool|string[] Filtered allowed blocks list.
 */
function allow_report_block_types( $allowed_block_types, $block_editor_context ) {
	if ( is_bool( $allowed_block_types ) ) {
		return $allowed_block_types;
	}
	if ( ( $block_editor_context->post->post_type ?? '' ) !== POST_TYPE ) {
		return $allowed_block_types;
	}
	// TODO: Before launch, replace with a static list for improved performance.
	$block_json_files = glob( dirname( __DIR__ ) . '/build/blocks/*/block.json' );
	$plugin_block_types = array_filter(
		array_map(
			function( string $block_json_path ) : string {
				$metadata = wp_json_file_decode( $block_json_path, [ 'associative' => true ] );
				return $metadata['name'] ?? '';
			},
			$block_json_files
		)
	);
	return array_merge( $allowed_block_types, $plugin_block_types );
}
