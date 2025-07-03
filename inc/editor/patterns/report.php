<?php
/**
 * Block pattern for the entire annual report.
 */

namespace WMF\Reports\Editor\Patterns\Report;

const NAME = 'wmf-reports/report';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"Report Background"},"align":"full","className":"report-background","backgroundColor":"base90"} -->
<div class="wp-block-group alignfull report-background has-base-90-background-color has-background"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","className":"wmf-pattern-reports-hero is-style-default","backgroundColor":"wmf-report-blue"} -->
<section class="wp-block-group alignfull wmf-pattern-reports-hero is-style-default has-wmf-report-blue-background-color has-background"><!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__head"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__head"><!-- wp:image {"id":74502,"sizeSlug":"large","linkDestination":"none","lock":{"move":false,"remove":false},"align":"full","className":"wmf-pattern-reports-hero__image"} -->
<figure class="wp-block-image alignfull size-large wmf-pattern-reports-hero__image"><img src="/wp-content/uploads/2024/04/PrenticeHandMural.jpg?w=1024" alt="" class="wp-image-74502"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","className":"wmf-pattern-reports-hero__heading-container"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__heading-container"><!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-reports-hero__heading"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__heading"><!-- wp:group {"className":"wmf-pattern-reports-hero__heading-pill set-overlapping-callout-height","style":{"elements":{"link":{"color":{"text":"var:preset|color|base90"}}}},"backgroundColor":"wmf-report-brightblue","textColor":"base90"} -->
<div class="wp-block-group wmf-pattern-reports-hero__heading-pill set-overlapping-callout-height has-base-90-color has-wmf-report-brightblue-background-color has-text-color has-background has-link-color"><!-- wp:heading {"textAlign":"center","className":"has-wmf-logo is-style-report-section-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-wmf-logo is-style-report-section-heading">Annual Report 2022-2023</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><strong>The humans behind a year of impact around the world</strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"align":"full","className":"wmf-pattern-reports-hero__content-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"wmf-report-blue","textColor":"base100"} -->
<div class="wp-block-group alignfull wmf-pattern-reports-hero__content-background has-base-100-color has-wmf-report-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","className":"wmf-pattern-reports-hero__content"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-hero__content"><!-- wp:group {"className":"wp-block-wmf-reports-expandable","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-block-wmf-reports-expandable"><!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Explore the Wikimedia Foundation’s 2022/23 Annual Report, where we spotlight the extraordinary stories of individuals adding knowledge to Wikimedia projects and making a difference across the globe. Join us in celebrating their contributions and the transformative impact of our collective efforts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Table of Contents"},"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"className":"is-style-align-buttons-bottom"} -->
<div class="wp-block-columns is-style-align-buttons-bottom"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2"><strong>Table of contents</strong></h2>
<!-- /wp:heading -->

<!-- wp:wmf-reports/table-of-contents {"highlightColor":"wmf-report-blue","waypoints":"[{\u0022tocLabel\u0022:\u0022Message from the CEO\u0022,\u0022tocSlug\u0022:\u0022toc-message-from-the-ceo\u0022},{\u0022tocLabel\u0022:\u0022By the Numbers\u0022,\u0022tocSlug\u0022:\u0022toc-by-the-numbers\u0022},{\u0022tocLabel\u0022:\u0022Stories\u0022,\u0022tocSlug\u0022:\u0022toc-stories\u0022},{\u0022tocLabel\u0022:\u0022Wikimedia Community\u0022,\u0022tocSlug\u0022:\u0022toc-wikimedia-community\u0022},{\u0022tocLabel\u0022:\u0022Financial Accountability\u0022,\u0022tocSlug\u0022:\u0022toc-financial-accountability\u0022},{\u0022tocLabel\u0022:\u0022Leadership\u0022,\u0022tocSlug\u0022:\u0022toc-leadership\u0022},{\u0022tocLabel\u0022:\u0022Donors\u0022,\u0022tocSlug\u0022:\u0022toc-donors\u0022},{\u0022tocLabel\u0022:\u0022Wikimedia Endowment\u0022,\u0022tocSlug\u0022:\u0022toc-wikimedia-endowment\u0022},{\u0022tocLabel\u0022:\u0022Previous Reports\u0022,\u0022tocSlug\u0022:\u0022toc-previous-reports\u0022}]"} -->
<ul class="wp-block-wmf-reports-table-of-contents"><li><a href="#toc-message-from-the-ceo">Message from the CEO</a></li><li><a href="#toc-by-the-numbers">By the Numbers</a></li><li><a href="#toc-stories">Stories</a></li><li><a href="#toc-wikimedia-community">Wikimedia Community</a></li><li><a href="#toc-financial-accountability">Financial Accountability</a></li><li><a href="#toc-leadership">Leadership</a></li><li><a href="#toc-donors">Donors</a></li><li><a href="#toc-wikimedia-endowment">Wikimedia Endowment</a></li><li><a href="#toc-previous-reports">Previous Reports</a></li></ul>
<!-- /wp:wmf-reports/table-of-contents --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="/wp-content/uploads/2024/04/WMF-Annual-Report-22-23.pdf" target="_blank" rel="noreferrer noopener">Download PDF</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent is-share-button"} -->
<div class="wp-block-button is-style-transparent is-share-button"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:image {"id":74504,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/2560px-Wikimedia_Foundation_All_Hands_2018_-_Myleen_Hollero_59.jpg?w=1024" alt="" class="wp-image-74504"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Wikimedia_Foundation_All_Hands_2018_-_Myleen_Hollero_59.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Myleen Hollero / Wikimedia Foundation, CC BY-SA 3.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"metadata":{"name":"Message from CEO"},"align":"wide","className":"wmf-pattern-letter-from-the-ceo","includeInToC":true,"tocLabel":"Message from the CEO","tocSlug":"toc-message-from-the-ceo"} -->
<div class="wp-block-group alignwide wmf-pattern-letter-from-the-ceo"><!-- wp:heading {"lock":{"move":true,"remove":true},"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Message from the CEO</h2>
<!-- /wp:heading -->

<!-- wp:quote {"lock":{"move":true,"remove":true}} -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
<p>“Behind every Wikipedia article, every edit, and every fact is a human story of dedication, passion, and generosity.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":74507,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="/wp-content/uploads/2024/04/1024px-Maryana_Iskander.jpg?w=796" alt="" class="wp-image-74507" style="aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p><strong>Maryana Iskander</strong><br>CEO of the Wikimedia Foundation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"ceo-letter-content"} -->
<div class="wp-block-group ceo-letter-content"><!-- wp:wmf-reports/expandable {"visibleAmount":150,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable" style="--expandable-fade-color:var(--wp--preset--color--#fff)"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph -->
<p>This year, the Wikimedia Foundation celebrated the idea that “Knowledge is Human,” from recognizing the hundreds of thousands of humans who contribute free and reliable knowledge, to highlighting the essential role that humans will always play in our approach to artificial intelligence. Behind every Wikipedia article, every edit, and every fact is a human story of dedication, passion, and generosity.<br><br>This Annual Report for our 2022-2023 fiscal year spotlights the countless individuals who work tirelessly behind the scenes to make Wikimedia projects the success that they are today – at a time when the world needs access to reliable information online more than ever before.&nbsp;<br><br>You will read about students and teachers learning about the value of Wikipedia in the classroom, to medical professionals committed to producing health and science articles that are accurate and up to date. Our donors are critical to preserving the mission of Wikipedia, and our staff remain fiercely dedicated to supporting an open platform that thrives thanks to volunteer contributors across the globe. Each story in this year's Annual Report is a window into the human effort behind a Wikipedia article and its impact.&nbsp;<br><br>As you read this report, I hope you will join me in celebrating this generous community of humans. At a time when technology is changing so rapidly around us, Wikipedia is becoming an even more valuable source of trusted information to everyone, everywhere. For free.&nbsp;<br><br>I am more inspired than ever before that together we can secure the future of Wikipedia for generations to come.&nbsp;<br><br>Thank you for your unwavering support.<br>Maryana<br><br><em>Maryana Iskander&nbsp;<br>Wikimedia Foundation CEO</em></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74509,"width":"976px","height":"auto","sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-resized is-style-report-image"><img src="/wp-content/uploads/2024/04/WikiIndaba_2022_-_Day_1_-_by_Dyolf77_-_dsc00653.jpg?w=1024" alt="" class="wp-image-74509" style="width:976px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:WikiIndaba_2022_-_Day_1_-_by_Dyolf77_-_dsc00653.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Habib M’henni, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"By the Numbers"},"align":"full","className":"wmf-pattern-by-the-numbers","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"green-30","textColor":"base100","includeInToC":true,"tocLabel":"By the Numbers","tocSlug":"toc-by-the-numbers"} -->
<div class="wp-block-group alignfull wmf-pattern-by-the-numbers has-base-100-color has-green-30-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">By the Numbers</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-default","fontSize":"xlarge"} -->
<h3 class="wp-block-heading is-style-default has-xlarge-font-size"><strong>Zooming Out</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A snapshot of the Wikimedia Foundation’s impact in figures.</p>
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
<p class="wmf-pattern-views__text has-small-font-size"><em>(that’s about double the world’s population!)</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Stories"},"align":"full","className":"is-style-default","includeInToC":true,"tocLabel":"Stories","tocSlug":"toc-stories"} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"align":"wide","tocLabel":"","tocSlug":""} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Stories</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-h2","fontSize":"xlarge"} -->
<h3 class="wp-block-heading is-style-h2 has-xlarge-font-size"><strong>A global community of people help the Wikimedia projects to thrive</strong></h3>
<!-- /wp:heading -->

<!-- wp:wmf-reports/expandable {"visibleAmount":150} -->
<div class="wp-block-wmf-reports-expandable" style="--expandable-fade-color:var(--wp--preset--color--#fff)"><div class="expandable-content" data-visible-amount="150" data-visible-unit="px"><!-- wp:paragraph -->
<p>For more than two decades, the process of freely creating knowledge — of sharing it and refining it over time, in the open, and with the help of hundreds of thousands of volunteers — has fundamentally shaped Wikipedia. Wikipedia contains trustworthy, reliably sourced knowledge <em>because</em> it’s created, debated, and curated by people. It’s also grounded in an open, noncommercial model, which means that Wikipedia and all Wikimedia projects are free to access and share, and always will be. In an internet flooded with machine-generated material the human-led content on Wikipedia has become <em>even more</em> valuable.<br><br>That value was apparent throughout the Wikimedia Foundation's 2022-2023 fiscal year, when a global community of people — editors, writers, technical volunteers, and staff — made sure the Wikimedia projects thrived. They added new knowledge to the websites. They kept the websites operating at the highest levels. And they helped people to gain new knowledge, one edit at a time.<br><br>In this Annual Report, you'll meet doctors from across the world who made sure that Wikipedia’s thousands of medical articles were accurate, current, and correctly sourced. You'll meet teachers and students who use Wikipedia to learn and explore our world. You'll meet two donors who believe that Wikipedia’s ability to provide quickly accessible knowledge is changing the world for the better. And you'll meet engineers at the Wikimedia Foundation who improved the platform’s technical infrastructure to make it easier for <em>everyone</em> to access the Wikimedia projects from anywhere in the world.<br><br>We look back on this past year with inspiration and a sense of accomplishment. We think you will, too.&nbsp; Thank you for being an essential part of our mission to bring trustworthy knowledge to everyone, everywhere.</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/stories -->
<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74513\u0022 style=\u0022width: 21px;\u0022 src=\u0022/wp-content/uploads/2024/04/Pencil-Icon.svg\u0022 alt=\u0022\u0022\u003e\u003cstrong\u003eWikimedia Editors\u003c/strong\u003e","id":1712315582973} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-blue","textColor":"base100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74511,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Netha_Hussain-070A3987.jpg" alt="" class="wp-image-74511" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Wikipedia's medical article editors: Voices from the frontlines</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">In the vast ocean of knowledge that is Wikipedia, there are unsung heroes writing and refining the medical articles that millions rely on for crucial health information.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong><strong>Wikipedia's medical article editors: Voices from the frontlines</strong></strong></h4>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74511,"width":"889px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Netha_Hussain-070A3987.jpg" alt="" class="wp-image-74511" style="width:889px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Netha_Hussain-070A3987.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Bijay Chaurasia, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In the vast ocean of knowledge that is Wikipedia, there are unsung heroes writing and refining the medical articles that millions rely on for crucial health information. Wikipedia has <a href="https://mdwiki.org/wiki/WikiProjectMed:WikiProject_Medicine/Stats/Number_of_articles_by_language_2024" target="_blank" rel="noreferrer noopener">almost 350,000 medical articles</a>, which are available across Wikipedia’s hundreds of language editions, and they are accessed over 6 billion times a year. Dedicated contributors, including esteemed medical professionals like Dr. Netha Hussain, Dr. Gwinyai Masukume, Dr. Mikael Häggström, and Dr. James Heilman, are the backbone of Wikipedia's comprehensive coverage of medical topics.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><a href="https://en.wikipedia.org/wiki/Netha_Hussain" target="_blank" rel="noreferrer noopener">Dr. Netha Hussain</a></strong> began her journey with Wikipedia while still a medical student. Now, after 14 years of contributions and more than 11,600 edits, Dr. Hussain's articles, including recent ones like <a href="https://en.wikipedia.org/wiki/Cerebroplacental_ratio" target="_blank" rel="noreferrer noopener">Cerebroplacental ratio</a> and <a href="https://en.wikipedia.org/wiki/Acorn_cyst_sign" target="_blank" rel="noreferrer noopener">acorn cyst sign</a>, often focus on women's health. Her motivation stems from the belief that "it’s important to offer free, reliable, and updated information related to women’s health in multiple languages. In that way, it would be possible to dispel misinformation and bring more awareness related to women’s health on the internet.”</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>I<strong>t’s important to offer free, reliable, and updated information related to women’s health in multiple languages</strong>.</strong>"</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p><strong>Dr. Mikael Häggström</strong>, a resident physician in pathology who has made more than 50,000 edits on Wikipedia’s English-language edition over more than 18 years, emphasizes how Wikipedia became an indispensable resource during his medical studies. His extensive contributions, notably to articles like "<a href="https://en.wikipedia.org/wiki/Reference_ranges_for_blood_tests" target="_blank" rel="noreferrer noopener">Reference ranges for blood tests</a>,” have made a profound impact with thousands of pageviews a month. He shares, “I needed to look things up, (and) I soon discovered that Wikipedia was generally the site that gave me the fastest answer. Whenever the answer wasn’t there, I knew that if I added that information, it would be there the next time I needed to look it up. Thus, Wikipedia basically became my notebook throughout my studies, and the notes are not just easily accessible, but also reviewed and updated by others over time.”</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>Wikipedia basically became my notebook throughout my studies, and the notes are not just easily accessible, but also reviewed and updated by others over time.</strong>"</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p><strong><a href="https://en.wikipedia.org/wiki/James_Heilman" target="_blank" rel="noreferrer noopener">Dr. James Heilman</a></strong>, a former trustee of the Wikimedia Foundation, highlights the global reach and influence of Wikipedia's medical content. Dr. Heilman is an active member of <a href="https://en.wikipedia.org/wiki/Wikipedia:WikiProject_Medicine" target="_blank" rel="noreferrer noopener">WikiProject Medicine</a>, a group of global medical experts who ensure that Wikipedia's medical articles remain accurate and accessible across languages. In a paper that Dr. Heilman <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4376174/" target="_blank" rel="noreferrer noopener">co-wrote and published</a> in the March 2015 edition of the <em>Journal of Medical Internet Research</em>, he noted that, "Third-party analytics suggests Wikipedia is the most viewed medical resource globally."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Dr. Gwinyai Masukume </strong>is a medical doctor and public health researcher originally from Zimbabwe who now lives in Ireland. He works at a university and has contributed to Wikipedia's medical articles for 20 years. “What motivates me," says Dr. Masukume, “is just the sense of giving back. I’ve benefited from Wikipedia when I’ve looked up general information and even medical information.”<strong>&nbsp;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74520,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/DC_120916_HEAD_SHOTS_11.jpg?w=1024" alt="" class="wp-image-74520"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:DC_120916_HEAD_SHOTS_11.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Diane Cusack Photography, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The impact of these volunteers’ efforts is highlighted in times of crisis. During critical health emergencies, Wikipedia's medical articles became important for communities, supplementing the offerings from official health organizations. For example, during the <a href="https://en.wikipedia.org/wiki/Ebola" target="_blank" rel="noreferrer noopener">Ebola</a> crisis in 2014, Wikipedia’s Ebola articles were widely read in Liberia, Sierra Leone, and Guinea — three countries at the epicenter of the crisis. For many readers, Wikipedia provides easy access to information, local expertise, timely updates, and content in local languages to overcome language barriers.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Moreover, Wikipedia's medical information has impacted individuals facing personal health challenges. “The world uses Wikipedia for health information,” <a href="https://www.osmosis.org/blog/2023/07/17/how-supporting-wikipedia-editors-is-helping-improve-trust-in-science" target="_blank" rel="noreferrer noopener">says Amin Azzam</a>, Health Sciences Clinical Professor at the UCSF School of Medicine and also Associate Clinical Professor at the University of California Berkeley, School of Public Health. Dr. Azzam, who created the world's first elective course for medical students to receive academic credit for improving health-related information on Wikipedia, says that people frequently use Wikipedia’s medical articles after receiving a medical diagnosis.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This point is illustrated in the many heartfelt messages of gratitude from readers worldwide. A reader with Crohn’s disease wrote, "Ever since my diagnosis, I’ve been able to use Wikipedia to not only learn more about my condition but to constantly expand my knowledge of the world around me. Wikipedia is one of the few things that taught me the true meaning behind the phrase ‘Knowledge is Power’."</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>Wikipedia is one of the few things that taught me the true meaning behind the phrase ‘Knowledge is Power’</strong>"</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>An Argentinian reader expressed, "I am a person with terminal cancer, and you accompany me each and every day when I look things up." This sentiment shows Wikipedia’s role as a trusted companion in navigating complex medical information.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Volunteers like Dr. Hussain, Dr. Masukume, Dr. Häggström, and Dr. Heilman play an invaluable role in shaping a healthier, more informed world through the power of shared knowledge. Wikipedia's medical editors are not just contributors; they are champions of accessible, reliable health information for all.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->

<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74514\u0022 style=\u0022width: 16px;\u0022 src=\u0022/wp-content/uploads/2024/04/Citation-Icon.svg\u0022 alt=\u0022\u0022\u003e\u003cstrong\u003eKnowledge Seekers\u003c/strong\u003e","id":1712315586654} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-blue","textColor":"base100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74518,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Group_photo_of_certified_RWC_students_in_Government_High_School_Adeta.webp_.png" alt="" class="wp-image-74518" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Knowledge seekers: Teachers and students “Reading Wikipedia in the Classroom”</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">The "Reading Wikipedia in the Classroom" project has sparked a global community of informed knowledge seekers, including both teachers and students who are eager to harness the power of Wikipedia for education.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong><strong>Knowledge seekers: Teachers and students “Reading Wikipedia in the Classroom”</strong></strong></h4>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74518,"width":"913px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Group_photo_of_certified_RWC_students_in_Government_High_School_Adeta.webp_.png" alt="" class="wp-image-74518" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:913px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Group_photo_of_certified_RWC_students_in_Government_High_School_Adeta.webp" target="_blank" rel="noreferrer noopener">Photo</a> by Bukky658, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The "Reading Wikipedia in the Classroom" project has sparked a global community of informed knowledge seekers, including both teachers and students who are eager to harness the power of Wikipedia for education. This initiative, supported by the Wikimedia Foundation, has trained a diverse cohort of educators from more than 40 countries, with the skills and knowledge needed to effectively integrate Wikipedia into their teaching.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Rashad Al-Khmisy, a seasoned Wikimedia volunteer and certified trainer, summarizes the project by saying, "The program has helped promote student engagement, develop critical thinking skills, improve teacher training, increase access to educational resources, and support education continuity."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Through this program, teachers learn how to use Wikipedia, and its principles of neutrality and verifiability, to&nbsp;evaluate and access digital content, understand biases and knowledge gaps in information, how to promote online safety for their students, and identify disinformation and misinformation. This comprehensive training equips educators with the tools to guide their students - <a href="https://meta.wikimedia.org/wiki/Education/Reading_Wikipedia_in_the_Classroom/ToT" target="_blank" rel="noreferrer noopener">and their colleagues</a> - in navigating the digital landscape critically and responsibly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Educators who participate in this training go on to become advocates for digital literacy in their respective communities, sharing their knowledge with other teachers and students. The program's multilingual approach, initially launched in four languages and now expanded to 15, ensures accessibility and inclusivity for audiences around the world.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74523,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/20230613_144228.png?w=1024" alt="" class="wp-image-74523"/><figcaption class="wp-element-caption"><a href="https://diff.wikimedia.org/20230613_144228/" target="_blank" rel="noreferrer noopener">Photo</a> by Naira WM BO, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>In Bolivia, the user group Wikimedistas de Bolivia implemented the program in innovative ways, even <a href="https://diff.wikimedia.org/2023/11/03/what-happened-when-wikimedistas-de-bolivia-teamed-with-a-youtube-educational-content-creator/" target="_blank" rel="noreferrer noopener">collaborating directly</a> with a popular YouTuber, <a href="https://www.youtube.com/watch?v=TR9tah0fHRc" target="_blank" rel="noreferrer noopener">Rodny Montoya</a>, to create videos explaining what Wikipedia is and how it works. <a href="https://diff.wikimedia.org/2012/12/05/the-impact-of-wikipedia-erlan-vega/" target="_blank" rel="noreferrer noopener">Erlan Vega</a> of Wikimedistas de Bolivia was full of praise, stating, "Rodny’s work is among the first educational content from Bolivia on YouTube. The way he creates knowledge about Bolivia is relevant to us because he relies on Wikipedia as a baseline, and that’s always reflected in his sources."</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74525,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/Mrs._Oby_Ezeilo_during_the_graduation_ceremony_of_the_Teachers_on_RWIC.jpg?w=960" alt="" class="wp-image-74525"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Mrs._Oby_Ezeilo_during_the_graduation_ceremony_of_the_Teachers_on_RWIC.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Zilzy, CC BY-SA 4.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>In Nigeria, implementations in Kwara State, Lagos State, Abuja, and Onicha Anambra State trained over 245 teachers, addressing challenges like digital literacy, internet access, and infrastructure limitations. Oby Ezeilo (photo above), one of the leaders of the program, <a href="https://diff.wikimedia.org/2023/10/20/reading-wikipedia-in-the-classroom-nigeria-one-year-after/" target="_blank" rel="noreferrer noopener">said</a> it “enables teachers to provide pupils with a high-quality online education. It is one potential way to improve the educational experience of both teachers and students.”&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Rashad showcased the program's impact in Yemen, training 30 teachers on using Wikipedia as an educational tool. He <a href="https://diff.wikimedia.org/2023/06/20/reading-wikipedia-in-the-classroom-program-in-yemen-brings-positive-impact-on-yemeni-teachers/#:~:text=Yemen%20%E2%80%93%20The%20Reading%20Wikipedia%20in,conflict%20and%20instability%20in%20Yemen." target="_blank" rel="noreferrer noopener">wrote</a>, “Despite the challenges facing education in Yemen, including the displacement of teachers and students, a shortage of educational resources, and limited opportunities for vocational and technical education, the program has had a positive impact on local teachers and the educational system. The program’s success highlights the importance of teacher training and professional development, particularly in a context where many teachers lack the training and resources they need to deliver high-quality education.”</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>The program’s success highlights the importance of teacher training and professional development, particularly in a context where many teachers lack the training and resources they need to deliver high-quality education.</strong>"</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Melissa Guadalupe Huertas, Senior Learning &amp; Capacity Strategist at the Wikimedia Foundation, is enthusiastic about the transformative nature of the "Reading Wikipedia in the Classroom" program. It "takes educators and students on a journey of empowerment as digital citizens — they use Wikipedia as an ally to navigate the vast sea of knowledge with discernment and curiosity. It's a beacon of collaboration, where teachers and learners from diverse backgrounds come together to cultivate critical thinking, empathy, and a deeper understanding of the world. Through this program, we're not only helping teachers understand how to leverage Wikipedia; we're also igniting a lifelong love for learning in every corner of the globe."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The use of Wikipedia in the classroom has the ability to impact people of all ages, and help students navigate online knowledge with discernment and curiosity. It’s a global project that stretches beyond geographical boundaries to enrich education on a global scale.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->

<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74515\u0022 style=\u0022width: 21px;\u0022 src=\u0022/wp-content/uploads/2024/04/Heart-icon.svg\u0022 alt=\u0022\u0022\u003e\u003cstrong\u003eGenerous Donors\u003c/strong\u003e","id":1712315588066} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-blue","textColor":"base100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74528,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Beatriz-Illescas.png" alt="" class="wp-image-74528" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Generous donors: Champions of Wikimedia’s mission</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">The Wikimedia Foundation relies on the generosity of its donors to uphold its vision of a world in which every single human being can freely share in the sum of all knowledge. These donors, including Beatriz Illescas and Nathan Cheng, epitomize the spirit of philanthropy that fuels Wikipedia's continued growth and impact.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong>Generous donors: Champions of Wikimedia’s mission</strong></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74528,"width":"913px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Beatriz-Illescas.png" alt="" class="wp-image-74528" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:913px;height:auto"/><figcaption class="wp-element-caption">Photo by Beatriz Illescas</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Wikimedia Foundation relies on the generosity of its donors to uphold its vision of a world in which every single human being can freely share in the sum of all knowledge. These donors, including Beatriz Illescas and Nathan Cheng, epitomize the spirit of philanthropy that fuels Wikipedia's continued growth and impact.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Beatriz Illescas,</strong> co-founder of the Foundation for a Better World, recognized Wikipedia's influence in sharing knowledge globally. Her foundation's ongoing support since 2020 reflects a deep-seated belief in the power of accessible information. Beatriz's personal journey with Wikipedia underscores how it has become an invaluable educational resource for millions.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Beatriz considers herself a “lifelong learner,” and the Wikimedia Foundation — with Wikipedia as its cornerstone project — became a primary consideration for her foundation’s philanthropy.</p>
<!-- /wp:paragraph -->

<!-- wp:embed {"url":"https://youtu.be/H9frML9vmAI","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wmf-pattern-overlay__image is-style-report-image wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wmf-pattern-overlay__image is-style-report-image wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://youtu.be/H9frML9vmAI
</div></figure>
<!-- /wp:embed -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>“It has been a great joy for all of us to know that we’re supporting the spread of knowledge,” Beatriz says.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Reflecting on her experience, Beatriz acknowledges Wikipedia's role in shaping her own educational path. "For me, in particular, I remember when [Wikipedia] came out and the search engine would take us immediately to you. You don’t have any doubts or concerns. . . and to be able to find it on the internet was really a gift.”</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74530,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/Nathan-Cheng-Portrait.jpeg?w=1024" alt="" class="wp-image-74530"/><figcaption class="wp-element-caption">Photo by betseycarroll</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>Nathan Cheng,</strong> a passionate Wikipedia supporter and digital designer, shared his admiration for Wikipedia through a heartfelt blog post titled "<a href="https://blog.nathancheng.fyi/2022/08/a-love-letter-to-wikipedia/" target="_blank" rel="noreferrer noopener">A love letter to Wikipedia</a>." His enjoyment of Wikipedia reflects a broader appreciation for its role in nurturing curiosity and intellectual exploration.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>"I love Wikipedia," Nathan writes. "Its abundant hyperlinks make it easy to indulge any fleeting, tangential interests, and its network of articles is so dense that you can reach any Wikipedia page from another just by ‘hyperlink-hopping'."</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>There is a word for how the Wikimedia Foundation feels about the praise from Nathan, Beatriz, and scores of other benevolent donors: Gratitude. We’re touched by their generous support. In the 2022-2023 fiscal year,<a href="https://meta.wikimedia.org/wiki/Fundraising/2022-23_Report" target="_blank" rel="noreferrer noopener"> more than 7.5 million donors gave to the Wikimedia Foundation</a>, with an average gift of $11.38. People in more than 200 countries donated to the Foundation, and each person had a unique reason to give. Among the reasons for Nathan: Wikipedia has been a valuable knowledge source year after year, as has Wikipedia’s altruistic approach to knowledge-sharing.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>“When I think about ways the internet has raised me, I like to think that spending so much time on Wikipedia helped me become more curious and see the world in a more interconnected way,” shared Nathan.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>When I think about ways the internet has raised me, I like to think that spending so much time on Wikipedia helped me become more curious and see the world in a more interconnected way</strong>."</p>
<!-- /wp:paragraph --><cite>Nathan Cheng</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Together, Beatriz Illescas, Nathan Cheng, and many other donors embody the spirit of generosity that sustains Wikipedia's integrity and independence. Their contributions extend far beyond financial support, shaping a global community dedicated to democratizing knowledge and empowering individuals worldwide.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->

<!-- wp:wmf-reports/story {"category":"\u003cimg class=\u0022wp-image-74516\u0022 style=\u0022width: 20px;\u0022 src=\u0022/wp-content/uploads/2024/04/Wikimedia-icon.svg\u0022 alt=\u0022\u0022\u003e\u003cstrong\u003eFoundation Staff\u003c/strong\u003e","id":1712315588067} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-blue","textColor":"base100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-base-100-color has-wmf-report-blue-background-color has-text-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":56318,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2018/06/Tshibamba_Papaul.jpg" alt="" class="wp-image-56318" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Foundation staff: Keeping Wikipedia secure, online, and accessible to the world</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Each member of staff at the Wikimedia Foundation has a story about their journey to join the Foundation, what motivates them in their daily work, and how their contributions further the mission of Wikipedia and its sister projects. Among these dedicated staff members are Papaul Tshibamba and Runa Bhattacharjee.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay"} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2"><strong><strong><strong>Foundation staff: Keeping Wikipedia secure, online, and accessible to the world</strong></strong></strong></h4>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":56318,"width":"914px","height":"auto","aspectRatio":"1.5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/06/Tshibamba_Papaul.jpg" alt="" class="wp-image-56318" style="aspect-ratio:1.5;object-fit:cover;width:914px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Papaul_Tshibamba-3.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Victor Grigas / Wikimedia Foundation, CC BY-SA 3.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Each member of staff at the Wikimedia Foundation has a story about their journey to join the Foundation, what motivates them in their daily work, and how their contributions further the mission of Wikipedia and its sister projects. Among these dedicated staff members are Papaul Tshibamba and Runa Bhattacharjee.<br><br><strong>Papaul Tshibamba</strong> serves as Lead Data Center Engineer with the Wikimedia Foundation's Data Center Operations team. His expertise ensures that millions of users worldwide can access knowledge on Wikipedia and its related projects quickly and reliably, every time. Along with other members of the Data Center Operations team, Papaul manages approximately 2,000 active servers across two Data centers and four caching sites, including those in the United States, Europe, and Asia.<br><br>Papaul expresses what the Wikimedia Foundation's mission means to him, stating, "What inspired me to join the Foundation is that I believe in free knowledge. I knew people were sharing knowledge, and I knew that maybe being part of the movement, I can make a difference."<br><br>One of the key aspects of Papaul's work is upholding the Foundation's commitment to user privacy and data security. By using our own servers rather than relying on commercial cloud providers, our Site Reliability Engineering team ensures that user data remains protected from third-party tracking.&nbsp;<br><br>In addition to his technical duties, Papaul played a vital role in bringing the Foundation's new data center in Marseille, France, online. This strategic move not only improved the efficiency of data operations, but also had a significant impact on <a href="https://meta.wikimedia.org/wiki/Strategy/Wikimedia_movement/2017/Direction#Knowledge_equity:_Knowledge_and_communities_that_have_been_left_out_by_structures_of_power_and_privilege" target="_blank" rel="noreferrer noopener">knowledge equity</a>, particularly in Africa. Page-load times can be slower for Wikimedia project users who live farther away from our data centers. Adding data centers and ensuring that servers operate at the highest level creates a more equitable experience for readers around the world, removing the technical barriers that prevent people from accessing and contributing to free knowledge.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":74533,"sizeSlug":"large","linkDestination":"none","className":"is-style-report-image"} -->
<figure class="wp-block-image size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/Bhattacharjee_Runa_Jan_2019.jpg?w=1000" alt="" class="wp-image-74533"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Bhattacharjee,_Runa_Jan_2019.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Myleen Hollero Photography, CC BY-SA 3.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong>Runa Bhattacharjee</strong> serves as the Senior Director of Product for Languages and Content Growth at the Wikimedia Foundation. Her role focuses on developing strategies to internationalize and diversify the content available on Wikimedia projects. With Wikipedia available in 326 languages, Runa's work is critical to supporting volunteer communities across languages and regions.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>“Wikimedia communities rely on the Wikimedia Foundation to keep things functioning and to provide an environment where they can continue to thrive and work towards their objectives,” Runa says. “The teams that I work with play a key part in connecting directly with the needs of the communities. The <a href="https://www.mediawiki.org/wiki/Wikimedia_Language_engineering" target="_blank" rel="noreferrer noopener">Language</a> and <a href="https://meta.wikimedia.org/wiki/Community_Tech" target="_blank" rel="noreferrer noopener">Community Tech</a> teams offer a space for dialogue and collaborative problem-solving. The <a href="https://www.mediawiki.org/wiki/Inuka_team" target="_blank" rel="noreferrer noopener">Inuka</a> and <a href="https://www.mediawiki.org/wiki/Readers/Structured_Data" target="_blank" rel="noreferrer noopener">Structured Content</a> teams challenge us to think differently and to explore the opportunities to find a course to naturally evolve as a knowledge-sharing platform.”</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<blockquote class="wp-block-quote is-style-default has-wmf-report-blue-color has-text-color has-link-color"><!-- wp:paragraph {"className":"is-style-h2"} -->
<p class="is-style-h2">"<strong>When I think about ways the internet has raised me, I like to think that spending so much time on Wikipedia helped me become more curious and see the world in a more interconnected way</strong>."</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>A notable contribution led by Runa’s teams is an innovative language translation service based on open source machine translation models called "<a href="https://diff.wikimedia.org/2023/11/20/unlocking-the-worlds-languages-in-wikipedia-a-look-into-mints-impact-so-far/" target="_blank" rel="noreferrer noopener">MinT</a>". This new machine translation service simplifies the process of translating Wikimedia content into various languages and also extends its support to new and underrepresented languages that are often overlooked by other translation services.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>For Papaul and Runa, their work not only ensures the smooth functioning of Wikipedia but also contributes to broader initiatives aimed at promoting knowledge accessibility, equity, and inclusivity on a global scale. Through their technical expertise and strategic vision, they play a crucial role in advancing the Foundation's mission of empowering individuals worldwide through free access to knowledge.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Learn More"},"className":"wmf-pattern-stories-learn-more","backgroundColor":"bright-blue-70","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-stories-learn-more has-bright-blue-70-background-color has-background"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><strong>Learn More</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-link-color"}}}},"textColor":"wmf-report-link-color"} -->
<p class="has-wmf-report-link-color-color has-text-color has-link-color"><a href="https://wikimediaendowment.org/reports/2022-2023-annual-report/#undefined-1712774780212" target="_blank" rel="noreferrer noopener">Read about Denny Vrandečić, another dedicated staffer who works on some of Wikipedia’s most important behind-the-scenes functionalities.</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay -->
<!-- /wp:wmf-reports/story -->
<!-- /wp:wmf-reports/stories --></div>
<!-- /wp:group -->

<!-- wp:image {"id":74535,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/Mural_Unter_der_Hand_Case_Maclaim_Bruckenstrase_Berlin-Mitte_01.jpg?w=1024" alt="" class="wp-image-74535"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Mural_Unter_der_Hand_Case_Maclaim_Br%C3%BCckenstra%C3%9Fe_Berlin-Mitte_01.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Singlespeedfahrer, CC0 1.0<br><mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Map"},"align":"full","className":"wp-block-wmf-reports-map__container","backgroundColor":"base90","includeInToC":true,"tocLabel":"Wikimedia Community","tocSlug":"toc-wikimedia-community"} -->
<div class="wp-block-group alignfull wp-block-wmf-reports-map__container has-base-90-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">wikimedia COMMUNITY</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>A global tapestry of stories</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Explore a dynamic map highlighting the experiences and contributions of Wikimedians worldwide.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/map {"className":"is-style-stacked"} -->
<!-- wp:wmf-reports/marker {"id":1712315532947,"lat":8.524112,"long":76.936057} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74564,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Malayalam_Wikimedian_Meenakshi_Nandhini_01.jpg" alt="" class="wp-image-74564" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>MALAYALM WIKIPEDIA ADMINISTRATOR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Pharmacist Meenakshi's Wikipedia journey</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Trivandrum, India</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Meenakshi, a pharmacist from Trivandrum, Kerala, India, is a prolific editor and administrator on Malayalam Wikipedia. Alongside managing a pharmaceutical shop, Meenakshi remains committed to enriching the digital landscape of knowledge. Since 2017, she's been dedicated to bridging knowledge gaps.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/04/30/what-do-the-capital-of-surinam-oscar-fish-and-the-arunachalesvara-temple-have-in-common/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712315545884,"lat":57.707233,"long":11.967017} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:embed {"url":"https://youtu.be/rjuI-kTkVqo","type":"video","providerNameSlug":"youtube","responsive":true,"align":"center","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed aligncenter is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://youtu.be/rjuI-kTkVqo
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong><strong>Wikimedian of the Year 2021</strong></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong><strong>On a mission to stop misinformation in Wikipedia</strong></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em><em>Gothenburg, Sweden</em></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Netha Hussain is a doctor and Wikipedia editor, known for her efforts to tackle the spread of misinformation in Wikipedia about the origin of the COVID-19. She also is dedicated to writing articles on women’s health and, as a member of the WikiWomen’s User Group, improving gender diversity in the Wikimedia movement.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://en.wikipedia.org/wiki/Netha_Hussain" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712315552199,"lat":34.053691,"long":-118.242766} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74566,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/PennyRichards2018-copy.jpg" alt="" class="wp-image-74566" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>WIKIWOMEN IN RED CONTRIBUTOR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Weaving the web of Wikimedia</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Los Angeles, United States of America</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Penny Richards is a Research Assistant Professor at the University of Buffalo's Center for Disability Studies. She contributes to the WikiProject Women in Red and enjoys connecting with people globally and delving into historical materials. Penny focuses on biographies and also contributes to Wikiquote, amplifying diverse voices with accurate sourcing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/03/17/celebrating-penny-richards/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712669944958,"lat":44.2267366369366,"long":20.7952998132557} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74568,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Edu_Wiki_Camp_2022_26.jpg" alt="" class="wp-image-74568" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>CENTRAL EASTERN EUROPEAN WIKIMEDIA COMMUNITY</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong><strong>“</strong>What does the widespread access to knowledge give us?”</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Serbia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Sara Horvat might be a newcomer, but this student is already proving the importance of education work in Wikimedia. She is a Wikimedian from the Central Eastern European Community, and has collaborated with the Serbian Academy of Sciences and Arts to write articles about lesser-known Serbian scientists.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/28/celebrating-sara-horvat/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712670551321,"lat":53.328641889600135,"long":0.7242540016286796} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74570,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/WikipediaDemocracy-eventbrite-header.jpg" alt="" class="wp-image-74570" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>FROM ARTICLE EDITS TO CIVIC POWER</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>The impact of Wikimedia UK’s information literacy work</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>United Kingdom</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">New digital technologies have altered the creation and consumption of media content, and introduced new challenges to democratic participation. Within this context, Wikimedia UK built a project to investigate how engaging with Wikimedia projects contributes to the strengthening of civil society and democratic processes in the UK.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/06/from-editing-articles-to-civic-power-wikimedia-and-democracy/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712674121242,"lat":-4.3114864736003256,"long":-22.048192771083762} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74573,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Lokakarya_1Lib1Ref_-_Universitas_Islam_Negeri_Malang_2023_-_21.jpg" alt="" class="wp-image-74573" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color">#<strong>1LIB1REF CAMPAIGN</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>From local libraries, to global impact</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Worldwide</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">The #1Lib1Ref campaign invites open knowledge enthusiasts, Wikimedians, book lovers, and library workers worldwide to come together and collaborate on verifying, increasing, and diversifying references on Wikipedia. This collective effort aims to enhance information accuracy, promote diversity in sources, and contribute to a more robust knowledge ecosystem online.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/04/18/from-local-libraries-to-global-impact-a-world-tour-of-january-2023-1lib1ref-campaign/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712674332374,"lat":10.775415421482323,"long":-72.14045929076265} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74575,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/20220806_094348.png" alt="" class="wp-image-74575" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>REAFFIRMING IDENTITY THROUGH WIKIPEETIA</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>The Wayúu Wikimedians are on a mission to preserve their culture</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Venezuela and Colombia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">The Wayúu people, residing in the north-western region of Venezuela and north-eastern Colombia within La Guajira, use Wikipeetia and Wikipütchimaajatü süka wayuunaiki in their native languages, to enrich information about their culture.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/01/26/wikipeetia-and-wikiputchimaajatu-suka-wayuunaiki-as-tools-for-the-reaffirmation-of-the-wayuu-identity/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712674766665,"lat":9.59395988695573,"long":8.10530640960786} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74577,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/rwc-19.png" alt="" class="wp-image-74577" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>READING WIKIPEDIA IN THE CLASSROOM</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Improving media and information literacy skills of secondary school students in Nigeria</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Nigeria</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Improving the media and information literacy skills of secondary school students in Nigeria has made a big difference. Students grew more enthusiastic about contributing when they realized they could make a difference and leave their mark. They learned how to think critically by checking sources and editing history.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2022/12/13/implementing-reading-wikipedia-in-the-classroom-to-improve-media-and-information-literacy-skills-of-secondary-school-students-in-nigeria/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712675413593,"lat":4.49664266041942,"long":102.275719605501} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74579,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Wikimedia_Summit_2022_Portraits-85.jpg" alt="" class="wp-image-74579" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>WIKIMEDIAN OF THE YEAR 2023</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Bridging digital divides and inspiring others</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Malaysia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">At just 8 years old, Taufik Rosman found his love for sharing knowledge by editing a Wikipedia article about his school. Later, as a rural student librarian, he discovered Malay Wiktionary, sparking his transformative Wikimedia journey. His mission? To enhance Malay and Indigenous Malaysian languages and knowledge.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712676109890,"lat":-41.8388752215127,"long":171.779900195937} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74581,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Siobhan_Leachman_at_BioBlitzWBN_1.jpg" alt="" class="wp-image-74581" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>WIKIMEDIA LAUREATE 2023</strong> </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Amplifying women's work in biodiversity and natural history</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>New Zealand</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Siobhan Leachman focuses on amplifying women's voices in biodiversity and natural history. Her contributions across Wikipedia, Wikidata, and Wikimedia Commons have greatly enhanced coverage of notable women in these fields and improved the representation of New Zealand biodiversity.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712677596828,"lat":36.3864928218528,"long":138.592229549504} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74583,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/WikiSG_Headshots_Eugene_Ormandy.jpg" alt="" class="wp-image-74583" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>NEWCOMER OF THE YEAR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Amplifying the Wikimedian community from Japan</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Japan</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">User:Eugene_Ormandy was named the 2023 Newcomer of the Year for capturing stories of inspiration and preserving community contributions. Inspired by a 2018 lecture, Eugene used his passion for editing Wikipedia to establish the Student Wikipedian Community at Waseda University Tokyo and a Wikipedian club in Japan.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712678143587,"lat":39.792969609445265,"long":-123.37640414863448} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74585,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Pax_Ahimsa_Gethen_headshot_May_2018.jpg" alt="" class="wp-image-74585" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>MEDIA CONTRIBUTOR OF THE YEAR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>A champion for inclusivity on Wikimedia projects</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>San Francisco, United States of America</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Pax Ahimsa Gethen was named the 2023 Media Contributor of the Year for their unwavering dedication to promoting inclusivity and representation on Wikimedia platforms. Their advocacy work focuses on marginalized communities, particularly the LGBTIQ+ community.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712678533606,"lat":18.830000000000894,"long":-39.75903614457698} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74587,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/WMOTY_ICONS_Tech-Contributor-of-the-Year.jpg" alt="" class="wp-image-74587" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>TECH CONTRIBUTOR OF THE YEAR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Enhancing Wikimedia's technical backbone</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Worldwide</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">User:Zabe was named the 2023 Tech Contributor of the Year for his invaluable contributions to Wikimedia's technical infrastructure. Renowned for his expertise in deployments, bug fixes, and maintaining critical codes like Checkuser and CentralAuth, Zabe's technical prowess has significantly improved the operation and user experience of Wikimedia projects.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712678793030,"lat":49.3227937844972,"long":31.3202829593814} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74589,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/WikiConference_2022_in_Kyiv_33.jpg" alt="" class="wp-image-74589" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>HONORABLE MENTION, WIKIMEDIAN OF THE YEAR</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Nurturing open knowledge and vommunity tesilience</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Ukraine</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Anton Protsiuk, Programs Coordinator at Wikimedia Ukraine, received an Honorable Mention for his outstanding contributions. Beginning as a volunteer editor on Ukrainian Wikipedia in 2011, Anton has since made significant strides, including the creation of over 300 articles and critical maintenance work.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/08/16/celebrating-the-2023-wikimedian-of-the-year-winners/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712682529996,"lat":-6.17555357,"long":106.82721585} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74572,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/GLAM_Training_Closing_Session.png" alt="" class="wp-image-74572" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>GLAM TRAINING &amp; EDITATHON IN BANDUNG</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Building capacity and preserving cultural heritage</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Indonesia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">OpenStreetMap Indonesia and Wikimedia Indonesia joined forces in 2022 to raise awareness about GLAM objects in Indonesia, particularly among youth. Their collaboration included a University Roadshow and a Flash Mapping Competition.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/01/empowering-youth-for-cultural-heritage-preservation-glam-training-edit-a-thon-in-bandung-indonesia/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712683280019,"lat":51.1334813439932,"long":10.0183432948567} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74590,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Dr._Denny_Vrandecic-2.jpg" alt="" class="wp-image-74590" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>INNOVATING KNOWLEDGE PLATFORMS</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>A journey in structured data and web collaboration</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Germany</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Denny Vrandečić has played a pivotal role in advancing knowledge bases, data mining, and web-based collaboration. As a project manager for Wikidata at Wikimedia Germany, he co-developed Semantic MediaWiki and laid the groundwork for Wikidata's inception. Joining the Wikimedia Foundation in 2020, Denny has spearheaded initiatives that harness structured data to create a multilingual, machine-driven knowledge platform.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://wikimediaendowment.org/reports/2022-2023-annual-report/#undefined-1712774780212" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712683710648,"lat":41.6261419326713,"long":-72.7262428031069} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74592,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Mikael_Haggstrom_at_pathology_in_2019.jpg" alt="" class="wp-image-74592" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>OPEN ACCESS AND COLLABORATIVE LEARNING</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Pioneering medical knowledge and Wikimedia advocacy</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Connecticut, United States</em> <em>of America</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Mikael Häggström, a radiology specialist, has made contributions to both the medical field and Wikimedia projects by sharing medical knowledge and imagery. He is the creator and current editor-in-chief of WikiJournal of Medicine, transforming academic publishing by integrating it with Wikipedia's open-access model.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://en.wikipedia.org/wiki/User:Mikael_H%C3%A4ggstr%C3%B6m" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712684107908,"lat":54.83816973151491,"long":-9.313935342719248} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:embed {"url":"https://youtu.be/zSn3vSP-Glw","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://youtu.be/zSn3vSP-Glw
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>EDITING THE WIKIJOURNAL OF MEDICINE</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Advancing medical knowledge and collaboration across continents</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Ireland</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Dr. Gwinyai Masukume is a Medical Doctor and Public Health researcher specializing in Epidemiology and Biostatistics. As the Deputy Editor-in-Chief of the WikiJournal of Medicine from 2015 to 2022, he played a pivotal role in leveraging Wikipedia as a platform for open-access publishing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://theconversation.com/profiles/gwinyai-masukume-175099" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712684565536,"lat":49.260872,"long":-123.113952} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74594,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Dr._James_Heilman.jpg" alt="" class="wp-image-74594" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>ADVANCING MEDICAL KNOWLEDGE</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Dr. James Heilman's Wikimedia journey</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Vancouver, Canada</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Dr. Heilman, an emergency physician, has been instrumental in encouraging clinicians to contribute to Wikipedia. Besides his active involvement in WikiProject Medicine and volunteer administration on Wikipedia, he served as the president of Wikimedia Canada and founded the Wiki Project Med Foundation.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://en.wikipedia.org/wiki/James_Heilman" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712685382884,"lat":31.8039734986915,"long":-98.8223185136653} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":56318,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2018/06/Tshibamba_Papaul.jpg" alt="" class="wp-image-56318" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>WIKIMEDIA'S GLOBAL CONNECTIVITY</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Driving seamless accessibility with Papaul Tshibamba</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Texas, United States of America</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">As a Senior Data Center Engineer with the Wikimedia Foundation, Papaul helps ensure the uninterrupted accessibility of Wikipedia and its sister projects across the globe. His role involves overseeing the functioning of over 2,000 active servers spread across two data centers and four caching sites.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://techblog.wikimedia.org/2022/07/15/building-dreamers-how-and-why-we-opened-a-datacenter-in-france/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1712685690965,"lat":22.572672,"long":88.363881} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74533,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Bhattacharjee_Runa_Jan_2019.jpg" alt="" class="wp-image-74533" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>LEADING MULTILINGUAL INNOVATION</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Ensuring Wikimedia content is truly global</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Kolkata, India</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">As a Senior Director of Product for Languages and Content Growth at the Wikimedia Foundation, Runa Bhattacharjee plays a pivotal role in shaping the multilingual landscape of Wikimedia projects. Focused on language diversity and technical innovation, Runa collaborates with teams and contributors to ensure that Wikimedia's content remains accessible and impactful for users.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/13/mint-supporting-underserved-languages-with-open-machine-translation/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713293230781,"lat":-16.9706623441227,"long":-64.2696051242704} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74523,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/20230613_144228.png" alt="" class="wp-image-74523" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>COLLABORATING WITH YOUTUBERS</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Wikipedia as an educational tool</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Bolivia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">In Bolivia, the user group Wikimedistas de Bolivia implemented the Reading Wikipedia in the Classroom program in innovative ways, collaborating directly with a popular YouTuber, <a href="https://www.youtube.com/watch?v=TR9tah0fHRc" target="_blank" rel="noreferrer noopener">Rodny Montoya</a>, to create videos explaining what Wikipedia is and how it works.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/11/03/what-happened-when-wikimedistas-de-bolivia-teamed-with-a-youtube-educational-content-creator/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713293401283,"lat":15.9378350127516,"long":47.6219307491681} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74631,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Reading_Wikipedia_in_the_Classroom_in_Yemen_2023_-68.jpg" alt="" class="wp-image-74631" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Training Teachers in Yemen</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Wikipedia makes positive impact on Yemeni teachers</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Yemen</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">The Reading Wikipedia in the Classroom program has successfully trained 30 Yemeni teachers on how to use Wikipedia as a teaching resource to promote student engagement and critical thinking skills.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/20/reading-wikipedia-in-the-classroom-program-in-yemen-brings-positive-impact-on-yemeni-teachers/#:~:text=Yemen%20%E2%80%93%20The%20Reading%20Wikipedia%20in,conflict%20and%20instability%20in%20Yemen" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713293719311,"lat":-6.27035338020445,"long":34.8234540265851} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74633,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/IMG_5280.jpg" alt="" class="wp-image-74633" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Navigating Peaks and Valleys</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Embracing diversity in Tanzania’s Wikimedia community</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Tanzania</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Tanzania is a land of great diversity, with over 120 ethnic groups, each with its own unique culture, language, and knowledge. As part of the global Wikimedia movement, Tanzanian Wikimedians are working hard to ensure that their communities are as diverse and inclusive as possible.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/06/23/navigating-the-peaks-and-valleys-embracing-diversity-in-tanzanias-wikimedia-communities/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713293920749,"lat":6.88085426914622,"long":-1.16759442759906} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74675,"width":"584px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/CleanShot-2024-04-17-at-09.15.43@2x.png" alt="" class="wp-image-74675" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:584px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Increasing Access</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Fante language joins Wikipedia</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Ghana</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Fante, one of the widely spoken languages in Ghana, has been approved on Wikipedia, joining four other Ghanaian languages with their own Wikipedia domain. Fante is primarily spoken in the central and southern regions of Ghana, as well as in settlements in other regions in the west of the country, with an estimated 2 million speakers.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/05/02/fante-language-joins-wikipedia/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713294284058,"lat":-28.3782721906973,"long":23.9137106762068} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74648,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Freedom_of_Panorama_protest_in_South_Africa_2023_01.jpg" alt="" class="wp-image-74648" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Copyright Reform</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Promoting knowledge equity in South Africa</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>South Africa</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Members of Wikimedia South Africa, Wikimedia Deutschland, and the Wikimedia Foundation were active participants in the <a href="https://www.re-createza.org/r2r" target="_blank" rel="noreferrer noopener">“A Right to Research in Africa?” (R2R)</a> conference, which offered important lessons for those who wish to advocate for copyright reform including the overarching message that copyright reform is necessary to break down the social, political, and legal structures that sustain information injustice across Africa.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/03/30/we-are-second-class-citizens-on-the-internet-how-copyright-reform-in-south-africa-can-serve-the-free-knowledge-movement-globally/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713294781023,"lat":-26.783346,"long":-69.761008} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74652,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Screen-Shot-2023-09-15-at-12.47.44-PM.jpg" alt="" class="wp-image-74652" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>Fighting Disinformation</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>A repository of anti-disinformation projects</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Chile</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">One of many projects highlighted, Wikimedia Chile collaborated with Google and the municipality (comuna) of Quilicura in Chile to develop a training called <a href="https://www.youtube.com/watch?v=3kfd88D9_8Y" target="_blank" rel="noreferrer noopener">¡Que no te pille la tecnología! Personas Mayores Informadas</a> (Don’t let technology catch you! Senior Citizens Informed), which helped older people be safe on the internet, and discussed specific techniques against disinformation.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2023/10/19/wikimedia-is-an-antidote-to-disinformation-introducing-a-repository-of-anti-disinformation-projects/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->

<!-- wp:wmf-reports/marker {"id":1713294993117,"lat":-7.532239111228691,"long":117.46987951807176} -->
<!-- wp:group {"align":"full","className":"wmf-pattern-reports-carousel-slide","backgroundColor":"wmf-report-bright-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wmf-pattern-reports-carousel-slide has-wmf-report-bright-yellow-background-color has-background"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-reports-carousel-slide__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":74678,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wmf-pattern-reports-carousel-slide__image"} -->
<figure class="wp-block-image size-full is-style-default wmf-pattern-reports-carousel-slide__image"><img src="/wp-content/uploads/2024/04/Proposal_APG2020_71e05d.jpg" alt="" class="wp-image-74678" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__category is-style-sans-p","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange"} -->
<p class="wmf-pattern-reports-carousel-slide__category is-style-sans-p has-orange-color has-text-color has-link-color"><strong>A strong base</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wmf-pattern-reports-carousel-slide__heading is-style-h3"} -->
<h3 class="wp-block-heading wmf-pattern-reports-carousel-slide__heading is-style-h3"><strong>Community retention in Indonesia</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wmf-pattern-reports-carousel-slide__location is-style-sans-p"} -->
<p class="wmf-pattern-reports-carousel-slide__location is-style-sans-p"><em>Indonesia</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sans-p"} -->
<p class="is-style-sans-p">Wikimedia Indonesia (WMID) has been supporting several Wikimedia communities across the regions of Indonesia. They consist of individuals of diverse backgrounds, statuses, and economic levels who have been crucial in advancing Wikimedia projects, such as Wikipedia, Wikidata, and Wikisource, as well as helping WMID with outreach and workshops in various parts of Indonesia. Currently, there are 14 local Wikimedia communities supported: four language-based communities, eight location-based communities, and two project-based communities.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","textColor":"base10","className":"is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger","style":{"elements":{"link":{"color":{"text":"var:preset|color|base0"}}}}} -->
<div class="wp-block-button is-style-tertiary wmf-pattern-reports-carousel-slide__button overlay__trigger"><a class="wp-block-button__link has-base-10-color has-base-100-background-color has-text-color has-background has-link-color wp-element-button" href="https://diff.wikimedia.org/2022/11/17/community-retention-in-indonesia-our-efforts-over-three-years/" target="_blank" rel="noreferrer noopener">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/marker -->
<!-- /wp:wmf-reports/map --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Financials"},"align":"wide","className":"wmf-pattern-financial-statements","includeInToC":true,"tocLabel":"Financial Accountability","tocSlug":"toc-financial-accountability"} -->
<div class="wp-block-group alignwide wmf-pattern-financial-statements"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Financial Accountability</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Navigating the Numbers</strong></h3>
<!-- /wp:heading -->

<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p>Accountability and transparency are two principles that underpin the Wikimedia Foundation’s core values. We are committed to managing funds and resources so that every contribution furthers our mission of advancing knowledge for all.<br><br>In recognition of how we operate, we've been honored with the Platinum Seal of Transparency from Candid (formerly GuideStar), and Charity Navigator has awarded us their highest rating of four stars.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"wmf-pattern-financial-statements__score"} -->
<div class="wp-block-column wmf-pattern-financial-statements__score" style="flex-basis:33.33%"><!-- wp:image {"id":74537,"width":"103px","height":"auto","sizeSlug":"large","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="/wp-content/uploads/2024/04/Guidestar-Platinum-Transparence-2021.png?w=103" alt="" class="wp-image-74537" style="width:103px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":74538,"width":"109px","height":"auto","sizeSlug":"large","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="/wp-content/uploads/2024/04/Four-Stars.png?w=87" alt="" class="wp-image-74538" style="width:109px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>98/100</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:vegalite-plugin/visualization {"chartId":"_f33u6vdddwv","json":{"\$schema":"https://vega.github.io/schema/vega-lite/v5.json","description":"Pie Chart with percentage_tooltip","width":300,"height":300,"background":"#f8f9fa","transform":[{"calculate":"( datum.percent / 100 ) * 169095381","as":"spend"},{"calculate":"join( [ '$', round( datum.spend / 100000 ) / 10, 'M' ], '' )","as":"spendLabel"}],"data":{"values":[{"percent":43,"category":"Investment in Technology","prettySpend":"$72,700,000 USD","label":"Technology","className":"vis-color-purple","color":"#5748B5"},{"percent":33,"category":"Support for Volunteers and Readers","prettySpend":"$55,800,000 USD","label":"Support","className":"vis-color-red","color":"#970302"},{"percent":11,"category":"Allocation to Fundraising Efforts","prettySpend":"$18,600,000 USD","label":["Fundraising","Efforts"],"className":"vis-color-orange","color":"#FF7800"},{"percent":13,"category":"General and Administrative Expenses","prettySpend":"$22,000,000 USD","label":["General","Expenses"],"className":"vis-color-amber","color":"#F0BC00"}]},"layer":[{"mark":{"type":"arc","radius":{"expr":"select.category == datum.category ? 150 : 130"},"innerRadius":75},"params":[{"name":"select","select":{"type":"point","on":"pointerover","fields":["category","spend","label","spendLabel"]}}],"encoding":{"color":{"field":"category","type":"nominal","scale":{"domain":["Investment in Technology","Support for Volunteers and Readers","Allocation to Fundraising Efforts","General and Administrative Expenses"],"range":["#5748B5","#970302","#FF7800","#F0BC00"]},"legend":null},"tooltip":[{"field":"prettySpend","title":"Amount","type":"nominal"},{"field":"category","title":"Category"}]}},{"mark":{"type":"text","fontWeight":800,"fontSize":16,"font":"sans-serif","color":"#fff","radius":{"expr":"select.category == datum.category ? 110 : 100"}},"encoding":{"text":{"value":{"expr":"select.category == datum.category ? join( [ datum.percent, '%' ], '' ) : ''"},"type":"quantitative"}}},{"mark":{"type":"text","color":"#000","dy":-10,"fontWeight":800,"fontSize":20,"font":"sans-serif","text":{"expr":"select.category == datum.category ? datum.spendLabel : '' "}}},{"mark":{"type":"text","color":"#000","fontSize":14,"fontWeight":300,"dy":10,"font":"sans-serif","text":{"expr":"select.label ? select.label : ''"}}},{"mark":{"type":"text","color":"#000","dy":-10,"fontWeight":800,"fontSize":20,"font":"sans-serif","text":{"expr":"select.category ? '' : '$169M'"}}},{"mark":{"type":"text","color":"#000","fontSize":14,"fontWeight":300,"dy":10,"font":"sans-serif","text":{"expr":"select.category ? '' : 'Total Funding'"}}}],"encoding":{"order":{"field":"spend","sort":"descending"},"theta":{"field":"spend","type":"quantitative","stack":true}}},"className":"vis-centered"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item {"borderColor":"wmf-report-purple","className":"vis-color-purple"} -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item vis-color-purple" style="border-left-color:var(--wp--preset--color--wmf-report-purple)"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Investment in Technology<mark class="has-inline-color has-base-10-color">43%</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>Nearly half of our budget is used to support the technology that makes Wikipedia and other Wikimedia projects possible. We continually work to improve the user experience for contributors and readers; enhance security for the sites; and ensure reliable, consistent access to the websites around the world. We provide this infrastructure and product support for one of the top ten most popular websites in the world at a fraction of the cost of popular for-profit websites.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item {"borderColor":"wmf-report-red","className":"vis-color-red"} -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item vis-color-red" style="border-left-color:var(--wp--preset--color--wmf-report-red)"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Support for Volunteers<mark class="has-inline-color has-base-10-color">33%</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>The global impact of Wikimedia projects is made possible by the dedicated efforts of volunteers from around the world. We provide grants, legal assistance, and other resources for our contributors to build thriving volunteer communities. Additionally, we encourage community engagement through outreach events and advocate for the growth and protection of free knowledge.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item {"borderColor":"wmf-report-yellow","className":"vis-color-orange"} -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item vis-color-orange" style="border-left-color:var(--wp--preset--color--wmf-report-yellow)"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Allocation to Fundraising Efforts<mark class="has-inline-color has-base-10-color">11%</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>Donor support forms the lifeblood of Wikipedia and our other free knowledge initiatives. Our team works tirelessly year-round to fundraise efficiently and effectively, ensuring that every contribution sustains our mission.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item {"className":"vis-color-amber"} -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item vis-color-amber"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">General and Administrative Expenses<mark class="has-inline-color has-base-10-color">13%</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>Operational costs are necessary for the effective management and governance of the Wikimedia Foundation. These administrative and people-related costs allow us to hire the best talent and support staff around the world to carry out the mission of the Wikimedia Foundation.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:wmf-reports/accordion {"className":"accordion-wrapper"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper undefined"><!-- wp:wmf-reports/accordion-item {"align":"full"} -->
<div class="wp-block-wmf-reports-accordion-item alignfull wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Balance sheet (audited)</h3></button><div class="wmf-accordion-item__content"><!-- wp:heading {"textAlign":"center","className":"is-style-h6"} -->
<h2 class="wp-block-heading has-text-align-center is-style-h6"><strong>ASSETS</strong></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Current assets</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Cash and cash equivalents</td><td class="has-text-align-right" data-align="right">75,808,401</td><td class="has-text-align-right" data-align="right">50,939,835</td></tr><tr><td>Contributions receivable</td><td class="has-text-align-right" data-align="right">—</td><td class="has-text-align-right" data-align="right">700,000</td></tr><tr><td>Short-term investments</td><td class="has-text-align-right" data-align="right">132,216,667</td><td class="has-text-align-right" data-align="right">141,361,796</td></tr><tr><td>Prepaid expenses and other current assets</td><td class="has-text-align-right" data-align="right">5,569,485</td><td class="has-text-align-right" data-align="right">5,100,284</td></tr><tr><td><strong>Total current assets</strong></td><td class="has-text-align-right" data-align="right"><strong>213,594,553</strong></td><td class="has-text-align-right" data-align="right"><strong>198,101,915</strong></td></tr><tr><td>Restricted cash</td><td class="has-text-align-right" data-align="right">1,396,717</td><td class="has-text-align-right" data-align="right">1,372,480</td></tr><tr><td>Long-term investments</td><td class="has-text-align-right" data-align="right">43,265,786</td><td class="has-text-align-right" data-align="right">39,861,990</td></tr><tr><td>Right of use asset — operating lease, net</td><td class="has-text-align-right" data-align="right">1,821,174</td><td class="has-text-align-right" data-align="right">—</td></tr><tr><td>Property and equipment, net</td><td class="has-text-align-right" data-align="right">14,045,139</td><td class="has-text-align-right" data-align="right">11,629,057</td></tr><tr><td><strong>Total assets</strong></td><td class="has-text-align-right" data-align="right"><strong>274,123,369</strong></td><td class="has-text-align-right" data-align="right"><strong>250,965,442</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center"><strong>LIABILITIES AND NET ASSETS</strong></h6>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Current liabilities</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Accounts payable</td><td class="has-text-align-right" data-align="right">2,783,904</td><td class="has-text-align-right" data-align="right">3,267,306</td></tr><tr><td>Accrued expenses</td><td class="has-text-align-right" data-align="right">6,922,259</td><td class="has-text-align-right" data-align="right">5,697,569</td></tr><tr><td>Lease liability</td><td class="has-text-align-right" data-align="right">1,640,735</td><td class="has-text-align-right" data-align="right">—</td></tr><tr><td>Donations payable to Wikimedia Endowment</td><td class="has-text-align-right" data-align="right">5,274,448</td><td class="has-text-align-right" data-align="right">19,718</td></tr><tr><td>Other liabilities</td><td class="has-text-align-right" data-align="right">2,124,939</td><td class="has-text-align-right" data-align="right">2,629,317</td></tr><tr><td><strong>Total current liabilities</strong></td><td class="has-text-align-right" data-align="right"><strong>18,746,285</strong></td><td class="has-text-align-right" data-align="right"><strong>11,613,910</strong></td></tr><tr><td>Lease liability</td><td class="has-text-align-right" data-align="right">405,748</td><td class="has-text-align-right" data-align="right">—</td></tr><tr><td><strong>Total liabilities</strong></td><td class="has-text-align-right" data-align="right"><strong>19,152,033</strong></td><td class="has-text-align-right" data-align="right"><strong>11,613,910</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Net assets</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Net assets without donor restrictions</td><td class="has-text-align-right" data-align="right">249,088,663</td><td class="has-text-align-right" data-align="right">238,009,941</td></tr><tr><td>Net assets with donor restrictions</td><td class="has-text-align-right" data-align="right">5,882,673</td><td class="has-text-align-right" data-align="right">1,341,591</td></tr><tr><td><strong>Total net assets</strong></td><td class="has-text-align-right" data-align="right"><strong>254,971,336</strong></td><td class="has-text-align-right" data-align="right"><strong>239,351,532</strong></td></tr><tr><td><strong>Total liabilities and net assets</strong></td><td class="has-text-align-right" data-align="right"><strong>274,123,369</strong></td><td class="has-text-align-right" data-align="right"><strong>250,965,442</strong></td></tr></tbody></table></figure>
<!-- /wp:table --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:wmf-reports/accordion {"align":"center","className":"accordion-wrapper"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion aligncenter accordion-wrapper undefined"><!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Statement of activities (audited)</h3></button><div class="wmf-accordion-item__content"><!-- wp:heading {"textAlign":"center","className":"is-style-h6"} -->
<h2 class="wp-block-heading has-text-align-center is-style-h6"><strong>NET ASSETS WITHOUT DONOR RESTRICTIONS</strong></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Support and revenue</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Contributions of cash and other financial assets</td><td class="has-text-align-right" data-align="right">164,121,185</td><td class="has-text-align-right" data-align="right">160,468,313</td></tr><tr><td>Contributions of nonfinancial assets and services</td><td class="has-text-align-right" data-align="right">1,040,453</td><td class="has-text-align-right" data-align="right">420,351</td></tr><tr><td>Foreign currency gains (losses)</td><td class="has-text-align-right" data-align="right">(94,868)</td><td class="has-text-align-right" data-align="right">(944,163)</td></tr><tr><td>Other income, net</td><td class="has-text-align-right" data-align="right">3,824,240</td><td class="has-text-align-right" data-align="right">2,106,050</td></tr><tr><td>Investment income (loss), net</td><td class="has-text-align-right" data-align="right">6,550,439</td><td class="has-text-align-right" data-align="right">(11,665,241)</td></tr><tr><td>Release of net assets with donor restrictions</td><td class="has-text-align-right" data-align="right">4,732,654</td><td class="has-text-align-right" data-align="right">4,301,211</td></tr><tr><td><strong>Total support and revenue</strong></td><td class="has-text-align-right" data-align="right"><strong>180,175,103</strong></td><td class="has-text-align-right" data-align="right"><strong>154,686,521</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Expenses</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Salaries and benefits</td><td class="has-text-align-right" data-align="right">101,305,706</td><td class="has-text-align-right" data-align="right">88,111,412</td></tr><tr><td>Awards and grants</td><td class="has-text-align-right" data-align="right">24,433,682</td><td class="has-text-align-right" data-align="right">18,960,813</td></tr><tr><td>Internet hosting</td><td class="has-text-align-right" data-align="right">3,120,819</td><td class="has-text-align-right" data-align="right">2,704,842</td></tr><tr><td>In-kind service expenses</td><td class="has-text-align-right" data-align="right">1,040,453</td><td class="has-text-align-right" data-align="right">405,885</td></tr><tr><td>Donation processing expenses</td><td class="has-text-align-right" data-align="right">6,855,680</td><td class="has-text-align-right" data-align="right">6,215,434</td></tr><tr><td>Professional service expenses</td><td class="has-text-align-right" data-align="right">15,464,635</td><td class="has-text-align-right" data-align="right">16,881,184</td></tr><tr><td>Other operating expenses</td><td class="has-text-align-right" data-align="right">7,393,982</td><td class="has-text-align-right" data-align="right">7,815,795</td></tr><tr><td>Travel and conferences</td><td class="has-text-align-right" data-align="right">4,180,219</td><td class="has-text-align-right" data-align="right">1,191,164</td></tr><tr><td>Depreciation and amortization</td><td class="has-text-align-right" data-align="right">4,602,064</td><td class="has-text-align-right" data-align="right">3,213,466</td></tr><tr><td>Special event expense, net</td><td class="has-text-align-right" data-align="right">698,141</td><td class="has-text-align-right" data-align="right">470,920</td></tr><tr><td><strong>Total expenses</strong></td><td class="has-text-align-right" data-align="right"><strong>169,095,381</strong></td><td class="has-text-align-right" data-align="right"><strong>145,970,915</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading {"textAlign":"center","className":"is-style-h6"} -->
<h2 class="wp-block-heading has-text-align-center is-style-h6"><strong>NET ASSETS WITH DONOR RESTRICTIONS</strong></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th>Net assets with donor restrictions</th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td>Contributions with donor restrictions</td><td class="has-text-align-right" data-align="right">9,273,736</td><td class="has-text-align-right" data-align="right">3,759,601</td></tr><tr><td>Net assets released from restrictions</td><td class="has-text-align-right" data-align="right">(4,732,654)</td><td class="has-text-align-right" data-align="right">(4,301,211)</td></tr><tr><td><strong>Increase (decrease) in net assets with donor restrictions</strong></td><td class="has-text-align-right" data-align="right"><strong>4,541,082</strong></td><td class="has-text-align-right" data-align="right"><strong>(541,610)</strong></td></tr><tr><td><strong>Increase in net assets</strong></td><td class="has-text-align-right" data-align="right"><strong>15,619,082</strong></td><td class="has-text-align-right" data-align="right"><strong>8,173,996</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th></th><th class="has-text-align-right" data-align="right">2023 (USD)</th><th class="has-text-align-right" data-align="right">2022 (USD)</th></tr></thead><tbody><tr><td><strong>Net assets at beginning of year</strong></td><td class="has-text-align-right" data-align="right"><strong>239,351,532</strong></td><td class="has-text-align-right" data-align="right"><strong>231,177,536</strong></td></tr><tr><td><strong>Net assets at end of year</strong></td><td class="has-text-align-right" data-align="right"><strong>254,971,336</strong></td><td class="has-text-align-right" data-align="right"><strong>239,351,532</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-h6","fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-left is-style-h6 has-small-font-size">The Wikimedia Foundation is a donor-funded, US 501(c)(3) nonprofit organization. Our tax ID number is 20-0049703. You can read our full audit report for 2022-23 <a href="/wp-content/uploads/2023/11/Wikimedia_Foundation_FS_FY2022-2023_Audit_Report.pdf" target="_blank" rel="noreferrer noopener">here</a>.</h3>
<!-- /wp:heading --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"id":74540,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/India_-_Varanasi_green_peas_-_2714.jpg?w=1024" alt="" class="wp-image-74540"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:India_-_Varanasi_green_peas_-_2714.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Jorge Royan, CC BY-SA 3.0<mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Leadership"},"align":"wide","className":"wmf-pattern-reports-leadership","includeInToC":true,"tocLabel":"Leadership","tocSlug":"toc-leadership"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-leadership"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Leadership</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Leadership during the 2022-2023 Financial Year</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Wikimedia Foundation's leadership includes the executive team, which oversees staff at the Foundation, and the Board of Trustees, which serves as the Foundation's ultimate corporate authority, guiding its work and mission.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3"><strong>Board of trustees</strong></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"wmf-pattern-reports-leadership__list","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-reports-leadership__list"><!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Nataliia Tymkiv</strong> <br>Chair</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":60483,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/06/MYHO5442-Edit-e1565972189401.jpg" alt="" class="wp-image-60483" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Tymkiv,_Nataliia_November_2018.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Myleen Hollero / Wikimedia Foundation, CC BY-SA 3.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Nataliia Tymkiv</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chair, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><a href="https://meta.wikimedia.org/wiki/User:NTymkiv_(WMF)" target="_blank" rel="noreferrer noopener">Nataliia Tymkiv</a>&nbsp;currently serves as Financial Director of the Centre for Democracy and Rule of Law, a Ukrainian media policy and human rights nonprofit. Nataliia grew up in Western Ukraine and has a Masters degree in Public Administration and a Specialist degree in Records Management and Information Activities. She has in-depth experience in executive leadership and financial management. Prior to her current role as Financial Director, Nataliia worked at a manufacturing firm and later, in finance at a construction company.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>On the Wikimedia projects, Nataliia has been an active contributor since 2011, and shortly after became an administrator of&nbsp;<a href="https://en.wikipedia.org/wiki/uk:" target="_blank" rel="noreferrer noopener">Ukrainian Wikipedia</a>. She has also been a member of the&nbsp;<a href="https://ua.wikimedia.org/wiki/" target="_blank" rel="noreferrer noopener">Wikimedia Ukraine</a>&nbsp;community for nearly four years.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In late 2012, Nataliia joined the Board of Wikimedia Ukraine as Treasurer. In this position, Nataliia built the financial model for the chapter from the ground up, including detailed financial reporting, accounting, and grant-making activities for the organization. Nataliia was later selected to serve as volunteer Executive Director of Wikimedia Ukraine in 2013 in addition to her position on the Board. In 2015, she returned to her position as Vice Chair and Treasurer of the Board.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Throughout her time on the Board, Nataliia helped oversee the growth and expansion of Wikimedia Ukraine in a number of ways, including improvements in transparency and governance-related processes for the chapter, the transition to Annual Plan Grants (APG) funding, growing Wikimedia Ukraine staff, and building and maintaining donor, partner, and community relationships.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Esra'a Al Shafei</strong> <br>Vice Chair</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74543,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Esraa_Al_Shafei_avatar.png" alt="" class="wp-image-74543" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Esra%27a_Al_Shafei_avatar.png" target="_blank" rel="noreferrer noopener">Avatar</a> by Takasakiyama, Public Domain<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Esra’a Al Shafei</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vice Chair, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Esra’a Al Shafei is a human rights activist and the founder and director of Majal, a nonprofit which helps build communities that celebrate, protect, and promote diversity, and social justice.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A native of Bahrain, Esra’a works avidly to increase and protect free speech, promote expression for youth and underrepresented voices, and improve the lives of LGBTQ people in the Middle East and North Africa. She founded Majal in 2006 as Mideast Youth. The organization has built online platforms that creatively facilitate the struggle for social change in the Middle East and North Africa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Esra’a received the Berkman Award for Internet Innovation from Berkman Klein Center for Internet &amp; Society at Harvard Law School in 2008 for “outstanding contributions to the internet and its impact on society.” The World Economic Forum listed her as one of “15 Women Changing the World in 2015.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>She has won the “Most Courageous Media” Prize from Free Press Unlimited, and the Monaco Media Prize, which acknowledges innovative uses of media for the betterment of humanity.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Esra’a is a senior TED Fellow, an Echoing Green fellow, and a Director’s Fellow at the MIT Media Lab. She received a Shuttleworth Foundation Fellowship in 2012 for her work on CrowdVoice.org. She lives in the Middle East and North Africa region.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Shani Evenstein Sigalov</strong> <br>Vice Chair</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":62091,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2019/09/Shani-BoT.jpg" alt="Shani Evenstein" class="wp-image-62091" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Shani_Evenstein_with_Wikipedia_Logo.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Shani Evenstein, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Shani Evenstein Sigalov</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vice Chair, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Shani Evenstein Sigalov is an educator, researcher and free knowledge advocate, focusing on bridging gender, language and social gaps in free knowledge projects. Shani is currently finishing her PhD at the Technology &amp; Learning Program, School of Education, Tel Aviv University, with her research focusing on the Semantic Web as a learning platform, specifically on Wikidata as a case study. As part of her work at Tel Aviv University, she served as an EdTech Innovation Strategist at the School of Medicine for a decade, and since 2013 has been a lecturer in various courses on campus, designing and leading academic courses focusing on Wikimedia projects.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In 2013 she opened the first for-credit course in the world focusing on medical content on Wikimedia projects, with her students contributing over 13% of Hebrew Wikipedia’s medical content. In 2015 she opened a second academic course focusing on using Wikipedia as a platform to gain skills and have social impact, which is available to all undergraduates at TAU, and in 2018 she opened the first academic course in the world to feature Wikidata. Shani is an&nbsp;<a href="https://azrielifoundation.org/" target="_blank" rel="noreferrer noopener">Azrieli Foundation</a>&nbsp;PhD Research Fellow, and also serves as a Visiting Researcher at Digital Humanities Research Hub, School of Advanced Study, University of London. Besides contributing to Wikimedia projects, Shani serves as Chief Editor and Chairperson for Project Ben-Yehuda, a free online library of Hebrew writings.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Shani is entering her second term as a Wikimedia Foundation trustee and serves as a Vice-Chair of the Board of Trustees. During her first term, she founded and served as the Chair of the&nbsp;<a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation_Community_Affairs_Committee" target="_blank" rel="noreferrer noopener">Community Affairs Committee</a>&nbsp;– a Board committee designed to strengthen the relationship between the Wikimedia Foundation and the Wikimedia communities in working toward the joint mission and vision of the Wikimedia movement. She is also an active member of the Product &amp; Technology Committee since its inception, the Governance Committee, and also serves as Board&nbsp; Liaison to the Affiliations Committee and the Movement Charter Drafting Committee. Prior to joining the Board of Trustees, Shani served as the Chairperson for both Wikimedia Medicine and Wikipedia &amp; Education User Group. She is also a founding member of the Wikipedia &amp; Libraries User Group, and a former board member of Wikimedia Israel.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Lorenzo Losa</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74546,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Lorenzo_Losa-2012.jpeg" alt="" class="wp-image-74546" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Lorenzo_Losa-2012.JPG" target="_blank" rel="noreferrer noopener">Photo</a> by Niccolò Caranti, CC BY-SA 3.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Lorenzo Losa</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Lorenzo Losa has been deeply involved in Wikimedia projects since he began editing Wikipedia in 2004. Since then, he has made over 1 million edits across different projects and filled a number of volunteer roles including Italian Wikipedia administrator, bot operator, and OTRS volunteer.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorenzo joined the board of Wikimedia Italia in 2011 and served as its president from 2016–2020. He served on the Funds Dissemination Committee (FDC) as a community-elected member (2015-2019). He joined the Wikimedia Foundation Board of Trustees in December 2021.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Originally from Milan, Italy, Lorenzo earned a Masters degree in Mathematics from the Scuola Normale Superiore. He currently leads the development of an electronic brokerage platform.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorenzo is fluent in Italian, Spanish, and English.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Jimmy Wales</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":61956,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/07/Jimmy-Wales-August-2019.jpg" alt="Jimmy Wales" class="wp-image-61956" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Jimmy_Wales_-_August_2019.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Zachary McCune, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Jimmy Wales</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><a href="https://en.wikipedia.org/wiki/en:Jimmy_Wales" target="_blank" rel="noreferrer noopener">Jimmy Wales</a>&nbsp;is an&nbsp;Internet&nbsp;entrepreneur&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/wiki" target="_blank" rel="noreferrer noopener">wiki</a>&nbsp;enthusiast, and founder of the Wikipedia project.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Jimmy was born in&nbsp;Huntsville,&nbsp;Alabama&nbsp;in 1966, and is a graduate of&nbsp;Auburn University&nbsp;and the&nbsp;University of Alabama. He worked as Research Director at Chicago Options Associates, a futures and options trading firm then located in&nbsp;Chicago. In the mid-1990s&nbsp;he started&nbsp;<a href="https://en.wikipedia.org/wiki/Bomis" target="_blank" rel="noreferrer noopener">Bomis</a>, a search portal focusing on aspects of&nbsp;pop culture, one of the first users of the freely licensed data of the&nbsp;<a href="https://en.wikipedia.org/wiki/Open_Directory_Project" target="_blank" rel="noreferrer noopener">Open Directory Project</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In 1999, Jimmy had the concept of a freely distributable encyclopedia and founded&nbsp;<a href="https://en.wikipedia.org/wiki/Nupedia" target="_blank" rel="noreferrer noopener">Nupedia</a>, by hiring philosopher Larry Sanger as editor-in-chief and assigning two programmers to write software for it. Nupedia failed, perhaps due to being a top-down cathedral model, as opposed to Wikipedia, which is the ultimate bazaar. After two years of working with the Nupedia concept, that team opened Wikipedia to help channel content into Nupedia; Wikipedia became an instant success, but not in the envisioned way, and Nupedia was shut down. In 2003, Jimmy set up the Wikimedia Foundation, a non-profit organization, to support Wikipedia and its sister projects.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In 2004, Jimmy founded&nbsp;<a href="https://en.wikipedia.org/wiki/Wikia" target="_blank" rel="noreferrer noopener">Wikia</a>. He was appointed a fellow of Harvard Law School’s&nbsp;<a href="https://en.wikipedia.org/wiki/Berkman_Center_for_Internet_%26_Society" target="_blank" rel="noreferrer noopener">Berkman Center for Internet and Society</a>&nbsp;in mid-2005, and in October of 2005 joined the Board of Directors of&nbsp;<a href="https://en.wikipedia.org/wiki/Socialtext" target="_blank" rel="noreferrer noopener">Socialtext</a>, a provider of wiki technology to businesses.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Dr. Victoria Doronina</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":65878,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2021/11/Doronina_Victoria_2021.jpeg" alt="Victoria Doronina in 2021" class="wp-image-65878" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Doronina_Victoria_2021.jpghttps://commons.wikimedia.org/wiki/File:Doronina_Victoria_2021.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Victoria, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Dr. Victoria Doronina</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Dr. Victoria Doronina is a Technical Officer at the Faculty of Education at Manchester Metropolitan University in the United Kingdom.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Originally from Belarus, Victoria was awarded a Darwin Trust Fellowship, leading to a PhD in Molecular Biology (University of Edinburgh, UK). After graduating, Victoria worked as a Postdoctoral Fellow in several Russell Group (UK Ivy league) universities specialising in protein translation. She is also an Associate Member of the&nbsp;<a href="https://www.advance-he.ac.uk/" target="_blank" rel="noreferrer noopener">Advance Higher Education Academy</a>.&nbsp;&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Victoria started contributing to Russian Wikipedia in 2006 and became an administrator. The second woman ever to be elected and the first to serve twice on the Russian Wikipedia Arbitration Committee, Victoria is a long-standing mediator in a few of the most debated topics and a Featured and Good articles moderator. In fact, Victoria was one of the initiators of the in-project mediation system.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In 2011 Victoria became a Wikimedia Community Fellow. She was involved in the initial stages of setting up the Russian Wikimedia chapter, Wikimedia.RU. She also served on the Wikimedia Funds Dissemination Committee.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Victoria is an award-winning freelance science writer. She is a regular contributor in the biology professionals hub&nbsp;<a href="https://bitesizebio.com/" target="_blank" rel="noreferrer noopener">BiteSizeBio</a>. Victoria’s writing has appeared in the Careers supplement of&nbsp;<a href="https://en.wikipedia.org/wiki/Science_(journal)?wprov=wppw2" target="_blank" rel="noreferrer noopener">Science</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/The_Scientist_(magazine)" target="_blank" rel="noreferrer noopener">The Scientist</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Argumenty_i_Fakty" target="_blank" rel="noreferrer noopener">Argumenty i Fakty</a>&nbsp;(Belarus), and&nbsp;<a href="https://en.wikipedia.org/wiki/Moskovskij_Komsomolets" target="_blank" rel="noreferrer noopener">Moskovskij Komsosmolets</a>&nbsp;(Russia). She is active in promoting the Wikimedia movement on social media and as a spokesperson for Russian and English media.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Raju Narisetti</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74548,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Raju-Narisetti.jpg" alt="" class="wp-image-74548" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption">Photo by McKinsey and Company</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Raju Narisetti</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><a href="https://en.wikipedia.org/wiki/en:Raju_Narisetti?wprov=wppw2" target="_blank" rel="noreferrer noopener">Raju Narisetti</a>’s current role as Publisher of McKinsey Global Publishing at&nbsp;<a href="https://en.wikipedia.org/wiki/McKinsey_%26_Company" target="_blank" rel="noreferrer noopener">McKinsey &amp; Company</a>&nbsp;is the latest in a 32-year global career in media and publishing, during which he has created, reimagined, and managed major media organizations&nbsp;in North America, Europe and Asia, as well as being on the frontlines of digital transformation challenges and new ventures in publishing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Raju&nbsp;worked as a journalist at&nbsp;<em>The Wall Street Journal</em>&nbsp;where, over 14 years, he went from a Reporting Intern to be the Editor of WSJ Europe, and Managing Editor, Digital, of the global WSJ, and part of a team that won the 2002 Pulitzer Prize for Breaking News for 9/11 coverage. At&nbsp;<em>The Washington Post</em>,&nbsp;Raju&nbsp;was the Managing Editor who helped kick-start the newspaper’s print/digital transformation. In both WSJ and Washington Post,&nbsp;Raju&nbsp;was the youngest and first Person of Color on their mastheads.&nbsp;Raju&nbsp;is also the founder of&nbsp;<em>Mint&nbsp;</em>(livemint.com), India’s English language business news publication.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>After his journalist stint, as a media business executive, he was Senior Vice President of Strategy for News Corp, and then CEO of the Gizmodo Media Group, which then encompassed a group&nbsp;of digital journalism sites that included&nbsp;<em>Gizmodo, Jezebel, DeadSpin, Lifehacker,</em>&nbsp;and<em>&nbsp;The Root</em>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prior to joining McKinsey in 2020, he was a journalism educator, leading the Knight Bagehot Fellowships in Economics and Business Journalism at Columbia University, where he also was a Professor of Professional Practice at the School of Journalism.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>An alumni member of the WEF’s Young Global Leader cohort (YGL Class of 2007), he is currently on the board of Friends of the Forum Foundations USA Inc., which provides oversight for funding support for YGL and Global Shapers initiatives at the World Economic Forum.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>He lives in New York City but is often found on Twitter&nbsp;<a href="https://twitter.com/raju" target="_blank" rel="noreferrer noopener">@Raju</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Luis Bitencourt-Emilio</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":66035,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2022/01/Luis-Bitencourt-Emilio.jpg" alt="" class="wp-image-66035" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Luis_Bitencourt-Emilio_in_2016.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Guru Khalsa, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Luis Bitencourt-Emilio</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Luis’ passion for technology began at an early age when his father placed him in a BASIC programming course as an 8-year-old in Brazil. That passion only grew with time, leading him to graduate with Honors in Computer Engineering and kick starting his career. Fast forwarding to today, Luis is now the father of the smartest, and just as tech savvy, 6-year-old boy and always on the lookout for the nearest dog park.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Today, Luis is based in São Paulo, Brazil, operating as the Chief Technology Officer at Loft, where he leads Engineering, Product, Data and Design at the proptech startup helping Latin Americans achieve the dream of home ownership at this top funded startup in the region. Luis is also actively involved as an Advisor and Investor supporting exciting LatAm companies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prior to Loft, Luis was based in Colombia as the Chief Product Officer at Rappi, a unicorn startup in Latin America. It was Rappi’s drive to improve the quality of life in LatAm, coupled with Luis’ deep interest in the tech scene in the region, that led him to make the move back from Silicon Valley.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Before returning to LatAm, Luis was the Founder, CTO and Board Director at Novi Money. Luis was also a senior leader in the engineering and executive teams at Reddit, Microsoft and Workpop. While at Reddit, Luis led the Reddit Knowledge Group, which owned all things related to data, machine learning, spam/abuse protection and search. He was deeply involved in Reddit’s growth stage, coordinating closely with Reddit’s communities in that evolution.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Luis is always looking for opportunities to travel; fluent in English, Portuguese and Spanish he can often be found taking full advantage of his Brazilian, American and Italian passports to experience as many cultures and places as possible.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Rosie Stephenson-Goodknight</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":65714,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2021/11/Rosie_Stephenson-Goodknight_Reno_2021_01.jpg" alt="Rosie Stephenson-Goodknight in 2021" class="wp-image-65714" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Rosie_Stephenson-Goodknight_Reno_2021_(01).jpg" target="_blank" rel="noreferrer noopener">Photo</a> by User:yarianny aybar, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Rosie Stephenson-Goodknight</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Rosie Stephenson-Goodknight is a Visiting Scholar at Northeastern University (Boston). She has a degree in Business Management, a Master’s degree in Business Administration, and a graduate certificate in Executive Leadership. In 2016, she retired from a career as an administrator in the healthcare and government sectors, where she specialized in project management, contract management, and talent acquisition. For several years, she also served as an Adjunct Professor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Rosie started editing English Wikipedia in 2007 and became an administrator in 2009. She has created more than 5,000 new articles, including more than 1,500 biographies about notable women. In 2014, she founded WikiProject Women Writers. In 2015, she co-founded Wiki Women in Red, an international, multi-language initiative focused on increasing the quantity and quality of Wikipedia articles related to women. A year later, Women in Red was shortlisted for the ITU/UN Women GEM-TECH Award for its efforts to apply technology for women’s empowerment and digital inclusion. Rosie was honored as co-Wikimedian of the Year 2016 for her work related to combating harassment on Wikipedia and increasing its coverage of notable women. In 2018, she was knighted in Serbia, her ancestors’ homeland, in part because of her Wikipedia work. A Hoosier by birth, she lives in California.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Dr. Dariusz Jemielniak</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":60484,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/06/MYHO5624-Edit-e1565972183152.jpg" alt="" class="wp-image-60484" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Jemielniak,_Dariusz_November_2018.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Myleen Hollero, CC BY-SA 3.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Dr. Dariusz Jemielniak</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Dr. Dariusz Jemielniak is a full professor of management and organization studies, the head of MINDS (Management in Networked and Digital Societies) department at&nbsp;<a href="https://en.wikipedia.org/wiki/Kozminski_University" target="_blank" rel="noreferrer noopener">Kozminski University</a>, and associate faculty at Berkman-Klein Center for Internet and Society at&nbsp;<a href="https://cyber.harvard.edu/" target="_blank" rel="noreferrer noopener">Harvard University</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Originally from&nbsp;<a href="https://en.wikipedia.org/wiki/Warsaw" target="_blank" rel="noreferrer noopener">Warsaw</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Poland" target="_blank" rel="noreferrer noopener">Poland</a>, Dariusz studies open collaboration communities, the phenomenon of organized sharing (including piracy), and anti-scientific movements. He has conducted research projects on related issues at Cornell University, Harvard University, Berkeley, and MIT. In 2014, he published&nbsp;<a href="https://en.wikipedia.org/wiki/Common_Knowledge%3F:_An_Ethnography_of_Wikipedia" target="_blank" rel="noreferrer noopener"><em>Common knowledge? An Ethnography of Wikipedia</em></a>&nbsp;at Stanford University Press, and in 2019, he published&nbsp;<a href="https://mitpress.mit.edu/books/collaborative-society" target="_blank" rel="noreferrer noopener"><em>Collaborative Society</em></a> with MIT Press (co-authored by A. Przegalinska). He has been the recipient of many academic merit awards, including a Fulbright Foundation scholarship (2004), Dorothy Lee Award for Outstanding Scholarship (2015) and Polish Academy of Sciences Chair award for outstanding scholarship (2016).</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dariusz currently serves on the board of&nbsp;<a href="http://www.kopernik.org.pl/en/" target="_blank" rel="noreferrer noopener">Copernicus Science Center</a>, as well as vice-chair of the board of&nbsp;<a href="https://escola.pl/" target="_blank" rel="noreferrer noopener">Escola</a>, a public Polish company focused on mobile app development. Previously, he was a chairperson of the Collegium Invisibile academic society (OSI initiative). He was a scientific advisor to the Ministry of Science in Poland from 2015-2016, and currently serves on the steering committee of Internet Governance Forum in Poland.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>He developed and sold three startups, including&nbsp;<a href="http://ling.pl/" target="_blank" rel="noreferrer noopener">ling.pl</a>, the largest Polish online dictionary, and is a co-founder of&nbsp;<a href="https://instaling.pl/" target="_blank" rel="noreferrer noopener">Insta.Ling</a>, a free platform for vocabulary acquisition.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dariusz has held a variety of different roles on Wikipedia, including administrator, bureaucrat, checkuser, steward, and ombudsman. He served as the chair of Wikimedia’s Funds Dissemination Committee for three terms.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Kathy Collins</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74551,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Kathy-Collins-10142023.jpg" alt="" class="wp-image-74551" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption">Photo by Bill Mintz, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Kathy Collins</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Kathy Collins has had a long career in the non-profit sector, working as a financial expert in both higher education and government. In September 2022, Kathy retired after 17 years as Vice President of Finance at Rice University, where her responsibilities included budget, controller’s office, internal audit, compliance and enterprise risk management, and&nbsp; institutional research. She was the Budget Director at Rice from 1995-2005. Kathy spent her early career with the Illinois Bureau of the Budget and with the federal government as a budget analyst with the Office of Management &amp; Budget, Executive Office of The President and then as Budget Director at the US Department of Transportation. She received a B.A. from Mount Holyoke College and a Master’s Degree in City Planning from Harvard University.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kathy recently completed two terms as a trustee at Mount Holyoke College (2013-2023), where she was most recently Vice Chair of the Board, Chair of the Finance Committee and member of the Audit, Governance and Development Committees and the DEI Task Force. She is currently on the Board of Directors of Girls on the Run, Greater Houston and a member of the Lutheran Immigration and Refugee Service President’s Council. Kathy will soon be joining the Board of Regents of Texas Lutheran University.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kathy volunteers in Houston with the Christian Community Service Center’s JobNet to help job-hunters with resumes and interview skills, and with United Way Greater Houston’s financial oversight group to review the financial health and governance of United Way partner agencies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Kathy and her husband Bill Mintz live in Houston, Texas.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Mike Peel</strong> <br>Trustee</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74553,"width":"432px","height":"auto","aspectRatio":"1.3333333333333333","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full is-resized wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Mike-Peel.jpg" alt="" class="wp-image-74553" style="aspect-ratio:1.3333333333333333;object-fit:cover;width:432px;height:auto"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Mike_Peel_cropped_for_table.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Camelia.boban, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Mike Peel</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Trustee, Board of Trustees</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>A volunteer editor since 2005, Mike Peel has been involved in many facets of the Wikimedia movement. He is an administrator on Wikidata, Wikimedia Commons, and the English Wikipedia. He co-founded Wikimedia UK and served as a trustee there for five years. He is also a member of Wiki Movimento Brasil and Wikimedia España. He served on the Wikimedia Foundation’s Funds Dissemination Committee for four years, and for the last year he was a member of a Northern and Western Europe Regional Grants Committee.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mike earned his PhD in radio astronomy at the Jodrell Bank Centre for Astrophysics in England before relocating to the Universidade de São Paulo, Brazil in 2016 to work on a new telescope,&nbsp;<a href="https://en.wikipedia.org/wiki/BINGO_(telescope)" target="_blank" rel="noreferrer noopener">BINGO</a>. His work then landed him at the Instituto de Astrofísica de Canarias in the Canary Islands, where he took part in the GroundBIRD and&nbsp;<a href="https://en.wikipedia.org/wiki/QUIJOTE_Experiment" target="_blank" rel="noreferrer noopener">QUIJOTE</a>&nbsp;experiments. Throughout his global professional experience, Mike has regularly worked with scientists and students from all backgrounds. He has supported multilingual knowledge creation through Wikidata, where he developed the multilingual Wikidata infobox that is now used in&nbsp;<a href="https://commons.wikimedia.org/wiki/Category:Uses_of_Wikidata_Infobox" target="_blank" rel="noreferrer noopener">over four million Commons categories</a>. Mike hopes to bring these perspectives to his work as a trustee to help Wikimedia grow in regions where it has historically been undersupported.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mike’s first committee assignments will be as a member of the Community Affairs Committee and an alternate to the Audit and Product &amp; Technology Committees.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"is-style-h3"} -->
<h4 class="wp-block-heading is-style-h3"><strong>Executive team</strong></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"wmf-pattern-reports-leadership__list","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-reports-leadership__list"><!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Maryana Iskander</strong> <br>Chief Executive Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":69208,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2022/10/1024px-Maryana_Iskander.jpg" alt="" class="wp-image-69208" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Maryana_Iskander.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Gabriel Diamond, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Maryana Iskander</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Executive Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Maryana Iskander is the Chief Executive Officer of the Wikimedia Foundation.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prior to Wikimedia, Maryana spent ten years as the CEO of Harambee Youth Employment Accelerator, a non-profit social enterprise focused on building African solutions to tackle the global crisis of youth unemployment. Under her leadership, Harambee received the prestigious Skoll Award for Social Entrepreneurship in 2019 for its model to support millions of South African youth with access to learning and earning opportunities.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Maryana has dedicated her career to breaking down systemic barriers of access to opportunity and education. She has a proven track record for scaling complex organizations through collaborative solution-building and community empowerment. She spent more than half a decade as the Chief Operating Officer of Planned Parenthood Federation of America. She was also the Advisor to the President of Rice University, an associate at global consulting firm McKinsey &amp; Company, and a law clerk on the United States Court of Appeals for the Seventh Circuit.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Maryana holds a BA&nbsp;<em>magna cum laude</em>&nbsp;from Rice University, an M.Sc. from Oxford University as a Rhodes Scholar, and a J.D. from Yale Law School, where she received a Distinguished Alumna Award. Maryana is also a Truman Scholar, a Henry Crown Fellow, and a member of the Aspen Global Leadership Network. Maryana also serves as a Trustee of the Yale University Corporation, the Andrew W. Mellon Foundation, and Co-Impact, a global philanthropic collective.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Lisa Seitz-Gruwell</strong> <br>Chief Advancement Officer and Deputy to the Chief Executive Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":74556,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2024/04/Lisa-Seitz-Gruwell.png" alt="" class="wp-image-74556" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Lisa Seitz-Gruwell</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Advancement Officer and Deputy to the Chief Executive Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Lisa Seitz-Gruwell is the Chief Advancement Officer and Deputy to the CEO of the Wikimedia Foundation. Lisa’s role includes leading the Wikimedia Foundation’s fundraising activities across a broad and varied spectrum that includes both individual donors and philanthropic institutions, as well as a focus on community growth and partnerships. In 2016, she helped launch the Wikimedia Endowment and serves as its President.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Before joining the Wikimedia Foundation in 2011, Lisa previously worked as Chief Operating Officer at the Rappaport Family Foundation and Skyline Public Works, a fund that blends venture capital with philanthropy; as the District Director and Press Secretary for the California Assembly Majority Leader and in several roles for then-mayor of San Francisco Gavin Newsom. She also has previously worked as a political consultant and campaign manager for Democratic candidates in California, Montana, Michigan, Connecticut and Oregon. Lisa was also appointed to serve as a Civil Service Commissioner for the City and County of San Francisco. In addition, Lisa has served as a board member of several organizations including the Montana Environmental Information Center and the Progressive States Network, and the San Francisco Rock Project.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lisa earned a bachelor’s degree in Public Relations and Political Science from Carroll College. She studied as a Coro Fellow before attending the Stanford University Graduate School of Business Center for Social Innovation in the Executive Program for Philanthropy Leaders.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Selena Deckelmann</strong> <br>Chief Product and Technology Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":67516,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2022/06/Selena-Deckelmann-landscape.jpg" alt="" class="wp-image-67516" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Photo by Selena Deckelmann, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Selena Deckelmann</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Product and Technology Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Selena Deckelmann is the Chief Product and Technology Officer at the Wikimedia Foundation. She brings more than 20 years of experience in open source technology, product management and engineering leadership.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Previously, Selena was Senior Vice President at Mozilla, where she led a team of 400 people responsible for all Firefox product and technology functions including desktop, mobile, web platform, and browser services. She oversaw some of the company’s greatest achievements including infrastructure projects like Quantum Flow and Project Fission, key features like Enhanced Tracking Protection, and services such as Firefox Monitor. In her nine years at Mozilla, Selena held various other roles including Vice President for Firefox Desktop, Senior Director for Web Platform Engineering and Gecko Runtime, and Senior Manager for Gecko Security Engineering.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Selena also brings experience from her previous roles as co-founder of Prime Radiant, a software as a service business that explored how to improve business processes at scale with checklist automation software, and as Consulting Director of Development for The Ada Initiative, an organization dedicated to increasing the participation of women in open source and technology communities. She is a Python Foundation Fellow and former Major Contributor to PostgreSQL, one of the largest free and open source databases in the world. Since 2018, she has been a member of the Oregon Sunshine Committee, an initiative focused on expanding public access to government information in her home state of Oregon.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Selena graduated from the University of Oregon. She lives in Portland, Oregon with her family.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Stephen LaPorte</strong> <br>General Counsel</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":72634,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/06/Stephen_LaPorte_NYC_2023.jpg" alt="" class="wp-image-72634" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Stephen_LaPorte_NYC_2023.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by ZMcCune (WMF), CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Stephen LaPorte</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>General Counsel, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Stephen LaPorte is the General Counsel at the Wikimedia Foundation, the global nonprofit that supports Wikipedia and the Wikimedia free knowledge projects.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Stephen began at the Wikimedia Foundation in 2012, and he has held several leadership roles in the Foundation’s Legal department, most recently as the Deputy General Counsel covering a range of legal issues including copyright, trademarks, governance, and public policy. In his past roles he has led several high profile initiatives to protect access to knowledge and defend the rights of the hundreds of thousands of volunteer contributors that edit Wikipedia and the Wikimedia projects.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Stephen is also an active contributor to&nbsp;<a href="https://en.wikipedia.org/wiki/User:Slaporte" target="_blank" rel="noreferrer noopener">Wikipedia</a>,&nbsp;<a href="https://en.wikisource.org/wiki/User:Slaporte" target="_blank" rel="noreferrer noopener">Wikisource</a>, and&nbsp;<a href="https://github.com/slaporte" target="_blank" rel="noreferrer noopener">free software projects</a>. His open source projects include interactive, real time, visualizations of collaboration on Wikipedia, including co-creating<a href="http://listen.hatnote.com/" target="_blank" rel="noreferrer noopener">&nbsp;Listen to Wikipedia</a>&nbsp;and a&nbsp;<a href="https://weekly.hatnote.com/" target="_blank" rel="noreferrer noopener">weekly newsletter</a>&nbsp;of the most edited articles on Wikipedia.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Stephen received his BA from the University of Nebraska-Lincoln, and his JD from the University of California, Hastings College of the Law.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Anusha Alikhan</strong> <br>Chief Communications Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":73138,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2019/07/IMG_1228-1.jpg" alt="" class="wp-image-73138" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Photo by Wikimedia Foundation, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Anusha Alikhan</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Communications Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Anusha Alikhan is the Chief Communications Officer at the Wikimedia Foundation.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Anusha has more than 15 years of communications experience spanning the areas of human rights, technology, knowledge access, international development, media innovation, gender equity, and healthcare. She joined the Foundation in 2019 as the Senior Director of Communications.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In her role leading the Communications department, she leads strategy to advance understanding of Wikimedia projects, and the Foundation’s values and social good mission, across external, internal and community audiences.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Previously, she was communications director for Knight Foundation, where she worked across the foundation’s focus areas – journalism, communities, arts, learning – as a thought partner and strategy developer. Before that, she served as a communications officer with the United Nations in New York contributing to the advancement of global peacekeeping initiatives, as well as a communications consultant with the United Nations Population Fund (UNFPA). She was also marketing manager for the National Parkinson Foundation, where she developed brand awareness campaigns and promotional strategies that helped increase community impact and program results. She has worked as a freelance journalist and editor.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Before embarking on a professional career in communications, Anusha practiced employment and human rights law in her hometown of Toronto, Canada. She is now based in Miami.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Anusha serves on the board of The Communications Network and Awesome Foundation Miami and is a member of the Communications Network working group for diversity, equity and inclusion. She has a master’s degree in journalism from New York University, a law degree from Queen’s University in Ontario and an honors bachelor of arts from the University of Toronto.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Courtney Bass Sherizen</strong> <br>Chief Talent and Culture Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":73141,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2023/06/Screenshot-2023-06-27-at-10.06.41-AM.png" alt="" class="wp-image-73141" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Photo by Efraín Villa, CC BY-SA 4.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Courtney Bass Sherizen</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Talent and Culture Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Courtney Bass Sherizen is the Chief Talent and Culture Officer at the Wikimedia Foundation.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Prior to joining Wikimedia, Courtney was a Director of People Operations at Google. While at Google, Courtney created the Global HR Crisis Management Office and was a Lead People Partner, coaching and advising over 100 senior leaders across the organization.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Courtney began her career as an 11th grade English teacher with Teach For America in Philadelphia, Pennsylvania. Following that, she founded a travel consultancy in Beijing and, in her spare time, had acting roles in Chinese soap operas. Courtney has also supported leaders in both for-profit and not-for-profit sectors as a management consultant for Monitor Deloitte. Her work centered in developing strategies for a major US health insurer, a global consumer goods organization, a defense arm of the US government and a national non-profit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Courtney holds a B.A. in History from Harvard College. In college, she received a certificate in African Studies and was selected as her graduating Class Day speaker. She also has a M.B.A. from Harvard Business School and a Certificate in Organizational Leadership and Coaching from Northwestern University. Courtney sits on the Board of Directors of the Donors of Color Network and Beta Financial Services. She is based in Las Vegas, Nevada where she lives with her husband and son.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"has_overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has_overlay"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-as-link overlay__trigger"} -->
<div class="wp-block-button is-style-as-link overlay__trigger"><a class="wp-block-button__link wp-element-button"><strong>Jaime Villagomez</strong> <br>Chief Financial Officer</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:wmf-reports/overlay -->
<!-- wp:group {"className":"wmf-pattern-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-overlay"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"lightbox":{"aspectRatio":"4/3","className":"is-style-default wmf-pattern-overlay__image","enabled":false,"id":65396,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/news/2021/09/14/wikimedia-foundation-appoints-maryana-iskander-as-chief-executive-officer/maryana_iskander/"},"id":56326,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wmf-pattern-overlay__image is-style-report-image"} -->
<figure class="wp-block-image size-full wmf-pattern-overlay__image is-style-report-image"><img src="/wp-content/uploads/2018/06/Villagomez_Jaime.jpg" alt="" class="wp-image-56326" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Villagomez,_Jaime_February_2016_01.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Myleen Hollero, CC BY-SA 3.0<mark>File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"className":"wmf-pattern-overlay__heading is-style-h2","style":{"elements":{"link":{"color":{"text":"var:preset|color|wmf-report-blue"}}}},"textColor":"wmf-report-blue"} -->
<h4 class="wp-block-heading wmf-pattern-overlay__heading is-style-h2 has-wmf-report-blue-color has-text-color has-link-color">Jaime Villagomez</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chief Financial Officer, Executive Team</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Jaime Villagomez is the Chief Financial Officer for the Wikimedia Foundation overseeing strategic planning and budgeting and financial and administrative operations for the organization since February 2016.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Originally from San Francisco, Jaime provides a deep, international business experience from working around the world, including in Latin America, Europe and Asia. Prior to joining Wikimedia, he was the Chief Financial Officer at San Francisco Bay Area-based software company anyCOMM Corporation and the Karum Group; as Vice-president, Finance, at Advent Software and QRS Corporation; and as Vice-president and Controller at Northpoint Communications.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Jaime obtained his Bachelor of Science degree in Electrical and Electronics Engineering from Stanford and an MBA from University of Pennsylvania – The Wharton School.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:wmf-reports/overlay --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"id":74597,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/George-peabody-library_2a0269.jpg?w=1024" alt="" class="wp-image-74597"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:George-peabody-library.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by Matthew Petroff, CC BY-SA 3.0<mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Donors"},"align":"wide","className":"wmf-pattern-reports-donors","includeInToC":true,"tocLabel":"Donors","tocSlug":"toc-donors"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-donors"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Donors</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Celebrating and thanking the Wikimedia Foundation’s generous donors</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:wmf-reports/thank-you /-->

<!-- wp:image {"id":74559,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2024/04/Heart.png?w=144" alt="" class="wp-image-74559"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>With immense gratitude, we extend our heartfelt thanks to all our donors globally. Your steadfast support and generosity propel our mission and create meaningful impact worldwide.<br><br>We want to especially acknowledge those who contributed significantly during the fiscal year 2022-2023. Your extraordinary generosity has been instrumental in sustaining our projects and initiatives.<br><br>To every benefactor, you are a vital part of our community, and your commitment to furthering the Wikimedia Foundation's mission is truly inspiring. Together, we are forging a world where knowledge transcends boundaries, allowing individuals from diverse backgrounds to benefit from the wealth of information provided by Wikimedia projects. Your support empowers us to continue our journey toward fostering a more knowledgeable, connected, and equitable society.<br><br>Below is a list celebrating those who gave $1,000 or more during the past year:</p>
<!-- /wp:paragraph -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper undefined"><!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Major donors<br><mark class="has-inline-color has-wmf-report-blue-color">$50,000+</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Acton Family Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alfred P. Sloan Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Apple Inc, Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Arcadia</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ASML</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Antoine Bello</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brave browser users</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charina Endowment Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Crankstart Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Foundation for a Better World</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Amy Fulton Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Google.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Google Matching Gifts Program&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Hinman Charitable Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>HPE Accelerating Impact Initiative</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Horizons Ventures Techcracker: Miwa Seki, Yumiko Murakami, Kathy Matsui, Adam Maxwell, Erika Milczek, Andy Kleitsch, Michael Biercuk, Pierre-Yves Paslier, Rodrigo Garcia Gonzalez, Cheri Ackerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>I.W. Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kaphan Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>King Baudouin Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>MathWorks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Microsoft Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Montgomery Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn and Kurt Riedel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Scheinberg Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Simons Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stichting Sub3</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tony Wheeler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WoodNext Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous Donors</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Patron donors<br><mark class="has-inline-color has-orange-color">$15,000 – $49,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Adobe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kyle Aster</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill and Melinda Gates Foundation Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bloomberg LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Boeing Company Gift Match</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cisco</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Helen Clawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Giuliani Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Geltz and Elizabeth Hands Geltz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Heartsprung Fund WA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Heising and Elizabeth Simons Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intel Corporation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Asa Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay and Mary Jones</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Eric Jordan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JVR - Murray and Jan Ritland Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keough Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda Kintzel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Oleg Krot</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>N1243</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gregory and Kathy Nelson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wheeler and Elizabeth Munro</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chris Peterson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Renée B. Fisher Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Salesforce.com Foundation Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Silverleaf Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Seiwald</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Shor Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Diana Strassmann and Jeff Smisek</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Tai &amp; Kin-Ching Wu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul von Kuster</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elmira Choopani &amp; Khanh Vu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Leading<br><mark class="has-inline-color has-wmf-report-purple-color">$5,000 - $14,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>A &amp; J Saks Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Alison Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Alwan Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A-Mark Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert G. Andrews</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Prabhu &amp; Rina Balasubramanian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bank of America Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steedman Bass</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joe and Rachel Beda</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Behemoth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stefan Bengtsson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven and Sandra Berglund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andy &amp; Elliot Berndt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BlackRock Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samuel Bowen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phil &amp; Valerie Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Van Dalsen and Tor Braham</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Julia Butters</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Canfield</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caterpillar Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Chambers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chevron Matching Employee Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Circiello&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Liam Connell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Cook</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Cooper-Siegel Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CouponFollow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Covington Family Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter S. Dixon, MD.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Dixon and Joan Cresse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Durst Organization LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Elevate Prize Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Epic Games</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex &amp; Patricia Farman-Farmaian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frumkin Falco Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian &amp; Rebecca Geisel, Geisel Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Genentech Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Betty Harrell Gerlack</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Russell Gersten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tyson &amp; Elizabeth Gill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Spencer Glendon and Lisa Tung</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donald E. Graham</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Grainger Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kiwan Gu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guttman Family Donor Advised Fund gGmbH</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Haahr and Susan Karp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ryan Hamerly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Helen Ingham Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hewlett Packard Enterprise</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don &amp; Paula Heye</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Heising and Elizabeth Simons Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>HPI</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tim Huang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Ibbotson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isambard Kingdom Brunel Society of North America</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Secoy Krach Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jericho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Johnson &amp; Johnson Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amy and Josh Jernigan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JP Morgan Chase Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr. Susan and Esabeau Kendall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sung-Hou and Rosalind Kim</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>KLA Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kusik Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kirk Laughton and Chang Woo Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laxmi Family Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phillip Lawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward A. Lee and Rhonda Righter</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Soon Lee and Andrew Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leon Levy Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Josh &amp; Sara Leslie</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Levine &amp; Yael Taqqu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leo Liu, MD</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Li Lu Humanitarian Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>LinkedIn Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Luetschine Consulting LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of my father Dr. Bradley W. Maring</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Greg and Elizabeth Stanton Marra</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Darrin Massena</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Mayo-Smith &amp; Leslie Vensel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward McCullough</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The McLean Family-Lincoln Nebraska</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Al and Margo Merck</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth Meyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Milner Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sheila Mossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mycelium Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nike Employee Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nvidia Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David OBrien</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Oracle Corporation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>P&amp;C Collins Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pearlstein-Hollingsworth Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Drew and Lola Perkins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Peters Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pipkin Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pfizer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>PlayStation Cares</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Quinn-Newall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Raytheon Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Revada Foundation of the Logan Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Barbara Brookover Richards</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rick &amp; Susan Goings Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rockefeller Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruth and Peter Metz Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Ryan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yann Samuelides</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Schmale Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roy Schneiderman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mick &amp; Alison Seaman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Shanbrom Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H Rodney Sharp III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ed and Elaine Shoben</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shane Skikne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scooter Software</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>S&amp;P Global Community Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew and Elizabeth Spokes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sprague Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Doug Standing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Timothy Steinert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Takeda Pharmaceuticals North America, Inc Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Texas Instruments Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rabbi Rob and Lauren Thomas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>UHG</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J.P. Brinker-Uys</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Visa</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>VMware Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charlotte von der Hude</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ted Waitt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walt Disney Company Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rich Warner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Watkins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Adam and Abigail Winkel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wright NY, NY</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee Xu&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yen Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Greg and Margo Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth and Anna Zankel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zegar Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard and Angela Ziock</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Sustaining<br><mark class="has-inline-color has-green-color">$1,000 - $4,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Abbott Laboratories - EGC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AbbVie Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Adams</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ADP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Agilent Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Howard Ahmanson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AIG Matching Grants Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Hani Akkawi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Albert E. Harrison Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alcon Vision, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Allstate Giving Campaign</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Ryan Alexander&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alice Greene McKinney and E. Kirk McKinney, Jr. Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca Allen&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Ann Allen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ian Almond</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amateur Radio Digital Communications (ARDC)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AMD</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>American Express Company Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>American Express Give2Gether Campaign</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ameriprise Financial, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amgen Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analog Devices</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sarah Anderson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joe and Barbara Andrade</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alexandros Andrianopoulos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flavia &amp; Bernie Anger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Applied Materials Foundation Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Maite Arango</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Etienne Ardant and Laurence Lapeyre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward and Sallie Arens</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Garner Ted Armstrong Evangelistic Association</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ben Arthur</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ASML</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Siddharth Asnani</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AstraZeneca Pharmaceuticals LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Atlassian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Avants</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rick and LaNae Avra Giving Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Autodesk Foundation Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Ayers Investment Management</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mohammad Azab</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bae Systems</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rose and Neil Baird</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Baldauf</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ball Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott &amp; Cyan Banister Freedom Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Bantivoglio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ken Baron</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Barta</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Carol Baskauf</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Bates and Mini Pathria</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Juan Battle &amp; Michael Bennett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Bay</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BD Group Matching Gift</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nicolette Getty Beck</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent Beckley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Émile Beguin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samy Bengio and Elaine McMurray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joan Berman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Dudley Berry, Jr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sravan Bhamidipati</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K.S. &amp; Jayashree Bhaskar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Peter Bial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>René Bilodeau and Naomi Black</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Biogen MA Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Graeme Birchall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer and John Bird</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marc Birling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Black</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dominika Blackappl&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Blacklock and Gabriele Amtmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark and Deborah Blackman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Bloch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Blum</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent Blumenstein &amp; Anne Ryan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jabe Blumenthal &amp; Julie Edsforth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Blush</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BNY Mellon Community Partnership Employee Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Boberschmidt and Nancy Gross</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charu and Jeff Bogdan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas A. Booth and Margaret Simpson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walter and Marguerite Bopp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Booz Allen Hamilton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Cleona "Ione" Botkin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Bowers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff and Lauren Bowman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Boyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Debra Boyle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David H. Bradley, Sr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Glenn Brandimarte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Briggs &amp; Hisayo Tago</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bright Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Brill&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bristol-Myers Squibb</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Broadcom</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bernhard Brodowsky</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Brönnimann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian and Melissa Brothers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charley &amp; Kathy Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Brown&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey and Marguerite Browne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Brubaker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sailesh R Buddhavarapu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robin and Thomas Burch Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Louis Burgener</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Burkhart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chica Burnett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Patrick Butler III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barry Buzan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cabin Fund, Santa Fe Community Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cadence Design Systems, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marta B. Calás</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Craig Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Colin Chandler Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Ammar Campa-Najjar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Gary D. Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Capital Group Companies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cargill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Max Carlson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carmax Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca and Irad Carmi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Toby Carrodus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K. Bradford Carr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charlie &amp; Darian Carson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kyra and Ken Carson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Max Schaefer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Margaret Casbourne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cascade Asset Management</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Cassidy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CDK Global, LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CDW Coworker Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tantek Çelik</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sumir Chadha</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Merle Chambers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dileep Jivanlal Champaneria</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith Chapman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Maxfield Parrish and Gloria F. Parrish Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Schwab</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Saul and Nan Chase&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Curtis Chen and Jennifer Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ken Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pengyuan Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Viola Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Veeraswami Chennamsetty</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Chernick</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stuart Cheshire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chevron Humankind Matching - Retirees</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andy Chiang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gilbert Chin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Chorost and Victoria Nugent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Choy &amp; Shannon Moffett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee and Amy Christel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ciena Cares Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CIGNA Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lawrence Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stuart &amp; Wendi Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christine and Michael Clarke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rich and Joana Clayton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jacqueline Clinton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Coca-Cola Company</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthew Coleman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Costantino Colnaghi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Comcast</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martha Gates and Spencer Commons&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guy and Helen Connolly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Constellation Energy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda D Cooley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Cooper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephanie J. and Ted Coopman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Costanzo&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Costco Wholesale Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gretchen Cotter</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Cowart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stone Coxhead</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Meg Coyle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Roger Edward&nbsp; Broughton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alain Crain, in honor of Diana Strassmann in recognition of her extensive contributions to&nbsp; education by her teaching, writing, and years of active engagement with Wikipedia.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Beth Crane and Richard McKee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lillian Creighton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anna Crivici</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Crow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Crowe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Crump</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Cunningham Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Cutler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cyan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Terrence Daly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AnnaMarie Daniels</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sauparna Das</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Claudia Davidoff and Joseph Kahan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dauber Family V Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Lucile Packard Foundation Matching Grant Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martha K. Davis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Davis-King &amp; Associates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H. Andrew Decker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carole Deitrich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pierre Deligne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caroline and Lloyd de Llamas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yonca Dervişoğlu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen &amp; Elizabeth Detwiler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>B. Devereaux</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gayatri Devi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joshua Dezube</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven DiCarlo&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Dickey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Josh Dillon &amp; Effie Seiberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher C. Dixon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A Sibbald Doan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Dodenhoff and Nancy Sicotte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Doerr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dokali Megharief Education Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter and Linda B. Dooley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Dowling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jesse Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Karen Berger Drastal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim and Wendy Drasdo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pierre Drion</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dropbox, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Duke Energy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Dunn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edgar Durbin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Durst Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>eBay, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Carol L. Ebert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Eddings</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pamela Edillon, MD and Teresa Sarlitto</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ralph Edler&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron Bailey and Bill Edwards</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen and Leslie Ehrmann, in memory of Dorothy Ehrmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Casey Eichenberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Eisenberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elasticsearch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Electronic Arts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Simon Ellgas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Bill Ellison</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hashem Emami</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Emch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Energizer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Esposito&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Evans</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Expedia Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>F5 Networks, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>FM Global</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fred Falkner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ann Fallon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hany Farid</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Feng</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feral Interactive Limited</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan and Elizabeth Finkel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tatiana Finkelsteyn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Fisch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Fishman&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jody Fleischer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Florida First Capital Finance Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carla and Charlie Flournoy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>For everyone who wonders</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Ford</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Forrest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fournier Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mr. Peter Ernst Francati</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Juanita Francis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bernard Francois</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Reynolds Architects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of George H. Frank, a brilliant, kind man and a loving father who is missed every day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark and Janice Franzen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Fregeau&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kathy French</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hunter Freyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Fry and Meidee Goh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles James Gallant III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Julie and Rafael Garcia Giving Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gartner (The Matching Gift Center)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Beverley Gasner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michèle Ray Gavras&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Famiglia Gazzetta&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The GC Companies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GE Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don Gensler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James George</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aaron Getz &amp; Sheila Geraghty Getz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Gerrard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George &amp; Alice Rich Charitable Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Gibbs&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gilead Sciences, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amanda Ginther</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GitHub</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GivingForce Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K. Reed Gleason</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Emily and Sam Glick</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Glidden&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kelly &amp; Jeff Glisch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gpe and Gmo Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Terence Go</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norman Godinho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Ira Gold</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Monica and Danny Gold</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Annelise Goldberg in honor of Max Goldberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Goldman, Sachs, and Co. Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Goodman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phil Gormley and Erica Bisguier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J. Alex Graeffe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Temple Grandin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Babette Krolik and Harry Greenwald in honor of their children</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce and Erica Greer Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Daryl Grime</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Grosse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Grossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cornelius N. Grove</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Beth Guard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alexander M. Guest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jerome Guillen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Egils and Anne Gulbis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Henry Gurr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Gwinn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kelsey and Scott Hadley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Hakel Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pauliana Hall and Eric Hall, Esq.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark D Halperin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hamilton Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bob Hammond</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guy and Julia Hands</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael and Sheila Hannah</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wells Hansen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>F. Dok Harris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Gina Harris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harvest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barry Harvey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Hase</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne Hathaway</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>M. Hawley, in Honor of Ryan Turner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Hazelbaker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>healthinsurance.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hearst</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron and Beth Heiby Family Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frances Hellman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Henry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Mary and Paul Henry Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Amanda Henson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bobby Hernreich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael and Kimberly Hicks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hideous Weasel Butt LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tran Ho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Hobart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Home Depot Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Ben Hesper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of Emily Catherine Holzer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carol Hooker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>hopeful earth foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dermot Horgan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Morgan Hough</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Orville E. Howard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Howes&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Else Hoyrup</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel and Celia Huber</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff and Kristin Huget</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H Scott Huizenga</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zachary W. and Elizabeth S. Hulsey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IBM</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carla and Philippe Ifrah</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Ignat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IMF</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Indeed, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In support of those who cannot give</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Infeld</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intetics Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intuit Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intuitive Surgical, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IQVIA Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roshan Isaac</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Israel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ITW Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sigrid &amp; Roy Jablonka</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chip Jackson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Jackson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rex Jaeschke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Jaffe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dirk Jagdmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet and Wilson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jericho Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JK Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Deere</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Borge Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Joss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Boyan Jovanovic</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Jove and Moriel Levy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin Joyce&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tanya Joyce</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Dr. James L. Julian, who cherished knowledge above all else</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Karen Jurewicz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Kamer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of APJ Abdul Kalam, former President of India</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kalpatharu Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Maryann Karlen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Karplus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Kass</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Katz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca Krantz and Donald Katz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>KDSM Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Kelly and Germaine Fuh-Kelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan S Kelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Lowe Kennedy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brett and Susan Kennelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tom and Laura Kent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert M. Kern</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keysight Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kheterpal Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth and Albert Kidd</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Kienast</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anthony, Su-Hyun and Tae-Yang Kim</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jesse and Kimberly Kinder</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donald A&nbsp; &amp; Janemarie D King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Harold D. King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>King Cheadle Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sam King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The James Kinsella and Robert McNeal Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Kipping Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nancy Kleinrock</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eric Klusman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron Knapp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey Knauth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dillon Knezacek</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Koepp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Igor Kopylov</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Koshland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kurt Kufeld</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthias Kunze&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith and Patricia Kusunis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Francois René LACOSTE</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Lake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tom and Evelyn LaMers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lam Research</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Honor of Spencer Lang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janna Smith Lang and Kurt F. Lang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tanja Lange</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jane Lansing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Lapeyre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne and Karen Lattuca</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lawrence Livermore Labs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet Lawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Felicity W C Leong</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eunjin Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bonnie Lemert&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark A. Lemley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leo Model Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Lenski</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richards and Leong Family Trust</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nathan Leventhal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marc Levoy and Laurie Winslow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lai-Yet Lam &amp; Peter W. Lew</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don Lewis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Wei-Ching Liao</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dylan Liebgott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lilly US Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matt Limmer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tsung-Yin Lin&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lincoln Loop</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Lingle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan Ellis and Mark Linton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of my friend Thomas D. Lombaer and separate listing Spencer Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mario Londono</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda Look</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Felix Lopez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rayson Lorrey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith Loritz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Philip Loughlin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>love of words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anahita and Jim Lovelace</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joyce Lowinson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marilyn Lucht</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Lucy Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jing Li and Yeming Luo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott and Julie Lynch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Natalie Ma</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Bruce MacEvoy and Janet Randall Trust</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen Mackain</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Madabhushi Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matt and Kristin Maguire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Emily Maier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Victor Mair</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Malatesta</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Marcus and Kitty Juds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Macquarie Group Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Marinelli Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Goran &amp; Kelly Marnfeldt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Mart Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin &amp; Ottaway, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel L Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean-Philippe Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Marx AIA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jack Mason</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>MasterCard Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Catherine et Frank Mathis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Preston McAfee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Koshland and James McCaughey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walter and Nancy McClure</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John McGeehan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth McGlynn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jenna McGugan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Mcinnis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James McKinney</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>McKinsey &amp; Company, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John McLaughlin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mcmaster-Carr Supply Company</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Medtronic Foundation Volunteer Grant Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of&nbsp; Lillian M. Mehr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Mendez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Girish Menon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Merck Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kathleen Messina</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Micron Technology, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthew Midboe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Middle Road Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Uncle Mike</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mildred B and Radhe Mohan&nbsp; For The Mohan Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Midvale Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Westin Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kimberley Sloan Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wannett and Ralph Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alicia Mills</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Minassian Media</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ronald Minnich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Patricia and Charles Mintz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Mitchell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Riaz &amp; Lily Moledina</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Money Penny</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Meridee Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Colin and Roberta Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norma Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Brent Moore and Jennifer Stichman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Moores Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brigitte Morel-Curran</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Morgenthaler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Viktor Moros</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr. Amy S. Morris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dr Shirley Margolis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff Morrow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Seth Morton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Felix Moses</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Les &amp; Carol Moss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joaquin Mostany</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Motorola Solutions Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tim Mott for Sam Mott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Msquared Groep</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chandra Mukerji</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Mumford</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jack Munson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Murin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Murphy USA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary G Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William M. Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kimbal Musk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jasmine Nabi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>nafSadh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>National Instruments</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Ali Nariman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruediger Naumann-Etienne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Neisler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Nelson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>NetApp, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Netflix</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Newman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>New Orleans Roofers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jerry Newman Willowridge Partners, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hải Quân Nguyễn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Theodor Nicol</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kirsten Niemeyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Nikopoulos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nintendo of America</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Niteo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Noakes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy M. Norman and Patricia G. Gilbert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nordstrom Charitable Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Novartis Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The O'Brien Family, New Jersey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The OceanRain Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Olive Bridge Fund of the Oregon Community Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Omidyar Group</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norm ONeill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin and Laura O’Shea</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin O'Shea</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brendan O’Sullivan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Oelke and Sylvia Hysong</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen Oganowski</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One Point Of Light Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex Opal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Open Knowledge Association (OKA)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Ordal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Osborne Partners</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ottaway Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Rita Ousterhout</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pacific Gas and Electric Company&nbsp; Employee Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Manisha Kher and Manoj Padki</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Catherine Paessun</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Giancarlo Pallavicini</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Palo Alto Networks, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Justin Palpant</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jhilmil Pandit &amp; Punchhi Pandi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paramount</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda and Peter Parshall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Paul&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Pazirandeh Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>PayPal Gives Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Peierls</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Pennisi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pentair Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pepsico Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William E. Perry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Perullo Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne Pfeiffer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anny Beideler-Pfister and Christoph Pfister</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phillips 66</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In the memory of Andrew G. Phillips</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Duane and Laurie Phillips</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laura Philips and John Elliott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hart &amp; Rebecca Phinney and Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carmen Piccini</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pieper Electric, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Pieper Sr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Carol Pieper in honor of Donald Roger Pieper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Pittman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The PixInsight Project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Timothy Pletcher</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill Plummer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mike Potel and Cathy Frantz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of James D. Powell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J. David Powell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Pretlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Prescott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rob and Anna Prestezog</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Tom Price</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ryan Price</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Prinzmetal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nicholas and Susan Pritzker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Progressive Insurance Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Prudential Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laura Murphy and Bill Psillas&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Publicis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Katrina Pugh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Purjes Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen Pyryemybida</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dr. Agnar Pytte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Qualcomm Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Praveen Ramaprabhu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffery and Patricia Randall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pratima Rangarajan and Gregory Gillette</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William &amp; Anne Rasnake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kate and Paul-Erik Raue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ian Reasor and Jamie Molaro</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kristin Rechberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Rechnitz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Red Hat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Regeneron Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Resnick and Caroline Richardson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scheryle Reuss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>RELX Group</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Rhodes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James and Cynthia Richardson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tarrus Richardson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Riot Games, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Derek Riley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ripples A Not For Profit Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Green Rives</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Robert and Vivian Lamb Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Robillard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Wood Johnson Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roblox</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roche Molecular Systems, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Memken and Michael Rogers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brittany Rohrman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Georg Romero and Margaret Loos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dan Roper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elly Rose</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Rosenberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dennis Rossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sievert Rohwer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mathieu Rouleau&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Abraham Rowe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruby Family Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bow and Erina Ruggeri</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel and Lynne Russell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rusty Russell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>M. Duane Rutledge</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Sachs &amp; Mary De Voe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rohini Sabikhi and Tushar Chandra</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent &amp; Neri Sandweiss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Sargent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Salesforce.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samsung</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SAP Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sasa and Calvin Lin Charitable Fund”</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron and Sally Sassen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Satterwhite</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elaine Scarry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Schaffer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Schattner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Scheinman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen and Damon Scheppelmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Schloss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Schmidt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Schneider Electric North America Foundation Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Schneider</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andreas Scholten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex Schwendner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Scott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dominic Scriven OBE</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pretzel Semus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dhruva R.J. Sen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Randall Seright</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ServiceNow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Severance</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The S. Garbus Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David A. Shapiro, MD &amp; Sharon L. Wheatley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nate and Julia Sharpe Charitable Gift Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rasha Shehada</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bradford Sherburne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Austin Short</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Dr. Donald W. and Ann P. Shunn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Silicon Valley Bank</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Simons</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aahana Singal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hartaj Singh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shamina Singh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evan M Smith of Berkeley CA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fred and Li Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Mary J. Stanley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Toni and Joe Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Travis Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sara Smollett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donna and Alec Smythe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Sofield</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aaron and Jamie Solak</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Some old physicist</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanita Sood</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Sopko</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Soros Fund Charitable Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joel Spiegel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sports Reference LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Soros Fund Charitable Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>D. Squire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The St. Dima Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Stadtfeld&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Russell Staley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Standard Insurance</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Stanis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Starbucks Corporation - Partner Match - Financial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert P. Starling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cesar Stastny&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>State Farm Companies Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Albert &amp; Candace Staton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Virginia Steel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christie Steier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce G. Stewart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Revin Stoker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David R. Stoutemyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joan Strassmann and David Queller&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Sutherland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Richard Sutton&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Synchrony Financial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Synopsys Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Norman E. Tanis, Dean of the University Library at Cal State University, Northridge</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Atul Tandon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Tanksley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Taylor and Hans Reiser</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dale Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harrison Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Julian Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thermo Fisher Scientific Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gwen Ewart and Bob Thomas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of Dolly Thompson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Thonis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ben Thul</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Beth Tidwell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Tjiang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>To our beloved Jack and Henry — Seek God, truth and wisdom</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>T-Mobile USA, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Tobert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tina Tomsen, MD&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tomas Torres</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kristof Toth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael P Totten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>TOYOTA InfoTechnology Center</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kit Transue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>T. Rowe Price Program for Charitable Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>禪</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John &amp; Bernice Tulloch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tungare Manohar Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John B. Turner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Turrell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two Sigma Investments LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Tykeson and Ken Hiday</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>USAA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Van de Wiel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanguard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yuan Zheng &amp; Jeffrey van Gogh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gert van Manen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jos van Schagen and Marjon Floris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Betty Vandenbosch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Vandermeer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanistendael Gaí‚tan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jos Vankan, Royal Netherlands Aerospace Centre NLR</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Richard M. Van Slyke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Varian Medical Systems</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Louis Vera</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Veritas Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Verizon Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vertex Pharmaceuticals</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ViaSat Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan Vice</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caitlin, Patrick, and Molly Virtue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Johann Volz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Voya Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jens von der Heide</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anthony Vu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jane Waddell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cynthia C. Wainwright and Stephen Berger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cynthia Walk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bret Walker AO SC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Warner Media</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joyce Watson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stan &amp; Karen Watt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anas Wattar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dan Wayland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Clare and Richard Weinberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Welsh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wendroff and Associates, CPA&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thurman Wenzl</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WePay</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pam Kochiss Werth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Glenn Westley and Jeanne Holzgrefe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WestWind Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In gratitude to the Wikimedia Foundation Technology Team</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of the Wikipedia Staff</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mandy Whalen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet White and Michael Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill &amp; Cynthia Wilby</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wiley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Benjamin Wiley Sittler and Rebecca Middleton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William &amp; Flora Hewlett Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Lacey Williams&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ms. Caryl and Janice McNeilly and Dr. Robert E. Williamson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Adam Winsor Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Dean and Helen Witter Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Sam Wolpert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wonderful Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr Raymond J Wootton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Workday, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Wright</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sing-Yung and Yvonne Wu&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jason Wyse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Xiaoping Xu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yahoo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Yamane</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yee Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Yngve</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Yonash</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alice Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin and Donna Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mimi Yu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wendy Zacchio&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Majid Zarrinkelk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pamela Zave</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Provost &amp; Stacey Zelbow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Zerhouni Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eric Zhang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Liang Zhang&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zhuqing Zhang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Stepp and Peter Zimmer Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Zimmerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tushar Shah and Sara Zion</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Endowment"},"align":"wide","className":"wmf-pattern-endownment","includeInToC":true,"tocLabel":"Wikimedia Endowment","tocSlug":"toc-wikimedia-endowment"} -->
<div class="wp-block-group alignwide wmf-pattern-endownment"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Wikimedia Endowment</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Sustaining Impact</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Wikimedia Endowment launched in 2016 with an aim to create a permanent fund to support Wikipedia and other Wikimedia projects, sustaining our mission well into the future. <strong>This year, the Endowment reached an important milestone: a portion of its investment income was used to support the technical innovation of the Wikimedia projects.</strong> In a series of interviews with Endowment donors, we heard repeatedly about the desire to use their donations to support technical innovation to keep the Wikimedia projects relevant in a rapidly evolving world. <br><br>The focus on technical innovation also supports the Endowment’s long-term vision for maintaining the projects, including sustainable technical infrastructure. The projects chosen align with current and existing work being done to improve and innovate on Wikimedia projects in collaboration with volunteers. The recipients are:</p>
<!-- /wp:paragraph -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Abstract Wikipedia and Wikifunctions</strong></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://meta.wikimedia.org/wiki/Abstract_Wikipedia" target="_blank" rel="noreferrer noopener">Abstract Wikipedia</a> aims to build a knowledge base independent of language, making it easier to share, add, translate, and improve knowledge across languages on Wikipedia. Wikifunctions is the underlying technical infrastructure that supports the project. Abstract Wikipedia’s technical development is led by the Wikimedia Foundation.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Kiwix</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://www.kiwix.org/en/" target="_blank" rel="noreferrer noopener">Kiwix</a> is a non-profit that provides an offline reader for Wikipedia content, making knowledge more accessible to people around the world regardless of internet connectivity. Kiwix has over 10-12 million users spanning 200 countries.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Machine Learning</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>Led by the Wikimedia Foundation’s <a href="https://www.mediawiki.org/wiki/Machine_Learning" target="_blank" rel="noreferrer noopener">Machine Learning</a> team, this programmatic area of Wikimedia work focuses on building and strengthening AI and machine learning infrastructure on the Wikimedia projects. Machine learning tools make the work of volunteer editors more efficient, enabling them to focus time on edits that require complex human judgment. This<a href="https://www.mediawiki.org/wiki/Machine_Learning/Modernization#Machine_learning_modernization_efforts" target="_blank" rel="noreferrer noopener"> work</a> includes the development of algorithms to measure the quality of Wikipedia articles and machine learning models that help catch incidents of vandalism on Wikimedia projects.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Wikidata</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://www.wikidata.org/wiki/Wikidata:Main_Page" target="_blank" rel="noreferrer noopener">Wikidata</a> is the multilingual, structured knowledge base that powers knowledge on Wikipedia. With more than 100 million data items, it is the most edited Wikimedia project. Wikidata more easily connects knowledge from Wikimedia projects with machines, including voice assistants, websites, and other platforms that leverage Wikimedia content. The Endowment grant will fund the existing multi-year plan for the project, which is led by Wikimedia Deutschland in collaboration with the Wikimedia Foundation.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:paragraph -->
<p>We are excited to see how Abstract Wikipedia, Kiwix, Machine Learning, and Wikidata strengthen our technical infrastructure and innovation.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Read more in the Wikimedia Endowment Annual Report <a href="https://wikimediaendowment.org/reports/2022-2023-annual-report/" target="_blank" rel="noreferrer noopener">here</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Help Ensure Future"},"align":"wide","className":"wp-block-wmf-reports-donate","backgroundColor":"red90"} -->
<div class="wp-block-group alignwide wp-block-wmf-reports-donate has-red-90-background-color has-background"><!-- wp:heading {"level":3,"className":"is-style-default"} -->
<h3 class="wp-block-heading is-style-default"><strong>Help Ensure Wikipedia's Future</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Giving for today</strong><br>Making a gift today is the simplest way to ensure that Wikipedia remains strong,&nbsp;stable, and always there when you need it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Giving for tomorrow</strong><br>The Wikimedia Endowment is a safety net that helps protect Wikipedia now and into the future. Legacy gifts to the<a href="https://wikimediaendowment.org/" target="_blank" rel="noreferrer noopener"> Wikimedia Endowment</a> make an impact for years and years. By including Wikipedia in your will, estate planning, retirement plan, or insurance policy, you can leave a beautiful legacy for the next generation of Wikipedia users.&nbsp;<strong>To learn more email </strong><a href="mailto:legacy@wikimedia.org"><strong>legacy@wikimedia.org</strong></a><strong> or click the link below to explore other ways to give to the Endowment.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-open is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-open is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="https://wikimediaendowment.org/ways-to-give/" target="_blank" rel="noreferrer noopener">Learn More</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary has-icon has-icon-heart-pink"} -->
<div class="wp-block-button is-style-secondary has-icon has-icon-heart-pink"><a class="wp-block-button__link wp-element-button" href="https://donate.wikimedia.org/w/index.php?title=Special:LandingPage&amp;country=GB&amp;uselang=en&amp;wmf_medium=wmfSite&amp;wmf_source=74191&amp;wmf_campaign=ARFY2223" target="_blank" rel="noreferrer noopener">Give Today</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"id":74560,"sizeSlug":"large","linkDestination":"none","align":"wide","className":"is-style-report-image"} -->
<figure class="wp-block-image alignwide size-large is-style-report-image"><img src="/wp-content/uploads/2024/04/Miao_folkdance_-_Guizhou_China.jpg?w=1024" alt="" class="wp-image-74560"/><figcaption class="wp-element-caption"><a href="https://commons.wikimedia.org/wiki/File:Miao_folkdance_-_Guizhou,_China.jpg" target="_blank" rel="noreferrer noopener">Photo</a> by PeterSzabo83, CC BY-SA 4.0<mark class="has-inline-color has-base-50-color">File provided by Wikimedia Commons</mark></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"That's 2023 Wrapped"},"align":"wide","className":"wmf-pattern-wrapped"} -->
<div class="wp-block-group alignwide wmf-pattern-wrapped"><!-- wp:heading {"className":"is-style-h2"} -->
<h2 class="wp-block-heading is-style-h2"><strong>And that's 2023 wrapped</strong>.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Feel free to download this report as a PDF booklet, and to share it with your friends online.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base100","className":"has-icon has-icon-download is-style-transparent"} -->
<div class="wp-block-button has-icon has-icon-download is-style-transparent"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="/wp-content/uploads/2024/04/WMF-Annual-Report-22-23.pdf" target="_blank" rel="noreferrer noopener">Download PDF</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent is-share-button"} -->
<div class="wp-block-button is-style-transparent is-share-button"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Previous Reports"},"align":"full","className":"wmf-pattern-previous-reports","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"backgroundColor":"bright-blue","textColor":"base100","includeInToC":true,"tocLabel":"Previous Reports","tocSlug":"toc-previous-reports"} -->
<div class="wp-block-group alignfull wmf-pattern-previous-reports has-base-100-color has-bright-blue-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base100"}}}},"textColor":"base100","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-100-color has-text-color has-link-color"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Previous Reports</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-h2"} -->
<h3 class="wp-block-heading is-style-h2"><strong>Archive</strong></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:wmf-reports/report-archive -->
<!-- wp:wmf-reports/report -->
<!-- wp:image {"id":72022,"width":"240px","height":"300px","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-large is-resized wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2023/05/WikiCon_Brasil_2022_-_Fotografia_em_grupo_24.jpg?w=1024" alt="" class="wp-image-72022" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2021 - 2022</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><strong><a href="/about/annualreport/2022-annual-report/" target="_blank" rel="noreferrer noopener">Pillars That Inspire</a></strong></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":66777,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2022/04/annualreport-cover.jpg" alt="" class="wp-image-66777" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2020 - 2021</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="/about/annualreport/2021-annual-report/" target="_blank" rel="noreferrer noopener"><strong>Entering a New Era of Promise</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":64439,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2021/04/wiki-w-2020-new.jpg" alt="" class="wp-image-64439" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2019 - 2020</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="/about/annualreport/2020-annual-report/" target="_blank" rel="noreferrer noopener"><strong>20 Years of Wikipedia</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":62976,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2020/06/Wikimedians-world.jpg" alt="Wikimedians from around the world meet in Stockholm." class="wp-image-62976" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2018 - 2019</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading wp-block-wmf-reports-report__title is-style-default"><a href="/about/annualreport/2019-annual-report/" target="_blank" rel="noreferrer noopener"><strong>The foundation for a better internet</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":60718,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2019/05/Jamie-Tubers-at-Wikimedia-Conference-2018.jpg" alt="" class="wp-image-60718" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2017 - 2018</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="/about/2018-annual-report/" target="_blank" rel="noreferrer noopener"><strong>Knowledge in progress</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":57760,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/08/ISS-52_Aurora_australis_above_Antarctica.jpg" alt="ISS-52 Aurora australis above Antarctica" class="wp-image-57760" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2016 - 2017</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://annual.wikimedia.org/2017/" target="_blank" rel="noreferrer noopener"><strong>Knowledge belongs to all of us</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":57761,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/08/Wikimedia_Foundation_Annual_Report_2016_books-1.jpg" alt="Wikimedia Foundation Annual Report 2016 books" class="wp-image-57761" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2015 - 2016</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://annual.wikimedia.org/2016/" target="_blank" rel="noreferrer noopener"><strong>Facts matter</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58844,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Young-girls-reading-Government-primary-school-in-Amman-Jordan.jpg" alt="Young girls reading" class="wp-image-58844" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2014 - 2015</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://annual.wikimedia.org/2015/" target="_blank" rel="noreferrer noopener"><strong>Knowledge is joy</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58845,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Sinenjongo-graduation-matric-2013-10-12-0381.jpg" alt="Sinenjongo graduation matric" class="wp-image-58845" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2013 - 2014</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://annual.wikimedia.org/2014/" target="_blank" rel="noreferrer noopener"><strong>Knowledge is a foundation</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58846,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia-Foundation-Annual-Report-2012-cover.png" alt="Wikimedia Foundation Annual Report 2012 cover" class="wp-image-58846" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2012 - 2013</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2012-13" target="_blank" rel="noreferrer noopener"><strong>Ten years of sharing and learning</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58847,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia-Foundation-Annual-Report-2011-cover.png" alt="Wikimedia Foundation Annual Report 2011 cover" class="wp-image-58847" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2011 - 2012</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2011-12" target="_blank" rel="noreferrer noopener"><strong>The voice of the world</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58848,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia-Foundation-Annual-Report-2010-cover.png" alt="Wikimedia Foundation Annual Report 2010 cover" class="wp-image-58848" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2010 - 2011</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://meta.wikimedia.org/wiki/Wikimedia_Foundation/Annual_Report/2010-11" target="_blank" rel="noreferrer noopener"><strong>The way the world tells its story</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58849,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia-Foundation-Annual-Report-2009-cover.png" alt="Wikimedia Foundation Annual Report 2009 cover" class="wp-image-58849" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2009 - 2010</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><a href="https://upload.wikimedia.org/wikipedia/commons/9/9f/AR_web_all-spreads_24mar11_72_FINAL.pdf" target="_blank" rel="noreferrer noopener"><strong>Imagine a world in which...</strong></a></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58850,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia-Foundation-Annual-Report-2008-cover.jpg" alt="Wikimedia Foundation Annual Report 2008 cover" class="wp-image-58850" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2008 - 2009</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><strong><a href="https://upload.wikimedia.org/wikipedia/commons/a/a4/WMF_Annual_Report_20082009_online.pdf" target="_blank" rel="noreferrer noopener">The year according to the Wikimedia Foundation</a></strong></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->

<!-- wp:wmf-reports/report -->
<!-- wp:image {"lightbox":{"className":"is-style-default wp-block-wmf-reports-report__image","enabled":false,"id":74197,"linkDestination":"none","scale":"cover","sizeSlug":"full","url":"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},"id":58851,"width":"240px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default wp-block-wmf-reports-report__image"} -->
<figure class="wp-block-image size-full is-resized is-style-default wp-block-wmf-reports-report__image"><img src="/wp-content/uploads/2018/09/Wikimedia_Foundation_Annual_Report_2007-2008_cover.jpg" alt="Wikimedia Foundation Annual Report 2007-2008 cover" class="wp-image-58851" style="object-fit:cover;width:240px;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wp-block-wmf-reports-report__date","style":{"elements":{"link":{"color":{"text":"var:preset|color|base10"}}}},"textColor":"base10"} -->
<p class="wp-block-wmf-reports-report__date has-base-10-color has-text-color has-link-color"><strong>2007 - 2008</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"\u0022wp-block-wmf-reports-report__title is-style-default"} -->
<h3 class="wp-block-heading &quot;wp-block-wmf-reports-report__title is-style-default"><strong><a href="https://upload.wikimedia.org/wikipedia/commons/2/26/WMF_20072008_Annual_report._high_resolution.pdf" target="_blank" rel="noreferrer noopener">Wikimedia Foundation Annual Report</a></strong></h3>
<!-- /wp:heading -->
<!-- /wp:wmf-reports/report -->
<!-- /wp:wmf-reports/report-archive --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
