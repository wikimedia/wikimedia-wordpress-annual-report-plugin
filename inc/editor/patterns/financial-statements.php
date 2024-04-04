<?php
/**
 * Block pattern for financial statements.
 */

namespace WMF\Reports\Editor\Patterns\FinancialStatements;

const NAME = 'wmf-reports/financial-statements';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-financial-statements","metadata":{"name":"Financial Statements"},"includeInToC":true,"tocLabel":"Financial Statments","tocSlug":"toc-financial-statments"} -->
<div class="wp-block-group alignwide wmf-pattern-financial-statements"><!-- wp:heading -->
<h2 class="wp-block-heading">Financial Statements</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet iaculis purus viverra velit hendrerit vestibulum pulvinar mauris. Lorem ipsum dolor sit amet iaculis purus viverra velit hendrerit vestibulum pulvinar mauris.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"wmf-pattern-financial-statements__score"} -->
<div class="wp-block-column wmf-pattern-financial-statements__score" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":74791,"width":"103px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/03/Guidestar-Platinum-Transparence-2021.png?w=103" alt="" class="wp-image-74791" style="width:103px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":74790,"width":"109px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/03/Four-Stars.png?w=87" alt="" class="wp-image-74790" style="width:109px;height:auto"/></figure>
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
CONTENT;
