<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\LetterFromTheCeo;

const NAME = 'wmf-reports/letter-from-the-ceo';

const PATTERN = <<<CONTENT
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
CONTENT;
