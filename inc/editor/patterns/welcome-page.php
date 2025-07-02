<?php
/**
 * Block pattern for the welcome page.
 */

namespace WMF\Reports\Editor\Patterns\WelcomePage;

const NAME = 'wmf-reports/welcome-page';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","className":"wmf-pattern-report-welcome","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-report-welcome"><!-- wp:group {"tagName":"section","align":"full","className":"wmf-pattern-report-into-hero is-style-default has-link-color","backgroundColor":"wmf-report-blue","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wmf-pattern-report-into-hero is-style-default has-link-color has-wmf-report-blue-background-color has-background"><!-- wp:image {"id":77135,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"align":"full","className":"wmf-pattern-report-into-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-report-into-hero__image"><img src="/wp-content/uploads/2025/04/wiki_hero.svg" alt="" class="wp-image-77135" /></figure>
<!-- /wp:image -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-report-into-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-report-into-hero__heading"><!-- wp:group {"className":"wmf-pattern-reports-hero__heading-pill has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-bright-green","textColor":"base90"} -->
<div class="wp-block-group wmf-pattern-reports-hero__heading-pill has-link-color has-base-90-color has-wmf-report-bright-green-background-color has-text-color has-background"><!-- wp:heading {"level":3,"className":"wmf-pattern-report-into-hero__heading-label is-style-report-section-heading has-wmf-logo"} -->
<h3 class="wp-block-heading wmf-pattern-report-into-hero__heading-label is-style-report-section-heading has-wmf-logo"><strong>Annual Report 2023-2024</strong></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><strong>The internet we were promised</strong></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","className":"is-style-transparent","fontSize":"small"} -->
<div class="wp-block-button is-style-transparent"><a class="wp-block-button__link has-base-background-color has-background has-small-font-size has-custom-font-size wp-element-button" href="/annualreports/2023-2024-annual-report/">Open the latest report</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-report-intro-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-report-intro-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-h2"} -->
<h3 class="wp-block-heading is-style-h2">All reports</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Access to all reports of the Wikimedia Foundation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%","className":"wmf-pattern-report-intro-columns__select"} -->
<div class="wp-block-column wmf-pattern-report-intro-columns__select" style="flex-basis:33%"><!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
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
<p class="wmf-pattern-previous-report__duration"><strong>2023-2024</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":77137,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2025/04/The-internet-we-were-promised-thumbnail.png" alt="" class="wp-image-77137" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><strong><a href="/annualreports/2023-2024-annual-report/" target="_blank" rel="noreferrer noopener">The internet we were promised</a></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2023 to June 30, 2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2022-2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74600,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/PrenticeHandMural_2f0333.jpg" alt="" class="wp-image-74600" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><strong><a href="/about/annualreport/2022-2023-annual-report/" target="_blank" rel="noreferrer noopener">The humans behind a year of impact around the world</a></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2022 to June 30, 2023</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2021-2022</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74601,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/WikiCon_Brasil_2022_-_Fotografia_em_grupo_24.jpg" alt="" class="wp-image-74601" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="/about/annualreport/2022-annual-report/" target="_blank" rel="noreferrer noopener"><strong>Pillars that inspire </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2021 to June 30, 2022</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2020-2021</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":66777,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2022/04/annualreport-cover.jpg" alt="" class="wp-image-66777" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="/about/annualreport/2021-annual-report/" target="_blank" rel="noreferrer noopener"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2020 to June 30, 2021</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2019-2020</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74602,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/wiki-w-2020-new.jpg" alt="" class="wp-image-74602" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><strong><a href="/about/annualreport/2020-annual-report/" target="_blank" rel="noreferrer noopener">20 years of Wikipedia</a> </strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2019 to June 30, 2020</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2018-2019</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74603,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Wikimedians-world.jpg" alt="" class="wp-image-74603" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="/about/annualreport/2019-annual-report/" target="_blank" rel="noreferrer noopener"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2018 to June 30, 2019</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2017-2018</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74604,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Jamie_Tubers_at_Wikimedia_Conference_2018.jpg" alt="" class="wp-image-74604" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="/about/2018-annual-report/" target="_blank" rel="noreferrer noopener"><strong>Knowledge is progress </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2017 to June 30, 2018</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2016-2017</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74605,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/ISS-52_Aurora_australis_above_Antarctica.jpg" alt="" class="wp-image-74605" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><strong><a href="https://annual.wikimedia.org/2017/" target="_blank" rel="noreferrer noopener">Knowledge belongs to all of us </a>  </strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2016 to June 30, 2017</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2015-2016</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74606,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Wikimedia_Foundation_Annual_Report_2016_books.jpg" alt="" class="wp-image-74606" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://annual.wikimedia.org/2016/" target="_blank" rel="noreferrer noopener"><strong>Facts matter </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2015 to June 30, 2016</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2014-2015</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74607,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Young_girls_reading_-_Government_primary_school_in_Amman_Jordan.jpg" alt="" class="wp-image-74607" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://annual.wikimedia.org/2015/" target="_blank" rel="noreferrer noopener"><strong>Knowledge is joy </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2014 to June 30, 2015</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2013-2014</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74608,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Sinenjongo_graduation_matric_2013-10-12_0381.jpg" alt="" class="wp-image-74608" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://annual.wikimedia.org/2014/" target="_blank" rel="noreferrer noopener"><strong>Knowledge is a foundation </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2013 to June 30, 2014</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2012-2013</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74609,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Wmf-AR12_cover2_300dpi.png" alt="" class="wp-image-74609" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2012-13" target="_blank" rel="noreferrer noopener"><strong>Ten years of sharing and learning </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2012 to June 30, 2013</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2011-2012</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74611,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/WMF_Annual_Report_2011–12_EN_cover_rgb_300ppi.png" alt="" class="wp-image-74611" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2011-12" target="_blank" rel="noreferrer noopener"><strong>The voice of the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2011 to June 30, 2012</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2010-2011</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74612,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Page1-250px-WMF_AR11_SHIP_spreads_15dec11_72dpi.png" alt="" class="wp-image-74612" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2010-11" target="_blank" rel="noreferrer noopener"><strong>The way the world tells its story </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2010 to June 30, 2011</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2009-2010</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74613,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/WMF_Annual_Report_2009_2010_Cover_image.png" alt="" class="wp-image-74613" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://upload.wikimedia.org/wikipedia/commons/9/9f/AR_web_all-spreads_24mar11_72_FINAL.pdf"><strong>Imagine a world in which... </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2009 to June 30, 2010</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"wmf-pattern-previous-report-columns"} -->
<div class="wp-block-columns alignwide wmf-pattern-previous-report-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2008-2009</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74614,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Thumbnail20082009WMFAR.jpg" alt="" class="wp-image-74614" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="#"><strong>The people behind a year of impact around the world </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2008 to June 30, 2009</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wmf-pattern-previous-report"} -->
<div class="wp-block-group wmf-pattern-previous-report"><!-- wp:paragraph {"className":"wmf-pattern-previous-report__duration"} -->
<p class="wmf-pattern-previous-report__duration"><strong>2007-2008</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74615,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-previous-report__image"} -->
<figure class="wp-block-image size-full wmf-pattern-previous-report__image"><img src="/wp-content/uploads/2024/04/Wikimedia_Foundation_Annual_Report_2007-2008_cover.jpg" alt="" class="wp-image-74615" style="aspect-ratio:4/3;object-fit:cover" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"className":"wmf-pattern-previous-report__link"} -->
<h4 class="wp-block-heading wmf-pattern-previous-report__link"><a href="https://upload.wikimedia.org/wikipedia/commons/2/26/WMF_20072008_Annual_report._high_resolution.pdf" target="_blank" rel="noreferrer noopener"><strong>Wikimedia Foundation Annual Report </strong></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-previous-report__date"} -->
<p class="wmf-pattern-previous-report__date">July 1, 2007 to June 30, 2008</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"wmf-pattern-report-intro-donate","backgroundColor":"red90","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-report-intro-donate has-red-90-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":282,"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2018/06/ArtAndFeminism_2017_Livrustkammaren_06-e1533254907593.jpg?w=1024" alt="Wikipedia edit-a-thon Art+Feminism at the Royal Armoury in Stockholm" class="wp-image-282" style="aspect-ratio:4/3;object-fit:cover" /></figure>
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
CONTENT;
