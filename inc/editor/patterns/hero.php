<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\Hero;

const NAME = 'wmf-reports/hero';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero"><!-- wp:image {"lock":{"move":true,"remove":true}} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"className":"reports-hero-headings","layout":{"type":"constrained"}} -->
<div class="wp-block-group reports-hero-headings"><!-- wp:heading -->
<h2 class="wp-block-heading">Annual Report 2023</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">The people<br>behind a year<br>of impact around<br>the world</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/expandable {"lock":{"move":true,"remove":true}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="300" data-visible-unit="px"><!-- wp:paragraph -->
<p>This year’s Annual Report highlights the people who made sure that the Wikimedia projects made a big difference in the 2022-2023 fiscal year. If you’re a donor, that means you. If you’re a contributor to Wikipedia or any of the Wikimedia Foundation’s 12 other knowledge projects, that means you. Every year, millions and millions of people give selflessly to the ipsum duis consectetur aute eu duis cillum officia proident ea ut incididunt.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Commodo mollit incididunt amet ut id labore reprehenderit aliqua deserunt duis. Esse dolore aliquip est aute in esse ad amet ea pariatur sint. Excepteur esse esse ex ut. Id anim qui culpa irure cupidatat dolor ea eiusmod sint nisi. Eu consectetur esse id duis. Adipisicing ut tempor sint adipisicing excepteur.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Id id dolor reprehenderit in adipisicing laborum ad nostrud reprehenderit. Velit amet commodo nisi in commodo laborum exercitation tempor laboris. Magna incididunt quis culpa reprehenderit irure. Amet nulla consequat culpa reprehenderit consequat do incididunt irure anim mollit cillum ad deserunt.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In cillum exercitation nulla amet aute velit deserunt proident excepteur incididunt nulla incididunt proident ad. In consectetur ex deserunt consequat officia sit dolore excepteur. Aliquip culpa nostrud aute aliquip ipsum deserunt dolor eu laboris veniam. Et pariatur amet ea eu ex. Consequat dolor mollit ipsum et do nulla exercitation commodo cillum reprehenderit aliqua cupidatat.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group -->
CONTENT;
