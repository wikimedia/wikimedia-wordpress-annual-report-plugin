<?php
/**
 * Block pattern for the by the numbers section.
 */

namespace WMF\Reports\Editor\Patterns\ByTheNumbers;

const NAME = 'wmf-reports/by-the-numbers';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"By the Numbers"},"align":"full","className":"wmf-pattern-by-the-numbers","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"green-30","textColor":"base100","includeInToC":true,"tocLabel":"By the Numbers","tocSlug":"toc-by-the-numbers"} -->
<div class="wp-block-group alignfull wmf-pattern-by-the-numbers has-base-100-color has-green-30-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">By the Numbers</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-default","fontSize":"xlarge"} -->
<h3 class="wp-block-heading is-style-default has-xlarge-font-size"><strong>Zooming Out</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A snapshot of the Wikimedia Foundation's impact in figures.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wmf-pattern-by-the-numbers__masonry","layout":{"type":"default"}} -->
<div class="wp-block-group wmf-pattern-by-the-numbers__masonry"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:group {"className":"wmf-pattern-most-visited","layout":{"type":"constrained"}} -->
<div id="top-visited" class="wp-block-group wmf-pattern-most-visited"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-most-visited__number"} -->
<p class="wmf-pattern-most-visited__number">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-most-visited__text"} -->
<p class="wmf-pattern-most-visited__text"><strong>of the most visited sites in the world</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/top-visited.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-ads-served","layout":{"type":"constrained"}} -->
<div id="0-ads-served" class="wp-block-group wmf-pattern-ads-served"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-ads-served__number"} -->
<p class="wmf-pattern-ads-served__number">0</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-ads-served__text"} -->
<p class="wmf-pattern-ads-served__text"><strong>ads served</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/0-ads-served.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":""},"className":"wmf-pattern-most-editors","layout":{"type":"constrained"}} -->
<div id="editors" class="wp-block-group wmf-pattern-most-editors"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-most-editors__number"} -->
<p class="wmf-pattern-most-editors__number"><span class="wmf-countup">280,000</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-most-editors__text"} -->
<p class="wmf-pattern-most-editors__text"><strong>volunteer editors of Wikimedia projects around the world</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-two-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-two-columns"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:group {"className":"animation\u002d\u002dfade-up","layout":{"type":"constrained"}} -->
<div class="wp-block-group animation--fade-up"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/clock.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__number"} -->
<p class="wmf-pattern-two-columns__number">5.67</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__text"} -->
<p class="wmf-pattern-two-columns__text"><strong>edits to Wikipedia every second</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/translation.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__number"} -->
<p class="wmf-pattern-two-columns__number"><span class="wmf-countup">326</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-two-columns__text"} -->
<p class="wmf-pattern-two-columns__text"><strong>languages on Wikipedia and counting</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-three-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-three-columns"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number">7+ </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit","fontSize":"large"} -->
<p class="wmf-pattern-three-columns__unit has-large-font-size">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">donors from nearly 30 countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number"><span class="wmf-countup">104</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit","fontSize":"large"} -->
<p class="wmf-pattern-three-columns__unit has-large-font-size">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">and counting freely usable media files on Wikimedia Commons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-three-columns__number"} -->
<p class="wmf-pattern-three-columns__number">62</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__unit","fontSize":"large"} -->
<p class="wmf-pattern-three-columns__unit has-large-font-size">million</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-three-columns__text"} -->
<p class="wmf-pattern-three-columns__text">Wikipedia articles and counting</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-piechart","layout":{"type":"constrained"}} -->
<div id="piechart" class="wp-block-group wmf-pattern-piechart"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:image {"width":"201px","height":"auto","sizeSlug":"large","align":"center"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/piechart.svg" alt="" style="width:201px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"wmf-pattern-piechart__number"} -->
<p class="has-text-align-center wmf-pattern-piechart__number">30%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"wmf-pattern-piechart__text"} -->
<p class="has-text-align-center wmf-pattern-piechart__text"><strong>of Wikimedia organizers identify as women</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wmf-pattern-views animation\u002d\u002dfade-up","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-views animation--fade-up"><!-- wp:group {"className":"wp-block-group__inner-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-group__inner-container"><!-- wp:paragraph {"className":"wmf-pattern-views__number"} -->
<p class="wmf-pattern-views__number">15</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-views__unit"} -->
<p class="wmf-pattern-views__unit">billion</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-views__text"} -->
<p class="wmf-pattern-views__text"><strong>views on Wikipedia every month</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wmf-pattern-views__text","fontSize":"small"} -->
<p class="wmf-pattern-views__text has-small-font-size"><em>(that's about double the world's population!)</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
