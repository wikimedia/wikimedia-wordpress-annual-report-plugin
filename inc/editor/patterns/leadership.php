<?php
/**
 * Block pattern for the leadership section.
 */

namespace WMF\Reports\Editor\Patterns\Leadership;

const NAME = 'wmf-reports/leadership';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-reports-leadership","metadata":{"name":"Leadership"},"includeInToC":true,"tocLabel":"Leadership","tocSlug":"toc-leadership"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-leadership"><!-- wp:heading -->
<h2 class="wp-block-heading">Leadership</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A constellation of bright minds</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3">Board of trustees</h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"wmf-pattern-reports-leadership__list"} -->
<ul class="wmf-pattern-reports-leadership__list"><!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3">Executive team</h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"wmf-pattern-reports-leadership__list"} -->
<ul class="wmf-pattern-reports-leadership__list"><!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-blue-color"><strong>Lorem ipsum dolor</strong> </mark><br>Sit amet iaculis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
CONTENT;
