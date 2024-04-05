<?php
/**
 * Block pattern for the endowment section.
 */

namespace WMF\Reports\Editor\Patterns\Endowment;

const NAME = 'wmf-reports/endowment';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-endownment","includeInToC":true,"tocLabel":"Endowment and Legacy","tocSlug":"toc-endowment-and-legacy"} -->
<div class="wp-block-group alignwide wmf-pattern-endownment"><!-- wp:heading -->
<h2 class="wp-block-heading">Endowment and Legacy</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Lorem ipsum dolor sit amet cras tristique integer ullamcorper arcu bibendum interdum ultricies.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet congue eu eiusmod tempus eiusmod malesuada mi tristique. Nisl tempor senectus dictum consequat posuere mattis labore. Vel porta aliqua volutpat posuere at nulla at. Molestie nibh dolore mollis elit quisque lacus rhoncus. Ornare venenatis tincidunt id tempor scelerisque quis porta magna.</p>
<!-- /wp:paragraph -->

<!-- wp:shiro/accordion {"className":"wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="accordion-wrapper wp-block-shiro-accordion wp-block-wmf-reports-accordion--alt undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst</h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color"></mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color"></mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color"></mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion --></div>
<!-- /wp:group -->
CONTENT;
