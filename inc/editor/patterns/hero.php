<?php
/**
 * Block pattern for a full-width group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\Hero;

const NAME = 'wmf-reports/hero';

const PATTERN = <<<CONTENT
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"wmf-report-blue","className":"wmf-pattern-reports-hero is-style-default","metadata":{"name":""}} -->
<section class="wp-block-group alignfull wmf-pattern-reports-hero is-style-default has-wmf-report-blue-background-color has-background"><!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__head","metadata":{"name":""}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__head"><!-- wp:image {"align":"full","id":74087,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"className":"wmf-pattern-reports-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-reports-hero__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2023/12/Pranzo_al_volo.jpg?w=683" alt="" class="wp-image-74087"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__heading-container","metadata":{"name":""}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__heading-container"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-reports-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__heading"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-brightblue","textColor":"base90","className":"wmf-pattern-reports-hero__heading-pill"} -->
<div class="wp-block-group wmf-pattern-reports-hero__heading-pill has-base-90-color has-wmf-report-brightblue-background-color has-text-color has-background has-link-color"><!-- wp:heading {"className":"wmf-pattern-reports-hero__heading-label"} -->
<h2 class="wp-block-heading wmf-pattern-reports-hero__heading-label">Annual Report 2025</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><strong>The people behind a year of impact around the world</strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"wmf-report-blue","textColor":"base100","className":"wmf-pattern-reports-hero__content-background"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__content-background has-base-100-color has-wmf-report-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","className":"wmf-pattern-reports-hero__content"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__content"><!-- wp:wmf-reports/expandable {"showMoreText":"View more","showLessText":"View less","visibleAmount":150,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">This year’s Annual Report highlights the people who made sure that the Wikimedia projects made a big difference in the 2022-2023 fiscal year. If you’re a donor, that means you. If you’re a contributor to Wikipedia or any of the Wikimedia Foundation’s 12 other knowledge projects, that means you. Every year, millions and millions of people give selflessly to the ipsum duis consectetur aute eu duis cillum officia proident ea ut incididunt.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Commodo mollit incididunt amet ut id labore reprehenderit aliqua deserunt duis. Esse dolore aliquip est aute in esse ad amet ea pariatur sint. Excepteur esse esse ex ut. Id anim qui culpa irure cupidatat dolor ea eiusmod sint nisi. Eu consectetur esse id duis. Adipisicing ut tempor sint adipisicing excepteur.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="View more" data-showlesstext="View less">View more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
CONTENT;
