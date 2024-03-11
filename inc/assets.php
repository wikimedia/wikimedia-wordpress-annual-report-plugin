<?php
/**
 * Plugin assets.
 */

namespace WMF\Reports\Assets;

use const WMF\Reports\PLUGIN_PATH;
use WMF\Reports\Asset_Loader;

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_editor_assets' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_frontend_assets' );
}

/**
 * Return the public URI of a file in the build/ folder.
 *
 * @param string $relative_file_path Path to target file within build/.
 * @return string Fully-formed public URI for this file.
 */
function build_file_uri( string $relative_file_path ) : string {
	return plugin_dir_url( PLUGIN_PATH ) . 'build/' . $relative_file_path;
}

/**
 * Return the full file system path of a file in the build/ folder.
 *
 * @param string $relative_file_path Path to target file within build/.
 * @return string Full file system path to this file.
 */
function build_file_path( string $relative_file_path = '' ) : string {
	return PLUGIN_PATH . '/build/' . $relative_file_path;
}

/**
 * Enqueue these assets in the block editor.
 */
function enqueue_editor_assets() : void {
	Asset_Loader\enqueue_script_asset(
		'annual-report-plugin-editor',
		build_file_path( 'editor.asset.php' ),
		build_file_uri( 'editor.js' )
	);

	wp_enqueue_style(
		'annual-report-plugin-editor',
		build_file_uri( 'editor.css' )
	);
}

/**
 * Enqueue these assets only on the frontend.
 */
function enqueue_frontend_assets() : void {
	Asset_Loader\enqueue_script_asset(
		'annual-report-plugin-frontend',
		build_file_path( 'frontend.asset.php' ),
		build_file_uri( 'frontend.js' )
	);

	wp_enqueue_style(
		'annual-report-plugin-frontend',
		build_file_uri( 'frontend.css' )
	);
}
