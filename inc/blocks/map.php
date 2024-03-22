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
 * Register game settings.
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
 * Add game settings page.
 *
 * @return void
 */
function add_map_settings_page() : void {
	add_options_page(
		'Map Settings',
		'Map Settings',
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
    <h1>Map Settings</h1>
    <p>This admin screen lets you manage your map settings.</p>

    <form method="post">
        <?php
			$api_key = (string) get_option( MAP_API_OPTION_KEY, '' );
			?>

        <h2 class="title">Mapbox API Key</h2>
        <p>Use this section manage your API Key.</p>
        <table class="form-table permalink-structure" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="game_refresh_rate">API Key</label>
                    </th>
                    <td>
                        <p>
                            <input id="map_api_key" name="<?php echo esc_attr( MAP_API_OPTION_KEY ); ?>"
                                type="text" value="<?php echo esc_attr( $$api_key ); ?>" />
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
 * Save game settings options.
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

	// Game refresh rate.
	$game_refresh_rate_old = get_option( GAME_REFRESH_RATE, 60 );
	$game_refresh_rate     = intval( $_REQUEST[ GAME_REFRESH_RATE ] );

	// Remove old schedule if the refresh rate changes.
	if ( $game_refresh_rate_old !== $game_refresh_rate ) {
		$time = wp_next_scheduled( 'dp_update_game_posts' );
		wp_unschedule_event( $time, 'dp_update_game_posts' );
		update_option( GAME_REFRESH_RATE, $game_refresh_rate );
	}


	// Default Sportsbook.
	$default_sportsbooks = sanitize_text_field( $_REQUEST[ SPORTSBOOKS_DEFAULT_OPTION_KEY ] );
	update_option( SPORTSBOOKS_DEFAULT_OPTION_KEY, $default_sportsbooks );

	// Excluded Sportsbooks.
	$sportsbooks          = (array) get_option( SPORTSBOOKS_ALL_OPTION_KEY, [] );
	$excluded_sportsbooks = array_map( 'sanitize_text_field', (array) $_REQUEST[ SPORTSBOOKS_EXCLUDED_OPTION_KEY ] );

	$updated_sportsbooks = array_filter(
		$sportsbooks,
		function ( $sportsbook ) use ( $excluded_sportsbooks ) {
			return ! in_array( $sportsbook, $excluded_sportsbooks, true );
		}
	);

	update_option( SPORTSBOOKS_EXCLUDED_OPTION_KEY, $updated_sportsbooks );

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
	$message = 'Settings saved.';

	printf( '<div class="%1$s"><p><strong>%2$s</strong></p></div>', esc_attr( $class ), esc_html( $message ) );
}
