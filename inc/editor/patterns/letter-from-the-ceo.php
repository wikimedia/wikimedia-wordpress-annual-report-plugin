<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\LetterFromTheCeo;

const NAME = 'wmf-reports/letter-from-the-ceo';

const PATTERN = <<<CONTENT
<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"align":"wide","className":"wmf-pattern-letter-from-the-ceo","metadata":{"name":"Letter from the CEO"},"includeInToC":true,"tocLabel":"Letter from the CEO","tocSlug":"toc-letter-from-the-ceo"} -->
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

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"wmf-pattern-letter-from-the-ceo__content"} -->
<div class="wp-block-group wmf-pattern-letter-from-the-ceo__content"><!-- wp:wmf-reports/expandable {"visibleAmount":250,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="250" data-visible-unit="px"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
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
CONTENT;
