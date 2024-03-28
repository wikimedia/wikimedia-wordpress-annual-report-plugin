<?php
/**
 * Block pattern for the previous reports section.
 */

namespace WMF\Reports\Editor\Patterns\PreviousReports;

const NAME = 'wmf-reports/previous-reports';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"bright-blue","textColor":"base100","className":"wmf-pattern-previous-reports","metadata":{"name":"Previous Reports"}} -->
<div class="wp-block-group alignfull wmf-pattern-previous-reports has-base-100-color has-bright-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"textColor":"base100","includeInToC":true,"tocLabel":"Previous Reports","tocSlug":"toc-previous-reports"} -->
<div class="wp-block-group alignwide has-base-100-color has-text-color has-link-color"><!-- wp:heading -->
<h2 class="wp-block-heading">Previous Reports</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Archive</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>TODO Carousel</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
