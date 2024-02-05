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

require_once __DIR__ . '/inc/assets.php';
require_once __DIR__ . '/inc/report.php';

Assets\bootstrap();
Report\bootstrap();
