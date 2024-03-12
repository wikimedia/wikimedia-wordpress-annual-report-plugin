<?php
/*
Plugin Name: Wikimedia WordPress Annual Report
Description: WP plugin to house all the functionality required for building Wikimedia's digital-first annual reports.
Author: Human Made
Author URI: https://hmn.md
Version: 0.1
License: GPL-2+
*/

namespace WMF\Reports;

// Expose plugin directory file system path for dirname()-free usage elsewhere.
const PLUGIN_PATH = __DIR__;

require_once __DIR__ . '/inc/assets.php';
require_once __DIR__ . '/inc/asset-loader/namespace.php';
require_once __DIR__ . '/inc/asset-loader/utilities.php';
require_once __DIR__ . '/inc/report.php';
require_once __DIR__ . '/inc/editor/patterns.php';
require_once __DIR__ . '/inc/editor/patterns/hero.php';

Assets\bootstrap();
Report\bootstrap();
