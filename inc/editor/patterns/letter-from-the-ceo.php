<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\LetterFromTheCeo;

const NAME = 'wmf-reports/letter-from-the-ceo';

const PATTERN = <<<CONTENT
<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"className":"wmf-pattern-letter-from-the-ceo","layout":{"type":"constrained"}} -->
<div class="wp-block-group wmf-pattern-letter-from-the-ceo"><!-- wp:heading {"lock":{"move":true,"remove":true}} -->
<h2 class="wp-block-heading">Letter from the CEO</h2>
<!-- /wp:heading -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"lock":{"move":false,"remove":false}} -->
<p>“Wikipedia’s founding principles are as relevant as ever.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:shiro/profile {"profile_id":65978} /-->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"ceo-letter-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group ceo-letter-content"><!-- wp:wmf-reports/expandable {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-wmf-reports-expandable"><div class="expandable-content" data-visible-amount="300" data-visible-unit="px"><!-- wp:paragraph -->
<p>In my first year as CEO of the Wikimedia Foundation, I asked people all over the world what they thought the world needed from us now. And what I heard sent me back to Wikipedia’s founding principles.&nbsp;These pillars of shared collaboration and free, reliable information have remained constant, even as so much has changed in the past 22 years since Wikipedia was first created. They have only gotten stronger as societies everywhere experience increased threats to our information ecosystem, including a rise in disinformation and misinformation, and an even higher risk of censorship online.&nbsp;</p>
<!-- /wp:paragraph --></div><button class="expandable-expander" type="button" data-showmoretext="Show more" data-showlesstext="Show less">Show more</button></div>
<!-- /wp:wmf-reports/expandable --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
CONTENT;
