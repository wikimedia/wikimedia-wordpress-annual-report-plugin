<?php
/**
 * Block pattern for the welcome page.
 */

namespace WMF\Reports\Editor\Patterns\WelcomePage;

const NAME = 'wmf-reports/welcome-page';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","className":"wmf-pattern-report-welcome"} -->
<div class="wp-block-group alignfull wmf-pattern-report-welcome"><!-- wp:group {"tagName":"section","align":"full","backgroundColor":"wmf-report-blue","className":"wmf-pattern-report-into-hero is-style-default"} -->
<section class="wp-block-group alignfull wmf-pattern-report-into-hero is-style-default has-wmf-report-blue-background-color has-background"><!-- wp:group {"align":"full","className":"wmf-pattern-report-into-hero__head"} -->
<div class="wp-block-group alignfull wmf-pattern-report-into-hero__head"><!-- wp:image {"align":"full","id":74087,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"className":"wmf-pattern-report-into-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-report-into-hero__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2023/12/Pranzo_al_volo.jpg?w=683" alt="" class="wp-image-74087"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","className":"wmf-pattern-report-into-hero__heading-container"} -->
<div class="wp-block-group alignfull wmf-pattern-report-into-hero__heading-container"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-report-into-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-report-into-hero__heading"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-brightblue","textColor":"base90","className":"wmf-pattern-report-into-hero__heading-pill"} -->
<div class="wp-block-group wmf-pattern-report-into-hero__heading-pill has-base-90-color has-wmf-report-brightblue-background-color has-text-color has-background has-link-color"><!-- wp:heading {"level":3,"className":"wmf-pattern-report-into-hero__heading-label"} -->
<h3 class="wp-block-heading wmf-pattern-report-into-hero__heading-label"><img class="wp-image-74796" style="width: 20px;" src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/03/Wikimedia-icon.svg" alt="">Annual Report 2025</h3>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><strong>The people behind a year of impact around the world</strong></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-tertiary"} -->
<div class="wp-block-button is-style-tertiary"><a class="wp-block-button__link wp-element-button" href="#">Open the latest report</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-report-intro-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-report-intro-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-h2"} -->
<h3 class="wp-block-heading is-style-h2">All reports</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Access to all reports of Wikimedia foundation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%","className":"wmf-pattern-report-intro-columns__select"} -->
<div class="wp-block-column wmf-pattern-report-intro-columns__select" style="flex-basis:33%"><!-- wp:list -->
<ul><!-- wp:list-item -->
<li></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration">2022-2023</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"red90","className":"wmf-pattern-report-intro-donate"} -->
<div class="wp-block-group alignfull wmf-pattern-report-intro-donate has-red-90-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png?w=980" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-h2"} -->
<h3 class="wp-block-heading is-style-h2"><strong>Help us unlock the worlds knowledge.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>As a nonprofit, Wikimedia and our related free knowledge projects are powered primarily through donations.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"red","className":"is-style-secondary has-icon has-icon-lock-white"} -->
<div class="wp-block-button is-style-secondary has-icon has-icon-lock-white"><a class="wp-block-button__link has-red-background-color has-background wp-element-button" href="#">Donate now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"wmf-pattern-report-intro-contact","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wmf-pattern-report-intro-contact"><!-- wp:shiro/contact -->
<div class="wp-block-shiro-contact contact"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="contact__icon"><path fill="#000" fill-rule="evenodd" d="M14.5 5.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM2 16c0-2 2.083-5 8-5s8 3 8 5v3H2v-3z" clip-rule="evenodd"></path></svg><h3 class="contact__title">Contact a human</h3><div class="contact__description">Questions about the Wikimedia Foundation or our projects? Get in touch with our team.</div><h4 class="contact__social-title">Follow</h4><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link has-icon has-icon-social-facebook-blue"} -->
<div class="wp-block-button is-style-as-link has-icon has-icon-social-facebook-blue"><a class="wp-block-button__link wp-element-button" href="https://www.facebook.com/wikimediafoundation/" target="_blank" rel="noreferrer noopener">Facebook</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-as-link has-icon has-icon-social-twitter-blue"} -->
<div class="wp-block-button is-style-as-link has-icon has-icon-social-twitter-blue"><a class="wp-block-button__link wp-element-button" href="https://twitter.com/wikimedia" target="_blank" rel="noreferrer noopener">Twitter</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-as-link has-icon has-icon-social-instagram-blue"} -->
<div class="wp-block-button is-style-as-link has-icon has-icon-social-instagram-blue"><a class="wp-block-button__link wp-element-button" href="https://www.instagram.com/wikimediafoundation/" target="_blank" rel="noreferrer noopener">Instagram</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-as-link has-icon has-icon-social-linkedin-blue"} -->
<div class="wp-block-button is-style-as-link has-icon has-icon-social-linkedin-blue"><a class="wp-block-button__link wp-element-button" href="https://www.linkedin.com/company/wikimedia-foundation" target="_blank" rel="noreferrer noopener">LinkedIn</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:shiro/contact --></div>
<!-- /wp:group -->
CONTENT;
