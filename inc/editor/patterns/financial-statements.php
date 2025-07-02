<?php
/**
 * Block pattern for financial statements.
 */

namespace WMF\Reports\Editor\Patterns\FinancialStatements;

const NAME = 'wmf-reports/financial-statements';

const PATTERN = <<<CONTENT
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
<!-- /wp:group -->

</div>
<!-- /wp:group -->
CONTENT;
