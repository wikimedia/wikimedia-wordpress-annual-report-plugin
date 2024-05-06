<?php
/**
 * Plugin assets.
 */

namespace WMF\Reports\Assets;

use const WMF\Reports\PLUGIN_PATH;
use const WMF\Reports\PLUGIN_VERSION;
use WMF\Reports\Asset_Loader;

use const WMF\Reports\Blocks\Map\MAP_API_OPTION_KEY;

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'body_class', __NAMESPACE__ . '\\add_body_classes'  );
	add_action( 'init', __NAMESPACE__ . '\\register_dependency_scripts' );
	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_editor_assets' );
	add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\enqueue_frontend_styles' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_frontend_scripts' );
	add_filter( 'wp_headers', __NAMESPACE__ . '\\set_connect_src_origins', 901, 2 );
	add_filter( 'wmf/security/csp/allowed_origins', __NAMESPACE__ . '\\allow_mapbox_csp_origins', 10, 2 );
	add_filter( 'wp_headers', __NAMESPACE__ . '\\set_blob_worker_src_csp', 901, 2 );
}

/**
 * Output the current theme so that we can target only that.
 *
* @param string $classes Class to output to the body tag.
 */
function add_body_classes( $classes ) {
	$classes[] = get_option('stylesheet');
	return $classes;
}

/**
 * Register script handles which will be used as dependencies of other blocks.
 */
function register_dependency_scripts() : void {
	wp_register_script(
		'mapbox-gl',
		'https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js',
		[],
		'3.2.0',
		true
	);
}

/**
 * Customize CSP origin allow-list for this site to permit loading mapbox.
 *
 * @param string[] $allowed_origins List of origins to allow in this CSP.
 * @param string   $policy_type     CSP type.
 * @return string[] Filtered list of permitted origins.
 */
function allow_mapbox_csp_origins( array $allowed_origins, string $policy_type ) : array {
	if ( in_array( $policy_type, [ 'script-src', 'style-src' ], true ) ) {
		$allowed_origins[] = 'https://api.mapbox.com';
	}
	return $allowed_origins;
}

/**
 * Permit blob: urls in worker-src CSP to allow Mapbox workers.
 *
 * We can't do this with the csp/allowed_origins filter because blob: is
 * not a permitted URL format yet within the security plugin, and we don't
 * set worker-src in the security plugin by default.
 *
 * @param string[] $headers Associative array of headerd to set.
 * @return string[] Updated HTTP headers array.
 */
function set_blob_worker_src_csp( array $headers ) : array {
	if ( strpos( $headers['Content-Security-Policy'], 'worker-src' ) !== false ) {
		$headers['Content-Security-Policy'] = preg_replace(
			"/worker-src /",
			"worker-src blob: ",
			$headers['Content-Security-Policy']
		);
	} else {
		$headers['Content-Security-Policy'] .= '; worker-src self blob:';
	}

	return $headers;
}

/**
 * Expand the 'connect-src' origins list to allow ws: websocket and Mapbox connections.
 *
 * Resolves bug in wiki security plugin that only permits wss.
 *
 * @param string[] $headers Associative array of headerd to set.
 * @return string[] Updated HTTP headers array.
 */
function set_connect_src_origins( array $headers ) : array {
	$headers['Content-Security-Policy'] = preg_replace(
		"/connect-src 'self'/",
		"connect-src 'self' https://api.mapbox.com https://events.mapbox.com",
		$headers['Content-Security-Policy']
	);

	// Further changes in this function are relevant only in local environment.
	if ( wp_get_environment_type() !== 'local' ) {
		return $headers;
	}

	$localhost_srcs = array_reduce(
		[ 8080, 8887, 8888 ],
		function( $carry, $port ) {
			return $carry .= "ws://localhost:$port wss://localhost:$port http://localhost:$port https://localhost:$port ";
		},
		''
	);

	$headers['Content-Security-Policy'] = preg_replace(
		"/connect-src 'self'/",
		"connect-src 'self' $localhost_srcs",
		$headers['Content-Security-Policy']
	);

	return $headers;
}

/**
 * Return the public URI of a file in the build/ folder.
 *
 * @param string $relative_file_path Path to target file within build/.
 * @return string Fully-formed public URI for this file.
 */
function build_file_uri( string $relative_file_path ) : string {
	return plugin_dir_url( PLUGIN_PATH . '/plugin.php' ) . 'build/' . $relative_file_path;
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
		build_file_uri( 'editor.css' ),
		[
			'dashicons'
		],
		wp_get_environment_type() === 'local'
			? filemtime( build_file_path( 'editor.css' ) )
			: PLUGIN_VERSION
	);

	wp_enqueue_style( 'mapbox-css', 'https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' );
	wp_localize_script(
		'annual-report-plugin-editor',
		'wmf',
		[
			'apiKey' => get_option( MAP_API_OPTION_KEY ),
			'theme' => get_option('stylesheet'),
		],
	);
}

/**
 * Enqueue these assets only on the frontend.
 */
function enqueue_frontend_scripts() : void {
	Asset_Loader\enqueue_script_asset(
		'annual-report-plugin-frontend',
		build_file_path( 'frontend.asset.php' ),
		build_file_uri( 'frontend.js' )
	);

	if ( has_block( 'wmf-reports/map' ) ) {
		wp_localize_script(
			'annual-report-plugin-frontend',
			'wmf',
			[
				'apiKey' => get_option( MAP_API_OPTION_KEY ),
			],
		);
	}
}

/**
 * Enqueue these assets in the editor and the frontend.
 */
function enqueue_frontend_styles() : void {
	wp_enqueue_style(
		'annual-report-plugin-frontend',
		build_file_uri( 'frontend.css' ),
		[
			'dashicons'
		],
		wp_get_environment_type() === 'local'
			? filemtime( build_file_path( 'frontend.css' ) )
			: PLUGIN_VERSION
	);

	if ( has_block( 'wmf-reports/map' ) ) {
		wp_enqueue_style( 'mapbox-css', 'https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' );
	}
}
