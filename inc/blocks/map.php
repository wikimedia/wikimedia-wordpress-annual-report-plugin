<?php
/**
 * Block-specific PHP logic for the Map block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Map;

const MAP_API_OPTION_KEY        = 'wmf-map-api-key';
const MAP_SETTINGS_NONCE_ACTION = 'wmf-update-map-settings';

/**
 * Attach hooks and filters.
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_map_settings' );
	add_action( 'admin_menu', __NAMESPACE__ . '\\add_map_settings_page' );
	add_action( 'init', __NAMESPACE__ . '\\save_map_settings_options' );
}

/**
 * Register map settings.
 *
 * @return void
 */
function register_map_settings() : void {
	register_setting(
		'wmf-settings',
		MAP_API_OPTION_KEY,
		[
			'default'      => '',
			'show_in_rest' => true,
			'type'         => 'string',
		]
	);
}

/**
 * Add map settings page.
 *
 * @return void
 */
function add_map_settings_page() : void {
	add_options_page(
		esc_html__( 'Map Settings', 'wmf-reports' ),
		esc_html__( 'Map Settings', 'wmf-reports' ),
		'manage_options',
		'map_settings',
		__NAMESPACE__ . '\\render_map_settings_admin_page'
	);
}

/**
 * Render the settings page.
 */
function render_map_settings_admin_page() : void {
?>
<div class="wrap">
    <h1><?php esc_html_e( 'Map Settings', 'wmf-reports' ); ?></h1>
    <p><?php esc_html_e( 'This admin screen lets you manage your map settings.', 'wmf-reports' ); ?></p>

    <form method="post">
        <?php
			$api_key = (string) get_option( MAP_API_OPTION_KEY, '' );
			?>

        <h2 class="title"><?php esc_html_e( 'API Key', 'wmf-reports' ); ?></h2>
        <p><?php esc_html_e( 'Use this section manage your API Key.', 'wmf-reports' ); ?></p>
        <table class="form-table permalink-structure" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="map_api_key"><?php esc_html_e( 'Mapbox API Key', 'wmf-reports' ); ?></label>
                    </th>
                    <td>
                        <p>
                            <input id="map_api_key" name="<?php echo esc_attr( MAP_API_OPTION_KEY ); ?>"
                                type="text" value="<?php echo esc_attr( $api_key ); ?>" />
							<p class="description">
								<?php
								printf(
									esc_html__( 'Follow the instructions on the %sMapbox website%s to create your API key.', 'wmf-reports' ),
									'<a href="https://docs.mapbox.com/help/getting-started/access-tokens/">',
									'</a>'
								)
								?>
							</p>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php wp_nonce_field( MAP_SETTINGS_NONCE_ACTION ); ?>
        <input type="submit" value="Save" class="button button-primary button-large">
    </form>
</div>
<?php
}

/**
 * Save map settings options.
 *
 * @return void
 */
function save_map_settings_options() : void {
	// If the user cannot manage_options, bail.
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// Verify the nonce and the form submission.
	if ( ! isset( $_REQUEST['_wpnonce'] ) || ! wp_verify_nonce( $_REQUEST['_wpnonce'], MAP_SETTINGS_NONCE_ACTION ) ) {
		return;
	}

	// Default Sportsbook.
	$api_key = sanitize_text_field( $_REQUEST[ MAP_API_OPTION_KEY ] );
	update_option( MAP_API_OPTION_KEY, $api_key );

	// Add a notice so we know the option has been updated.
	add_action( 'admin_notices', __NAMESPACE__ . '\\show_updated_notice' );
}

/**
 * Show updated notice.
 *
 * @return void
 */
function show_updated_notice() : void {
	$class   = 'notice notice-success is-dismissible';
	$message = esc_html__( 'Settings Saved.', 'wmf-reports' );

	printf( '<div class="%1$s"><p><strong>%2$s</strong></p></div>', esc_attr( $class ), esc_html( $message ) );
}
