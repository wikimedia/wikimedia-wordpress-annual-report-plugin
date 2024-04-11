<?php
/**
 * Block pattern for the donate section.
 */

namespace WMF\Reports\Editor\Patterns\Donate;

const NAME = 'wmf-reports/donate';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","backgroundColor":"base80","className":"wp-block-wmf-reports-donate"} -->
<div class="wp-block-group alignwide wp-block-wmf-reports-donate has-base-80-background-color has-background"><!-- wp:heading {"level":3,"className":"is-style-default"} -->
<h3 class="wp-block-heading is-style-default"><strong>Help Ensure Wikipedia's Future</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet platea erat habitasse sapien venenatis iaculis labore elit. Porttitor gravida magna elementum labore justo odio eiusmod quam mollis curabitur tortor nulla sodales nec. Venenatis sagittis posuere dapibus interdum mi scelerisque eget orci labore mattis blandit auctor. Imperdiet urna vivamus proin nulla mattis integer fusce. Hac dui eleifend quisque tellus lacus diam eu tellus vel consequat faucibus etiam tempus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-open is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-open is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="#" target="_blank" rel="noreferrer noopener">Learn More</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary has-icon has-icon-heart-pink"} -->
<div class="wp-block-button is-style-secondary has-icon has-icon-heart-pink"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener">Give Today</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
CONTENT;
