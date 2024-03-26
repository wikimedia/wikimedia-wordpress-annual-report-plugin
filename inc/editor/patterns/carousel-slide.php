<?php
/**
 * Block pattern for a carousel-slide group.
 */

namespace WMF\Reports\Editor\Patterns\CarouselSlide;

const NAME = 'wmf-reports/carousel-slide';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-bright-yellow","className":"carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"enabled":false},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"carousel-slide__category is-style-sans-p"} -->
<p class="carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color">Lorem ipsum / Sit amet </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"carousel-slide__heading is-style-default"} -->
<h2 class="wp-block-heading carousel-slide__heading is-style-default">Lorem ipsum dolor sit amet vulputate.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carousel-slide__location is-style-sans-p"} -->
<p class="carousel-slide__location is-style-sans-p"><em>Line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base0","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary carousel-slide__button"} -->
<div class="wp-block-button is-style-tertiary carousel-slide__button"><a class="wp-block-button__link has-base-0-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
CONTENT;
