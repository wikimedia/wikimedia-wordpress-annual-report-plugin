<?php
/**
 * Block pattern for the by the numbers section.
 */

namespace WMF\Reports\Editor\Patterns\ByTheNumbers;

const NAME = 'wmf-reports/by-the-numbers';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","backgroundColor":"green","className":"wmf-pattern-by-the-numbers","metadata":{"name":"By the Numbers"},"tocLabel":"","tocSlug":"toc-"} -->
<div class="wp-block-group alignfull wmf-pattern-by-the-numbers has-green-background-color has-background"><!-- wp:group {"align":"wide","includeInToC":true,"tocLabel":"By the Numbers","tocSlug":"toc-by-the-numbers"} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">By the Numbers</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A good year in stats</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet lacinia vel vestibulum. Scelerisque tempus dui vel elementum lectus pretium mi molestie. Lacinia dictumst lacinia senectus ut tempus cras donec faucibus incididunt. Dictumst purus scelerisque adipiscing mattis nisl vulputate velit tristique vel laoreet eleifend. Hendrerit venenatis molestie sagittis duis massa posuere non curabitur facilisis volutpat id.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wmf-pattern-by-the-numbers__masonry","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-by-the-numbers__masonry"><!-- wp:group {"className":"wmf-pattern-most-visited","layout":{"type":"constrained"}} -->
<div id="top-visited" class="wp-block-group wmf-pattern-most-visited"><!-- wp:paragraph {"className":"wmf-pattern-most-visited__number"} -->
<p class="wmf-pattern-most-visited__number">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-most-visited__text"} -->
<p class="wmf-pattern-most-visited__text">of the most visited sites in the world</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/top-visited.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-ads-served","layout":{"type":"constrained"}} -->
<div id="0-ads-served" class="wp-block-group wmf-pattern-ads-served"><!-- wp:paragraph {"className":"wmf-pattern-ads-served__number"} -->
<p class="wmf-pattern-ads-served__number">0</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-ads-served__text"} -->
<p class="wmf-pattern-ads-served__text">ads Served</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/0-ads-served.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-most-editors","layout":{"type":"constrained"},"metadata":{"name":""}} -->
<div id="editors" class="wp-block-group wmf-pattern-most-editors"><!-- wp:paragraph {"className":"wmf-pattern-most-editors__number"} -->
<p class="wmf-pattern-most-editors__number"><span class="wmf-countup">300,000</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-most-editors__text"} -->
<p class="wmf-pattern-most-editors__text">monthly editors of Wikimedia projects</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-two-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-two-columns"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/clock.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__number"} -->
<p class="wmf-pattern-two-columns__number">5.75</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__text"} -->
<p class="wmf-pattern-two-columns__text">edits to Wikipedia every second</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/translation.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__number"} -->
<p class="wmf-pattern-two-columns__number">320 </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__unit"} -->
<p class="wmf-pattern-two-columns__unit">billion</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__text"} -->
<p class="wmf-pattern-two-columns__text">monthly views of Wikimedia projects</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-three-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-three-columns"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number">7+ </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit"} -->
<p class="wmf-pattern-three-columns__unit">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">donors from nearly 30 countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number">91 </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit"} -->
<p class="wmf-pattern-three-columns__unit">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">and counting freely usable media files on Wikimedia Commons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number">60 </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit"} -->
<p class="wmf-pattern-three-columns__unit">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">Wikipedia articles and counting</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-piechart","layout":{"type":"constrained"}} -->
<div id="piechart" class="wp-block-group wmf-pattern-piechart"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/piechart.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wmf-pattern-piechart__number"} -->
<p class="wmf-pattern-piechart__number">30%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-piechart__text"} -->
<p class="wmf-pattern-piechart__text">increase in women contributors on Wikipedia in the past year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-views","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-views"><!-- wp:paragraph {"className":"wmf-pattern-views__number"} -->
<p class="wmf-pattern-views__number">20</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-views__unit"} -->
<p class="wmf-pattern-views__unit">billion</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-views__text"} -->
<p class="wmf-pattern-views__text">monthly views of Wikimedia projects</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
