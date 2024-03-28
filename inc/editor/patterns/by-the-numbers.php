<?php
/**
 * Block pattern for the by the numbers section.
 */

namespace WMF\Reports\Editor\Patterns\ByTheNumbers;

const NAME = 'wmf-reports/by-the-numbers';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"full","backgroundColor":"green","className":"wmf-pattern-by-the-numbers","metadata":{"name":"By the Numbers"},"tocLabel":"","tocSlug":"toc-"} -->
<div class="wp-block-group alignfull wmf-pattern-by-the-numbers has-green-background-color has-background"><!-- wp:group {"align":"wide","includeInToC":true,"tocLabel":"By the Numbers","tocSlug":"toc-by-the-numbers"} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">By the Numbers</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A good year in stats</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet lacinia vel vestibulum. Scelerisque tempus dui vel elementum lectus pretium mi molestie. Lacinia dictumst lacinia senectus ut tempus cras donec faucibus incididunt. Dictumst purus scelerisque adipiscing mattis nisl vulputate velit tristique vel laoreet eleifend. Hendrerit venenatis molestie sagittis duis massa posuere non curabitur facilisis volutpat id.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-h1"} -->
<p class="is-style-h1"><span class="wmf-countup">123,456</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
