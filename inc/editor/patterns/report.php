<?php
/**
 * Block pattern for the entire annual report.
 */

namespace WMF\Reports\Editor\Patterns\Report;

const NAME = 'wmf-reports/report';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","backgroundColor":"base90","className":"report-background","metadata":{"name":"Report Background"}} -->
<div class="wp-block-group alignfull report-background has-base-90-background-color has-background"><!-- wp:group {"tagName":"section","align":"full","backgroundColor":"wmf-report-blue","className":"wmf-pattern-reports-hero is-style-default","metadata":{"name":""}} -->
<section class="wp-block-group alignfull wmf-pattern-reports-hero is-style-default has-wmf-report-blue-background-color has-background"><!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__head","metadata":{"name":""}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__head"><!-- wp:image {"align":"full","id":74087,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"className":"wmf-pattern-reports-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-reports-hero__image"><img src="/wp-content/uploads/2023/12/Pranzo_al_volo.jpg?w=683" alt="" class="wp-image-74087"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__heading-container","metadata":{"name":""}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__heading-container"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-reports-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__heading"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-brightblue","textColor":"base90","className":"wmf-pattern-reports-hero__heading-pill"} -->
<div class="wp-block-group wmf-pattern-reports-hero__heading-pill has-base-90-color has-wmf-report-brightblue-background-color has-text-color has-background has-link-color"><!-- wp:heading {"className":"wmf-pattern-reports-hero__heading-label"} -->
<h2 class="wp-block-heading wmf-pattern-reports-hero__heading-label">Annual Report 2025</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><strong>The people behind a year of impact around the world</strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"wmf-report-blue","textColor":"base100","className":"wmf-pattern-reports-hero__content-background"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__content-background has-base-100-color has-wmf-report-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","className":"wmf-pattern-reports-hero__content"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__content"><!-- wp:wmf-reports/expandable {"showMoreText":"View more","showLessText":"View less","visibleAmount":150,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">This year’s Annual Report highlights the people who made sure that the Wikimedia projects made a big difference in the 2022-2023 fiscal year. If you’re a donor, that means you. If you’re a contributor to Wikipedia or any of the Wikimedia Foundation’s 12 other knowledge projects, that means you. Every year, millions and millions of people give selflessly to the ipsum duis consectetur aute eu duis cillum officia proident ea ut incididunt.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Commodo mollit incididunt amet ut id labore reprehenderit aliqua deserunt duis. Esse dolore aliquip est aute in esse ad amet ea pariatur sint. Excepteur esse esse ex ut. Id anim qui culpa irure cupidatat dolor ea eiusmod sint nisi. Eu consectetur esse id duis. Adipisicing ut tempor sint adipisicing excepteur.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="View more" data-showlesstext="View less">View more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2">Table of Contents</h2>
<!-- /wp:heading -->

<!-- wp:wmf-reports/table-of-contents {"waypoints":"[{\u0022tocLabel\u0022:\u0022Letter from the CEO\u0022,\u0022tocSlug\u0022:\u0022toc-letter-from-the-ceo\u0022},{\u0022tocLabel\u0022:\u0022By the Numbers\u0022,\u0022tocSlug\u0022:\u0022toc-by-the-numbers\u0022},{\u0022tocLabel\u0022:\u0022Stories\u0022,\u0022tocSlug\u0022:\u0022toc-stories\u0022},{\u0022tocLabel\u0022:\u0022Financial Statments\u0022,\u0022tocSlug\u0022:\u0022toc-financial-statments\u0022},{\u0022tocLabel\u0022:\u0022Leadership\u0022,\u0022tocSlug\u0022:\u0022toc-leadership\u0022},{\u0022tocLabel\u0022:\u0022Endowment and Legacy\u0022,\u0022tocSlug\u0022:\u0022toc-endowment-and-legacy\u0022},{\u0022tocLabel\u0022:\u0022Donors\u0022,\u0022tocSlug\u0022:\u0022toc-donors\u0022},{\u0022tocLabel\u0022:\u0022Previous Reports\u0022,\u0022tocSlug\u0022:\u0022toc-previous-reports\u0022}]"} -->
<ul class="wp-block-wmf-reports-table-of-contents"><li><a href="#toc-letter-from-the-ceo">Letter from the CEO</a></li><li><a href="#toc-by-the-numbers">By the Numbers</a></li><li><a href="#toc-stories">Stories</a></li><li><a href="#toc-financial-statments">Financial Statments</a></li><li><a href="#toc-leadership">Leadership</a></li><li><a href="#toc-endowment-and-legacy">Endowment and Legacy</a></li><li><a href="#toc-donors">Donors</a></li><li><a href="#toc-previous-reports">Previous Reports</a></li></ul>
<!-- /wp:wmf-reports/table-of-contents -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Download</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent"} -->
<div class="wp-block-button is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png?w=980" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-letter-from-the-ceo","includeInToC":true,"tocLabel":"Letter from the CEO","tocSlug":"toc-letter-from-the-ceo"} -->
<div class="wp-block-group alignwide wmf-pattern-letter-from-the-ceo"><!-- wp:heading {"lock":{"move":true,"remove":true}} -->
<h2 class="wp-block-heading">Letter from the CEO</h2>
<!-- /wp:heading -->

<!-- wp:quote {"lock":{"move":true,"remove":true}} -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
<p>“Wikipedia’s founding principles are as relevant as ever.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":69208,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="/wp-content/uploads/2022/10/1024px-Maryana_Iskander.jpg?w=1024" alt="Maryana Iskander" class="wp-image-69208" style="aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p><strong>Maryana Iskander</strong><br>CEO of the Wikimedia Foundation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"ceo-letter-content"} -->
<div class="wp-block-group ceo-letter-content"><!-- wp:wmf-reports/expandable {"visibleAmount":150,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
<p>Nostrud fugiat reprehenderit voluptate nisi id veniam occaecat. Ullamco amet commodo velit sint reprehenderit fugiat deserunt sit in pariatur esse veniam. Magna consequat anim fugiat labore mollit sit nisi.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Tempor amet do amet Lorem voluptate minim nulla dolor eiusmod veniam. Irure ex deserunt adipisicing voluptate eu id aute veniam. Nisi veniam mollit nulla esse nostrud laborum sit excepteur consectetur Lorem reprehenderit nulla officia Lorem. Lorem Lorem ex adipisicing est esse.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sint officia mollit non eu irure eiusmod nulla reprehenderit dolor adipisicing ipsum dolore deserunt. Aliquip et nostrud laborum quis mollit culpa laborum ex ipsum. Ea eiusmod sunt fugiat anim adipisicing officia laboris ipsum reprehenderit eu id. Eiusmod minim commodo in aute sunt ipsum pariatur mollit pariatur ipsum proident incididunt ipsum.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"green-30","textColor":"base100","className":"wmf-pattern-by-the-numbers","tocLabel":"","tocSlug":"toc-"} -->
<div class="wp-block-group alignfull wmf-pattern-by-the-numbers has-base-100-color has-green-30-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","includeInToC":true,"tocLabel":"By the Numbers","tocSlug":"toc-by-the-numbers"} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">By the Numbers</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>A good year in stats</strong></h3>
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

<!-- wp:group {"align":"full","className":"is-style-default"} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"align":"wide","includeInToC":true,"tocLabel":"Stories","tocSlug":"toc-stories"} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Stories</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Lorem ipsum dolor sit amet vestibulum urna odio turpis tempus dictumst turpis auctor est cursus.</strong></h3>
<!-- /wp:heading -->

<!-- wp:wmf-reports/expandable {"visibleAmount":150} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliqua tincidunt lobortis erat integer. Turpis sollicitudin phasellus rhoncus elementum laoreet est nunc. Nunc tellus facilisis mauris cursus imperdiet luctus aliquam elementum neque dictumst purus viverra mollis dapibus. Ultrices odio aliquet luctus dolore labore fusce mauris imperdiet faucibus ut tincidunt aliqua turpis. Vitae auctor praesent tempus aliqua sapien duis nullam.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliqua tincidunt lobortis erat integer. Turpis sollicitudin phasellus rhoncus elementum laoreet est nunc. Nunc tellus facilisis mauris cursus imperdiet luctus aliquam elementum neque dictumst purus viverra mollis dapibus. Ultrices odio aliquet luctus dolore labore fusce mauris imperdiet faucibus ut tincidunt aliqua turpis. Vitae auctor praesent tempus aliqua sapien duis nullam.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/stories -->
<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74792\u0022 style=\u0022width: 21px;\u0022 src=\u0022/wp-content/uploads/2024/03/Heart-icon.svg\u0022 alt=\u0022\u0022\u003eCategory 1","id":1712315582973} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-blue","textColor":"base100","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h2"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h2"><strong>Lorem ipsum dolor sit amet vulputate.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->

<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74792\u0022 style=\u0022width: 21px;\u0022 src=\u0022/wp-content/uploads/2024/03/Heart-icon.svg\u0022 alt=\u0022\u0022\u003eCategory 2","id":1712315586654} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-blue","textColor":"base100","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h2"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h2"><strong>Lorem ipsum dolor sit amet vulputate.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->

<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74792\u0022 style=\u0022width: 21px;\u0022 src=\u0022/wp-content/uploads/2024/03/Heart-icon.svg\u0022 alt=\u0022\u0022\u003eCategory 3","id":1712315588066} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-blue","textColor":"base100","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h2"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h2"><strong>Lorem ipsum dolor sit amet vulputate.</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->
<!-- /wp:wmf-reports/stories --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","id":74090,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image-vertical"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image-vertical"><img src="/wp-content/uploads/2023/12/Anjo_cacador.jpg?w=1024" alt="" class="wp-image-74090"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","backgroundColor":"base90"} -->
<div class="wp-block-group alignfull has-base-90-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">The Map</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Lorem ipsum dolor sit</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet blandit adipiscing pharetra eleifend. Leo quis lacus porttitor consectetur non leo eros sagittis duis luctus morbi. Libero sed habitasse diam nibh lacus phasellus labore congue. Senectus ac fermentum lacinia mi tristique aliqua semper quis. Morbi justo lectus platea euismod dolore erat nullam pulvinar.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/map {"mapStyle":"mapbox://styles/mattwatsonhm/clu09j0hw00tf01p7dpw5hyv7"} -->
<!-- wp:wmf-reports/marker {"id":1712315532947,"lat":52.40118959617423,"long":-3.6826590478945165} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-bright-yellow","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color">Lorem ipsum / Sit amet</p>
<!-- /wp:paragraph -->

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
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712315545884,"lat":40.49434579288612,"long":-6.9508353962416125} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-bright-yellow","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color">Lorem ipsum / Sit amet</p>
<!-- /wp:paragraph -->

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
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712315552199,"lat":29.157136125130965,"long":-82.55206183665828} -->
<!-- wp:group {"align":"full","backgroundColor":"wmf-report-bright-yellow","className":"wmf-pattern-reports-carousel-slide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color">Lorem ipsum / Sit amet</p>
<!-- /wp:paragraph -->

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
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}},"className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"wmf-pattern-overlay__category is-style-sans-p"} -->
<p class="wmf-pattern-overlay__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Lorem ipsum / Sit amet</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Lorem ipsum dolor sit amet imperdiet</strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-overlay__location is-style-sans-p"} -->
<p class="wmf-pattern-overlay__location is-style-sans-p"><em>Optional line for location</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet magna curabitur pretium. Nisi vel augue egestas sapien blandit eros maecenas netus dapibus. Sagittis mattis orci condimentum ornare maecenas iaculis sapien erat diam praesent egestas fermentum. Etiam et sollicitudin odio nisl consequat porttitor condimentum sapien feugiat libero dapibus dui risus. Sapien do a phasellus risus pretium tristique euismod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Turpis nulla eiusmod congue orci arcu elit nisi. Magna maecenas id proin lacus tempor vestibulum tincidunt nisi. Venenatis nunc vel mollis risus mi urna egestas ullamcorper aliquet vulputate. Ullamcorper dictumst vestibulum erat luctus urna adipiscing quisque ornare pharetra justo pellentesque quam. Labore velit tempus dolore eu imperdiet porttitor sodales orci.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"is-style-default"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet tristique lacus arcu justo curabitur ut mollis habitasse mollis orci. Maecenas lectus tellus suspendisse porttitor senectus lobortis cras netus sollicitudin hac magna. Id lacus turpis posuere donec proin tempor maecenas porttitor eu sollicitudin orci fringilla. Ac orci proin quisque leo vestibulum magna mollis sollicitudin pretium sed arcu lacus nullam adipiscing. Nunc nec aliquam netus consectetur id egestas eget volutpat ultrices do tristique dui iaculis vulputate.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-pullquote"} -->
<blockquote class="wp-block-quote is-style-pullquote"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2"><strong>Lorem ipsum dolor sit amet id cras tortor malesuada.</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Feugiat posuere convallis senectus faucibus sollicitudin ultricies curabitur sodales lectus eros volutpat nisi. Feugiat est pretium orci nunc sapien auctor enim mattis habitasse scelerisque diam ultricies tristique ut. Nisi nibh gravida cras aenean aliqua mollis at justo tellus lacinia dui. Congue tellus viverra adipiscing suspendisse dapibus sapien pharetra auctor laoreet morbi dictum phasellus leo quisque. Cras elementum ultricies fermentum nisi velit platea lacus suspendisse at tempus tincidunt erat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/marker -->
<!-- /wp:wmf-reports/map --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"wmf-pattern-financial-statements","includeInToC":true,"tocLabel":"Financial Statments","tocSlug":"toc-financial-statments"} -->
<div class="wp-block-group alignwide wmf-pattern-financial-statements"><!-- wp:heading -->
<h2 class="wp-block-heading">Financial Statements</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Lorem ipsum dolor sit</strong></h3>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet iaculis purus viverra velit hendrerit vestibulum pulvinar mauris. Lorem ipsum dolor sit amet iaculis purus viverra velit hendrerit vestibulum pulvinar mauris.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"wmf-pattern-financial-statements__score"} -->
<div class="wp-block-column wmf-pattern-financial-statements__score" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":74791,"width":"103px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="/wp-content/uploads/2024/03/Guidestar-Platinum-Transparence-2021.png?w=103" alt="" class="wp-image-74791" style="width:103px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":74790,"width":"109px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="/wp-content/uploads/2024/03/Four-Stars.png?w=87" alt="" class="wp-image-74790" style="width:109px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>98/100</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:vegalite-plugin/visualization {"chartId":"_f33u6vdddwv","json":{"\$schema":"https://vega.github.io/schema/vega-lite/v5.json","description":"Pie Chart with percentage_tooltip","width":272,"height":266,"transform":[{"calculate":"( datum.percent / 100 ) * 169095381","as":"spend"},{"calculate":"join( [ '$', round( datum.spend / 100000 ) / 10, 'M' ], '' )","as":"spendLabel"}],"data":{"values":[{"percent":43,"category":"Investment in Technology","label":"Technology"},{"percent":33,"category":"Support for Volunteers and Readers","label":"Support"},{"percent":11,"category":"Allocation to Fundraising Efforts","label":["Fundraising","Efforts"]},{"percent":13,"category":"General and Administrative Expenses","label":["General","Expenses"]}]},"layer":[{"mark":{"type":"arc","radius":{"expr":"select.category == datum.category ? 150 : 130"},"innerRadius":75},"params":[{"name":"select","select":{"type":"point","fields":["category","spend","label","spendLabel"]}}],"encoding":{"color":{"field":"category","type":"nominal","legend":null},"tooltip":[{"field":"spendLabel","title":"Amount","type":"nominal"},{"field":"category","title":"Category"}]}},{"mark":{"type":"text","fontWeight":800,"fontSize":16,"font":"sans-serif","color":"#fff","radius":{"expr":"select.category == datum.category ? 110 : 100"}},"encoding":{"text":{"value":{"expr":"select.category == datum.category ? join( [ datum.percent, '%' ], '' ) : ''"},"type":"quantitative"}}},{"mark":{"type":"text","color":"#000","dy":-10,"fontWeight":800,"fontSize":20,"font":"sans-serif","text":{"expr":"select.category == datum.category ? datum.spendLabel : '' "}}},{"mark":{"type":"text","color":"#000","fontSize":14,"fontWeight":300,"dy":10,"font":"sans-serif","text":{"expr":"select.label ? select.label : ''"}}},{"mark":{"type":"text","color":"#000","dy":-10,"fontWeight":800,"fontSize":20,"font":"sans-serif","text":{"expr":"select.category ? '' : '$169M'"}}},{"mark":{"type":"text","color":"#000","fontSize":14,"fontWeight":300,"dy":10,"font":"sans-serif","text":{"expr":"select.category ? '' : 'Total Funding'"}}}],"encoding":{"order":{"field":"spend","sort":"ascending"},"theta":{"field":"spend","type":"quantitative","stack":true}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shiro/accordion {"className":"wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="accordion-wrapper wp-block-shiro-accordion wp-block-wmf-reports-accordion--alt undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color">00%</mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color">00%</mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color">00%</mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Lorem ipsum dolor sit amet diam aliquam fusce dictumst <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-10-color">00%</mark></h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet aliquam tempus posuere turpis in fusce consequat. Rhoncus duis aliquet at turpis velit orci adipiscing mollis do fermentum. Blandit eros pretium morbi urna malesuada molestie sed pharetra gravida mattis. Ac malesuada odio urna sodales porttitor fusce cras mollis aliquet feugiat aliquam. Ullamcorper volutpat euismod cursus consectetur erat sagittis dapibus aenean turpis nisl habitasse.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:shiro/accordion {"align":"center","className":"wp-block-wmf-reports-accordion"} -->
<div class="accordion-wrapper wp-block-shiro-accordion aligncenter wp-block-wmf-reports-accordion undefined"><!-- wp:shiro/accordion-item {"align":"full"} -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Balance sheet (audited)</h3></button><div class="accordion-item__content"><!-- wp:heading {"className":"is-style-h6"} -->
<h2 class="wp-block-heading is-style-h6">ASSETS</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Current assets</th><th class="has-text-align-right" data-align="right">USD</th></tr></thead><tbody><tr><td>Cash and cash equivalents</td><td class="has-text-align-right" data-align="right">50,939,835</td></tr><tr><td>Current portion of contributions receivable</td><td class="has-text-align-right" data-align="right">700,000</td></tr><tr><td>Short-term investments</td><td class="has-text-align-right" data-align="right">141,953,790</td></tr><tr><td>Prepaid expenses and other current assets</td><td class="has-text-align-right" data-align="right">3,878,743</td></tr><tr><td><strong>Total current assets</strong></td><td class="has-text-align-right" data-align="right"><strong>208,678,345</strong></td></tr><tr><td>Restricted cash</td><td class="has-text-align-right" data-align="right">872,229</td></tr><tr><td>Noncurrent portion of contributions receivable</td><td class="has-text-align-right" data-align="right">690,399</td></tr><tr><td>Property, plant, and equipment, net</td><td class="has-text-align-right" data-align="right">9,798,002</td></tr><tr><td>Long-term investment</td><td class="has-text-align-right" data-align="right">20,196,126</td></tr><tr><td><strong>Total assets</strong></td><td class="has-text-align-right" data-align="right"><strong>240,235,101</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">LIABILITIES AND NET ASSETS</h6>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Current liabilities</th><th class="has-text-align-right" data-align="right"></th></tr></thead><tbody><tr><td>Accounts payable</td><td class="has-text-align-right" data-align="right">2,913,957</td></tr><tr><td>Accrued expenses</td><td class="has-text-align-right" data-align="right">4,719,375</td></tr><tr><td>Other liabilities</td><td class="has-text-align-right" data-align="right">1,424,233</td></tr><tr><td><strong>Total current liabilities</strong></td><td class="has-text-align-right" data-align="right"><strong>9,057,565</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Net assets</th><th class="has-text-align-right" data-align="right"></th></tr></thead><tbody><tr><td>Unrestricted</td><td class="has-text-align-right" data-align="right">229,294,335</td></tr><tr><td>Temporarily restricted</td><td class="has-text-align-right" data-align="right">1,883,201</td></tr><tr><td><strong>Total net assets</strong></td><td class="has-text-align-right" data-align="right"><strong>231,177,536</strong></td></tr><tr><td><strong>Total liabilities and net assets</strong></td><td class="has-text-align-right" data-align="right"><strong>240,235,101</strong></td></tr></tbody></table></figure>
<!-- /wp:table --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Statement of activities (audited)</h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Enter content here...</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png?w=980" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"wmf-pattern-reports-leadership","includeInToC":true,"tocLabel":"Leadership","tocSlug":"toc-leadership"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-leadership"><!-- wp:heading -->
<h2 class="wp-block-heading">Leadership</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>A constellation of bright minds</strong></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3"><strong>Board of trustees</strong></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"wmf-pattern-reports-leadership__list","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-reports-leadership__list"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3"><strong>Executive team</strong></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"wmf-pattern-reports-leadership__list","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-reports-leadership__list"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74197,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-overlay__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-overlay__image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png" alt="" class="wp-image-74197" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue","className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Lorem ipsum dolor sit amet</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet pretium</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet porta pulvinar dictumst dapibus leo fusce scelerisque suspendisse. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dictumst vitae tincidunt magna justo pretium praesent lacus neque molestie convallis suspendisse blandit. Platea donec eleifend turpis hendrerit pharetra platea eros sollicitudin justo imperdiet fames nulla tempus consequat. Aliquam elementum semper adipiscing sagittis habitasse risus imperdiet et donec do justo. Vivamus dapibus auctor nulla lectus cursus volutpat semper congue.</p>
<!-- /wp:paragraph -->

<!-- wp:shiro/share-article /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Lorem ipsum dolor</strong> <br>Sit amet iaculis</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png?w=980" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

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

<!-- wp:group {"align":"wide","backgroundColor":"base80","className":"wp-block-wmf-reports-donate"} -->
<div class="wp-block-group alignwide wp-block-wmf-reports-donate has-base-80-background-color has-background"><!-- wp:heading {"level":3,"className":"is-style-default"} -->
<h3 class="wp-block-heading is-style-default"><strong>Help Ensure Wikipedia's Future</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet platea erat habitasse sapien venenatis iaculis labore elit. Porttitor gravida magna elementum labore justo odio eiusmod quam mollis curabitur tortor nulla sodales nec. Venenatis sagittis posuere dapibus interdum mi scelerisque eget orci labore mattis blandit auctor. Imperdiet urna vivamus proin nulla mattis integer fusce. Hac dui eleifend quisque tellus lacus diam eu tellus vel consequat faucibus etiam tempus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-open is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-open is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="#" target="_blank" rel="noreferrer noopener">Learn More</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary has-icon has-icon-heart-pink"} -->
<div class="wp-block-button is-style-secondary has-icon has-icon-heart-pink"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener">Give Today</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"wmf-pattern-reports-donors","includeInToC":true,"tocLabel":"Donors","tocSlug":"toc-donors"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-donors"><!-- wp:heading -->
<h2 class="wp-block-heading">Donors</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:wmf-reports/thank-you /-->

<!-- wp:image {"id":74663,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2024/03/Heart.png?w=144" alt="" class="wp-image-74663"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Consectetur quis et Lorem ex commodo sint. Anim id esse voluptate nisi qui adipisicing esse. Reprehenderit velit consectetur sit consequat quis incididunt reprehenderit est cillum nostrud. Lorem est officia laboris et et aute excepteur proident qui do quis ullamco et. Culpa incididunt veniam sint commodo nisi et labore eiusmod commodo. Incididunt adipisicing tempor mollit proident do anim incididunt non. In excepteur ad cupidatat dolor proident non.</p>
<!-- /wp:paragraph -->

<!-- wp:shiro/accordion {"className":"wp-block-wmf-reports-accordion"} -->
<div class="accordion-wrapper wp-block-shiro-accordion wp-block-wmf-reports-accordion undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Major benefactors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-blue-color">$50,000+</mark></h3></button><div class="accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Ada Carr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sebastien Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Azaan Sharp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mckenzie Zimmerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ashley Newton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kasey Cameron</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Miriam Odonnell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ned Hodges</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nadine Faulkner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isra Becker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fintan Morse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Summers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anjali Jensen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harmony Holt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aiden Salazar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn Juarez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flora Barlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richie Mullen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Axel Rich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kajus Santos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dante Guzman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hafsah Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isra Becker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fintan Morse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Summers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anjali Jensen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harmony Holt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aiden Salazar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn Juarez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flora Barlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richie Mullen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Axel Rich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kajus Santos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dante Guzman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hafsah Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amber Park</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jenny Aguirre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gordon Gallagher</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tasnim Sears</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sam Mullins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ayden Moss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robin Bridges</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniyal Watkins</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Patrons<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">$50,000+</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Leading donors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-purple-color">$5,000 - $14,999</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Sustaining donors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-green-color">$1,000 - $4,999</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","id":74197,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png?w=980" alt="" class="wp-image-74197"/><figcaption class="wp-element-caption">Lorem ipsum dolor sit amet at cras ac massa erat hac mattis dolore.<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"wmf-pattern-wrapped"} -->
<div class="wp-block-group alignwide wmf-pattern-wrapped"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2"><strong>And that's 2023 Wrapped</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet condimentum phasellus ut praesent nisi.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Download</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent"} -->
<div class="wp-block-button is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share TODO</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

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
<figure class="wp-block-image size-large is-resized wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2023/12/Ingushetia_Russia_Armkhi_Ingush_tower.jpg?w=1024" alt="" class="wp-image-74154" style="object-fit:cover;width:240px;height:300px"/></figure>
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
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2023/12/Rabock_i_narbild.jpg" alt="" class="wp-image-74079" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10","className":"wp-block-wmf-reports-report__date"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="#"><strong>The people behind a year of impact around the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->
<!-- /wp:wmf-reports/report-archive --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
