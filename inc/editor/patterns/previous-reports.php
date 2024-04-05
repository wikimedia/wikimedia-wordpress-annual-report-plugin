<?php
/**
 * Block pattern for the previous reports section.
 */

namespace WMF\Reports\Editor\Patterns\PreviousReports;

const NAME = 'wmf-reports/previous-reports';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"bright-blue","textColor":"base100","className":"wmf-pattern-previous-reports"} -->
<div class="wp-block-group alignfull wmf-pattern-previous-reports has-base-100-color has-bright-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"textColor":"base100","includeInToC":true,"tocLabel":"Previous Reports","tocSlug":"toc-previous-reports"} -->
<div class="wp-block-group alignwide has-base-100-color has-text-color has-link-color"><!-- wp:heading -->
<h2 class="wp-block-heading">Previous Reports</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Archive</strong></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/report-archive -->
<!-- wp:wmf-reports/report -->
<!-- wp:image {"id":74154,"width":"240px","height":"300px","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-large is-resized wp-block-wmf-reports-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2023/12/Ingushetia_Russia_Armkhi_Ingush_tower.jpg?w=1024" alt="" class="wp-image-74154" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>Lorem ipsum dolor sit amet mattis ut magna faucibus vulputate nullam feugiat arcu nulla aliquet.</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74079,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2023/12/Rabock_i_narbild.jpg" alt="" class="wp-image-74079" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->
<!-- /wp:wmf-reports/report-archive --></div>
<!-- /wp:group -->
CONTENT;
