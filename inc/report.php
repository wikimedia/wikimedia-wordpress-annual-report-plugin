<?php
/**
 * Custom post type for reports
 */
declare( strict_types=1 );

namespace WMF\Reports\Report;

use WMF\Reports\Editor;

const POST_TYPE = 'wmf-report';

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_post_type' );
	add_action( 'init', __NAMESPACE__ . '\\register_blocks' );
	add_filter( 'allowed_block_types_all', __NAMESPACE__ . '\\allow_report_block_types', 11, 2 );
	add_filter( 'single_template', __NAMESPACE__ . '\\single_template' );
}

/**
 * Register custom post type for reports.
 */
function register_post_type() : void {
	$labels = [
		'name'               => _x( 'Reports', 'post type general name', 'wmf-reports' ),
		'singular_name'      => _x( 'Report', 'post type singular name', 'wmf-reports' ),
		'menu_name'          => _x( 'Reports', 'admin menu', 'wmf-reports' ),
		'name_admin_bar'     => _x( 'Report', 'add new on admin bar', 'wmf-reports' ),
		'add_new'            => _x( 'Add New', 'Filing', 'wmf-reports' ),
		'add_new_item'       => __( 'Add New Report', 'wmf-reports' ),
		'new_item'           => __( 'New Report', 'wmf-reports' ),
		'edit_item'          => __( 'Edit Report', 'wmf-reports' ),
		'view_item'          => __( 'View Report', 'wmf-reports' ),
		'all_items'          => __( 'All Reports', 'wmf-reports' ),
		'search_items'       => __( 'Search Reports', 'wmf-reports' ),
		'parent_item_colon'  => __( 'Parent Reports:', 'wmf-reports' ),
		'not_found'          => __( 'No reports found.', 'wmf-reports' ),
		'not_found_in_trash' => __( 'No reports found in Trash.', 'wmf-reports' ),
	];
	\register_post_type(
		POST_TYPE,
		[
			'labels' => $labels,
			'description' => __( 'Annual reports for Wikimedia Foundation', 'wmf-reports' ),
			'public' => true,
			'show_in_rest' => true,
			'supports' => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'custom-fields',
				'revisions',
			],
			'rewrite' => [
				'slug'       => 'annualreport',
				'with_front' => false,
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

	// We also need the media-text block to be available.
	$core_blocks = [ 'core/media-text' ];

	return array_merge( $allowed_block_types, $plugin_block_types, $core_blocks );
}

/**
 * Filter the single template to use for reports.
 *
 * @param string $template The template file to use.
 *
 * @return string The template file to use.
 */
function single_template( string $template ) : string {
	global $post;

	// Use the theme's page.php template to render reports.
	if ( POST_TYPE === $post->post_type ) {
		$template = locate_template( 'page.php' );
	}

	return $template;
}

/**
 * Check whether the current admin or frontend page is a WMF Report item or the
 * editor for a WMF Report item.
 *
 * @return bool Whether we're viewing or editing a Report.
 */
function is_report_page() : bool {
	if ( ! is_admin() ) {
		$current_post_type = get_post_type();
		if ( ! empty( $current_post_type ) ) {
			return $current_post_type === POST_TYPE;
		}
		// Not sure how to handle returning before post global is set.
		// Tried to use wpcom_vip_url_to_postid, but it seemed to return the wrong ID.
		return false;
	}
	return Editor\is_edit_post_screen( POST_TYPE );
}
