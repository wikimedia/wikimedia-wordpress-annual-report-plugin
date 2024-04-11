<?php
/**
 * Block pattern for the Learn More section.
 */

namespace WMF\Reports\Editor\Patterns\Learn_More;

const NAME = 'wmf-reports/learn-more';

const PATTERN = <<<CONTENT
<!-- wp:group {"backgroundColor":"wmf-report-bright-yellow","className":"wmf-pattern-stories-learn-more","layout":{"type":"constrained"},"metadata":{"name":"Learn More"}} -->
<div class="wp-block-group wmf-pattern-stories-learn-more has-wmf-report-bright-yellow-background-color has-background"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Learn More</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#">Link to related article 1</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Link to related article 2</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
