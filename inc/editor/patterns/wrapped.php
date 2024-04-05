<?php
/**
 * Block pattern for the wrapped section.
 */

namespace WMF\Reports\Editor\Patterns\Wrapped;

const NAME = 'wmf-reports/wrapped';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-wrapped"} -->
<div class="wp-block-group alignwide wmf-pattern-wrapped"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2"><strong>And that's 2023 Wrapped</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet condimentum phasellus ut praesent nisi.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Download</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent"} -->
<div class="wp-block-button is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share TODO</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
CONTENT;
