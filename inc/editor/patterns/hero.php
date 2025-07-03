<?php
/**
 * Block pattern for a full-width group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\Hero;

const NAME = 'wmf-reports/hero';

const PATTERN = <<<CONTENT
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","className":"wmf-pattern-reports-hero is-style-default","backgroundColor":"wmf-report-blue"} -->
<section class="wp-block-group alignfull wmf-pattern-reports-hero is-style-default has-wmf-report-blue-background-color has-background"><!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__head"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__head"><!-- wp:image {"id":74502,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"align":"full","className":"wmf-pattern-reports-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-reports-hero__image"><img src="/wp-content/uploads/2024/04/PrenticeHandMural.jpg?w=1024" alt="" class="wp-image-74502"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__heading-container"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__heading-container"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-reports-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__heading"><!-- wp:group {"className":"wmf-pattern-reports-hero__heading-pill set-overlapping-callout-height","style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-brightblue","textColor":"base90"} -->
<div class="wp-block-group wmf-pattern-reports-hero__heading-pill set-overlapping-callout-height has-base-90-color has-wmf-report-brightblue-background-color has-text-color has-background has-link-color"><!-- wp:heading {"textAlign":"center","className":"has-wmf-logo is-style-report-section-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-wmf-logo is-style-report-section-heading">Annual Report 2022-2023</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><strong>The humans behind a year of impact around the world</strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"align":"full","className":"wmf-pattern-reports-hero__content-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"wmf-report-blue","textColor":"base100"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__content-background has-base-100-color has-wmf-report-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","className":"wmf-pattern-reports-hero__content"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__content"><!-- wp:group {"className":"wp-block-wmf-reports-expandable","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-wmf-reports-expandable"><!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Explore the Wikimedia Foundation’s 2022/23 Annual Report, where we spotlight the extraordinary stories of individuals adding knowledge to Wikimedia projects and making a difference across the globe. Join us in celebrating their contributions and the transformative impact of our collective efforts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
CONTENT;
