<?php
/**
 * Block pattern for the endowment section.
 */

namespace WMF\Reports\Editor\Patterns\Endowment;

const NAME = 'wmf-reports/endowment';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-endownment","metadata":{"name":"Endowment"},"includeInToC":true,"tocLabel":"Endowment and Legacy","tocSlug":"toc-endowment-and-legacy"} -->
<div class="wp-block-group alignwide wmf-pattern-endownment"><!-- wp:heading -->
<h2 class="wp-block-heading">Endowment and Legacy</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lorem ipsum dolor sit amet cras tristique integer ullamcorper arcu bibendum interdum ultricies.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet congue eu eiusmod tempus eiusmod malesuada mi tristique. Nisl tempor senectus dictum consequat posuere mattis labore. Vel porta aliqua volutpat posuere at nulla at. Molestie nibh dolore mollis elit quisque lacus rhoncus. Ornare venenatis tincidunt id tempor scelerisque quis porta magna.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"is-style-h1"} -->
<h3 class="wp-block-heading is-style-h1">Accordion goes here</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
CONTENT;
