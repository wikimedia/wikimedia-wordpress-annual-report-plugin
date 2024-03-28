<?php
/**
 * Block pattern for a full-wdth group containing a header and two recent posts.
 */

namespace WMF\Reports\Editor\Patterns\FinanceTables;

const NAME = 'wmf-reports/finance-tables';

const PATTERN = <<<CONTENT
<!-- wp:shiro/accordion -->
<div class="accordion-wrapper wp-block-shiro-accordion undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Balance sheet (audited)</h3></button><div class="accordion-item__content"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">ASSETS</h6>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Current assets</th><th>USD</th></tr></thead><tbody><tr><td>Cash and cash equivalents</td><td>50,939,835</td></tr><tr><td>Current portion of contributions receivable</td><td>700,000</td></tr><tr><td>Short-term investments</td><td>141,953,790</td></tr><tr><td>Prepaid expenses and other current assets</td><td>3,878,743</td></tr><tr><td><strong>Total current assets</strong></td><td><strong>208,678,345</strong></td></tr><tr><td>Restricted cash</td><td>872,229</td></tr><tr><td>Noncurrent portion of contributions receivable</td><td>690,399</td></tr><tr><td>Property, plant, and equipment, net</td><td>9,798,002</td></tr><tr><td>Long-term investment</td><td>20,196,126</td></tr><tr><td><strong>Total assets</strong></td><td><strong>240,235,101</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">LIABILITIES AND NET ASSETS</h6>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Current liabilities</th><th></th></tr></thead><tbody><tr><td>Accounts payable</td><td>2,913,957</td></tr><tr><td>Accrued expenses</td><td>4,719,375</td></tr><tr><td>Other liabilities</td><td>1,424,233</td></tr><tr><td><strong>Total current liabilities</strong></td><td><strong>9,057,565</strong></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>Net assets</th><th></th></tr></thead><tbody><tr><td>Unrestricted</td><td>229,294,335</td></tr><tr><td>Temporarily restricted</td><td>1,883,201</td></tr><tr><td><strong>Total net assets</strong></td><td><strong>231,177,536</strong></td></tr><tr><td><strong>Total liabilities and net assets</strong></td><td><strong>240,235,101</strong></td></tr></tbody></table></figure>
<!-- /wp:table --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Statement of activities (audited)</h3></button><div class="accordion-item__content"><!-- wp:paragraph -->
<p>Enter content here...</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion -->
CONTENT;
