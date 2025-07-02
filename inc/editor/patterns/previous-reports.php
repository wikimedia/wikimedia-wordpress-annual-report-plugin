<?php
/**
 * Block pattern for the previous reports section.
 */

namespace WMF\Reports\Editor\Patterns\PreviousReports;

const NAME = 'wmf-reports/previous-reports';

const PATTERN = <<<CONTENT
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
<!-- /wp:group -->
CONTENT;
