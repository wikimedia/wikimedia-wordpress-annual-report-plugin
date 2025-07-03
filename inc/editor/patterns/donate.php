<?php
/**
 * Block pattern for the donate section.
 */

namespace WMF\Reports\Editor\Patterns\Donate;

const NAME = 'wmf-reports/donate';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"Help Ensure Future"},"align":"wide","className":"wp-block-wmf-reports-donate","backgroundColor":"red90"} -->
<div class="wp-block-group alignwide wp-block-wmf-reports-donate has-red-90-background-color has-background"><!-- wp:heading {"level":3,"className":"is-style-default"} -->
<h3 class="wp-block-heading is-style-default"><strong>Help Ensure Wikipedia's Future</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Giving for today</strong><br>Making a gift today is the simplest way to ensure that Wikipedia remains strong,&nbsp;stable, and always there when you need it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Giving for tomorrow</strong><br>The Wikimedia Endowment is a safety net that helps protect Wikipedia now and into the future. Legacy gifts to the<a href="https://wikimediaendowment.org/" target="_blank" rel="noreferrer noopener"> Wikimedia Endowment</a> make an impact for years and years. By including Wikipedia in your will, estate planning, retirement plan, or insurance policy, you can leave a beautiful legacy for the next generation of Wikipedia users.&nbsp;<strong>To learn more email </strong><a href="mailto:legacy@wikimedia.org"><strong>legacy@wikimedia.org</strong></a><strong> or click the link below to explore other ways to give to the Endowment.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-open is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-open is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="https://wikimediaendowment.org/ways-to-give/" target="_blank" rel="noreferrer noopener">Learn More</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary has-icon has-icon-heart-pink"} -->
<div class="wp-block-button is-style-secondary has-icon has-icon-heart-pink"><a class="wp-block-button__link wp-element-button" href="https://donate.wikimedia.org/w/index.php?title=Special:LandingPage&amp;country=GB&amp;uselang=en&amp;wmf_medium=wmfSite&amp;wmf_source=74191&amp;wmf_campaign=ARFY2223" target="_blank" rel="noreferrer noopener">Give Today</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
CONTENT;
