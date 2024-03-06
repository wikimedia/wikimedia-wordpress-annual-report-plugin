<?php
/**
 * Plugin assets.
 */

namespace WMF\Reports\Assets;

use Asset_Loader;

/**
 * Attach hooks.
 */
function bootstrap() {

	if ( ! function_exists( 'Asset_Loader\\enqueue_asset' ) ) {
		trigger_error( 'Wikimedia Annual Reports Plugin expects humanmade/asset-loader to be installed and active' );
		return;
	}

	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_editor_assets' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_frontend_assets' );
	add_filter( 'wp_headers', __NAMESPACE__ . '\\set_connect_src_origins', 901, 2 );
}

/**
 * Expand the 'connect-src' origins list to allow ws: websocket.
 *
 * Resolves bug in wiki security plugin that only permits wss.
 *
 * @param string[] $headers Associative array of headerd to set.
 * @return string[] Updated HTTP headers array.
 */
function set_connect_src_origins( array $headers ) : array {
	$headers['Content-Security-Policy'] = preg_replace(
		"/connect-src 'self'/",
		"connect-src 'self' ws://localhost:8080 localhost:8080",
		$headers['Content-Security-Policy']
	);
	return $headers;
}

/**
 * Enqueue these assets in the block editor.
 */
function enqueue_editor_assets() : void {
	enqueue_build_asset(
		'annual-report-plugin-editor',
		'editor.js',
		[
			'wp-blocks',
			'wp-components',
			'wp-edit-post',
			'wp-element',
			'wp-i18n',
		]
	);
	enqueue_build_asset(
		'annual-report-plugin-editor',
		'editor.css'
	);
}

/**
 * Enqueue these assets only on the frontend.
 */
function enqueue_frontend_assets() : void {
	enqueue_build_asset(
		'annual-report-plugin-frontend',
		'main.js'
	);
	enqueue_build_asset(
		'annual-report-plugin-frontend',
		'main.css'
	);
}

/**
 * Helper function to wrap Asset_Loader in a function with arguments matching wp_enqueue_script.
 *
 * @param string   $handle       Script handle.
 * @param string   $asset        Name of script in asset manifest.
 * @param string[] $dependencies Array of script dependencies.
 */
function enqueue_build_asset( $handle, $asset, $dependencies = [] ) : void {
	$plugin_path = trailingslashit( plugin_dir_path( dirname( __FILE__, 1 ) ) );

	$manifest = Asset_Loader\Manifest\get_active_manifest( [
		$plugin_path . 'assets/dist/development-asset-manifest.json',
		$plugin_path . 'assets/dist/production-asset-manifest.json',
	] );

	if ( empty( $manifest ) ) {
		trigger_error( "No manifest available for $asset", E_USER_WARNING );
		return;
	}

	Asset_Loader\enqueue_asset( $manifest, $asset, [
		'handle' => $handle,
		'dependencies' => $dependencies,
	] );
}
