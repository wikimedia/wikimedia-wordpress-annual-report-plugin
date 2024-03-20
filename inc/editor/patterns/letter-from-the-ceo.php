<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\LetterFromTheCeo;

const NAME = 'wmf-reports/letter-from-the-ceo';

const PATTERN = <<<CONTENT
<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"wmf-pattern-letter-from-the-ceo","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-letter-from-the-ceo"><!-- wp:heading {"lock":{"move":true,"remove":true}} -->
<h2 class="wp-block-heading">Letter from the CEO</h2>
<!-- /wp:heading -->

<!-- wp:quote {"lock":{"move":true,"remove":true}} -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
<p>“Wikipedia’s founding principles are as relevant as ever.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:media-text {"lock":{"move":true,"remove":true}} -->
<div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p><strong>Maryana Iskander</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>CEO of the Wikimedia Foundation</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"ceo-letter-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group ceo-letter-content"><!-- wp:wmf-reports/expandable {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="300" data-visible-unit="px"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
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
