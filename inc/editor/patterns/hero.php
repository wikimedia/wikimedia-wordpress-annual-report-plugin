<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\Hero;

const NAME = 'wmf-reports/hero';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero"><!-- wp:image {"align":"full","id":74375,"sizeSlug":"large","linkDestination":"none","lock":{"move":true,"remove":true}} -->
<figure class="wp-block-image alignfull size-large"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/03/Colorful_Lights_Pattern-11.png?w=1024" alt="" class="wp-image-74375"/></figure>
<!-- /wp:image -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"className":"reports-hero-headings","layout":{"type":"constrained"}} -->
<div class="wp-block-group reports-hero-headings"><!-- wp:heading -->
<h2 class="wp-block-heading">Annual Report 2025</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">The people behind a year of impact around the world</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"reports-hero-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group reports-hero-content"><!-- wp:wmf-reports/expandable {"showMoreText":"View more","showLessText":"View less","lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="300" data-visible-unit="px"><!-- wp:paragraph -->
<p>This year’s Annual Report highlights the people who made sure that the Wikimedia projects made a big difference in the 2022-2023 fiscal year. If you’re a donor, that means you. If you’re a contributor to Wikipedia or any of the Wikimedia Foundation’s 12 other knowledge projects, that means you. Every year, millions and millions of people give selflessly to the ipsum duis consectetur aute eu duis cillum officia proident ea ut incididunt.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Commodo mollit incididunt amet ut id labore reprehenderit aliqua deserunt duis. Esse dolore aliquip est aute in esse ad amet ea pariatur sint. Excepteur esse esse ex ut. Id anim qui culpa irure cupidatat dolor ea eiusmod sint nisi. Eu consectetur esse id duis. Adipisicing ut tempor sint adipisicing excepteur.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="View more" data-showlesstext="View less">View more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
CONTENT;
