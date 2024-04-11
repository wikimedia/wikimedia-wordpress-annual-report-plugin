<?php
/**
 * Integration logic for Foundation & Endowment sites.
 */
declare( strict_types=1 );

namespace WMF\Reports\Theme_Integration;

use WMF\Reports\Report;

/**
 * Attach hooks.
 */
function bootstrap() {
	add_action( 'wmf_hide_page_title', __NAMESPACE__ . '\\suppress_page_title_h1_on_reports' );
}

/**
 * Do not show the page title H1 on reports, we use an H1 within page content.
 *
 * @param bool $hide_page_title Whether to hide page title
 */
function suppress_page_title_h1_on_reports( bool $hide_page_title ) : bool {
	if ( is_singular( Report\POST_TYPE ) ) {
		return true;
	}
	return $hide_page_title;
}
