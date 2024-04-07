<?php
/*
Plugin Name: Wikimedia WordPress Annual Report
Description: WP plugin to house all the functionality required for building Wikimedia's digital-first annual reports.
Author: Human Made
Author URI: https://hmn.md
Version: 0.1
License: GPL-2.0-or-later
*/

namespace WMF\Reports;

// Expose plugin directory file system path for dirname()-free usage elsewhere.
const PLUGIN_PATH = __DIR__;

require_once __DIR__ . '/inc/assets.php';
require_once __DIR__ . '/inc/asset-loader/namespace.php';
require_once __DIR__ . '/inc/asset-loader/utilities.php';
require_once __DIR__ . '/inc/blocks/core-group.php';
require_once __DIR__ . '/inc/blocks/expandable.php';
require_once __DIR__ . '/inc/blocks/map.php';
require_once __DIR__ . '/inc/blocks/table-of-contents.php';
require_once __DIR__ . '/inc/report.php';
require_once __DIR__ . '/inc/editor.php';
require_once __DIR__ . '/inc/editor/colors.php';
require_once __DIR__ . '/inc/editor/patterns.php';
require_once __DIR__ . '/inc/editor/patterns/by-the-numbers.php';
require_once __DIR__ . '/inc/editor/patterns/carousel-slide.php';
require_once __DIR__ . '/inc/editor/patterns/donate.php';
require_once __DIR__ . '/inc/editor/patterns/donor.php';
require_once __DIR__ . '/inc/editor/patterns/endowment.php';
require_once __DIR__ . '/inc/editor/patterns/finance-tables.php';
require_once __DIR__ . '/inc/editor/patterns/financial-statements.php';
require_once __DIR__ . '/inc/editor/patterns/hero.php';
require_once __DIR__ . '/inc/editor/patterns/leadership.php';
require_once __DIR__ . '/inc/editor/patterns/letter-from-the-ceo.php';
require_once __DIR__ . '/inc/editor/patterns/overlay.php';
require_once __DIR__ . '/inc/editor/patterns/previous-reports.php';
require_once __DIR__ . '/inc/editor/patterns/report.php';
require_once __DIR__ . '/inc/editor/patterns/wrapped.php';
require_once __DIR__ . '/inc/editor/patterns/welcome-page.php';
require_once __DIR__ . '/inc/editor/styles.php';
require_once __DIR__ . '/inc/theme-integration.php';

Assets\bootstrap();
Blocks\Core_Group\bootstrap();
Blocks\Expandable\bootstrap();
Blocks\Map\bootstrap();
Blocks\Table_of_Contents\bootstrap();
Report\bootstrap();
Editor\Colors\bootstrap();
Editor\Patterns\bootstrap();
Editor\Styles\bootstrap();
Theme_Integration\bootstrap();
