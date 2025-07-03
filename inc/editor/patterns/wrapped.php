<?php
/**
 * Block pattern for the wrapped section.
 */

namespace WMF\Reports\Editor\Patterns\Wrapped;

const NAME = 'wmf-reports/wrapped';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"That's 2023 Wrapped"},"align":"wide","className":"wmf-pattern-wrapped"} -->
<div class="wp-block-group alignwide wmf-pattern-wrapped"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2"><strong>And that's 2023 wrapped</strong>.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Feel free to download this report as a PDF booklet, and to share it with your friends online.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="/wp-content/uploads/2024/04/WMF-Annual-Report-22-23.pdf" target="_blank" rel="noreferrer noopener">Download PDF</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent is-share-button"} -->
<div class="wp-block-button is-style-transparent is-share-button"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
CONTENT;
