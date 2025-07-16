<?php
/**
 * Block pattern for the entire annual report.
 */

namespace WMF\Reports\Editor\Patterns\MapSideBySide;

const NAME = 'wmf-reports/map-side-by-side';

const PATTERN = <<<CONTENT
<!-- wp:wmf-reports/map {"align":"wide","projection":"mercator","centerLat":0,"centerLon":0,"zoom":1,"className":"is-style-side-by-side","backgroundColor":"blue"} -->
<!-- wp:wmf-reports/marker {"align":"","id":1752170660403,"lat":-33.68778175843844,"long":-56.250000000001364} -->
<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h2"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h2"><strong>Lorem ipsum dolor sit amet vulputate.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"wmf-pattern-reports-carousel-slide__button overlay__trigger is-style-as-arrow-link","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"fontSize":"medium"} -->
<div class="wp-block-button wmf-pattern-reports-carousel-slide__button overlay__trigger is-style-as-arrow-link"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" href="#">See more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:wmf-reports/marker -->
<!-- /wp:wmf-reports/map -->
CONTENT;
