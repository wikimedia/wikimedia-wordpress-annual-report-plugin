<?php
/**
 * Block pattern for an overlay group.
 */

namespace WMF\Reports\Editor\Patterns\OverlayGroup;

const NAME = 'wmf-reports/overlay-group';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","className":"overlay__group","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull overlay__group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default overlay__image"} -->
<figure class="wp-block-image size-full is-style-default overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"overlay__category is-style-sans-p"} -->
<p class="overlay__category is-style-sans-p has-orange-color has-text-color has-link-color">Lorem ipsum / Sit amet</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"overlay__heading is-style-default"} -->
<h2 class="wp-block-heading overlay__heading is-style-default">Lorem ipsum dolor sit amet vulputate.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"overlay__content","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide overlay__content"><!-- wp:paragraph -->
Lorem ipsum dolor sit amet nisl tincidunt fusce vivamus ornare odio. Vivamus dolore fusce cras iaculis orci tellus odio nibh libero vestibulum. Augue vel gravida cursus aliquam hendrerit volutpat quam eros aenean vitae dolore ornare. Elementum consequat vulputate cras dictumst curabitur fringilla tristique eiusmod incididunt eiusmod. Ornare morbi dictum dictumst ut morbi facilisi ut auctor congue consectetur lacus pharetra ultricies habitasse.
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
