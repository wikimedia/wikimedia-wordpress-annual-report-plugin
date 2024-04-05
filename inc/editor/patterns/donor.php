<?php
/**
 * Block pattern for adding a Donors section to the WMF Annual Report
 */

namespace WMF\Reports\Editor\Patterns\Donors;

const NAME = 'wmf-reports/donors';

const PATTERN = <<<CONTENT
<!-- wp:group {"align":"wide","className":"wmf-pattern-reports-donors","includeInToC":true,"tocLabel":"Donors","tocSlug":"toc-donors"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-donors"><!-- wp:heading -->
<h2 class="wp-block-heading">Donors</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:wmf-reports/thank-you /-->

<!-- wp:image {"id":74663,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://wikimedia.vipdev.lndo.site/wp-content/uploads/2024/03/Heart.png?w=144" alt="" class="wp-image-74663"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Consectetur quis et Lorem ex commodo sint. Anim id esse voluptate nisi qui adipisicing esse. Reprehenderit velit consectetur sit consequat quis incididunt reprehenderit est cillum nostrud. Lorem est officia laboris et et aute excepteur proident qui do quis ullamco et. Culpa incididunt veniam sint commodo nisi et labore eiusmod commodo. Incididunt adipisicing tempor mollit proident do anim incididunt non. In excepteur ad cupidatat dolor proident non.</p>
<!-- /wp:paragraph -->

<!-- wp:shiro/accordion {"className":"wp-block-wmf-reports-accordion"} -->
<div class="accordion-wrapper wp-block-shiro-accordion wp-block-wmf-reports-accordion undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Major benefactors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-blue-color">$50,000+</mark></h3></button><div class="accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Ada Carr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sebastien Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Azaan Sharp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mckenzie Zimmerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ashley Newton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kasey Cameron</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Miriam Odonnell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ned Hodges</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nadine Faulkner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isra Becker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fintan Morse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Summers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anjali Jensen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harmony Holt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aiden Salazar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn Juarez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flora Barlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richie Mullen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Axel Rich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kajus Santos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dante Guzman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hafsah Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isra Becker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fintan Morse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Summers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anjali Jensen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harmony Holt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aiden Salazar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn Juarez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flora Barlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richie Mullen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Axel Rich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kajus Santos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dante Guzman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hafsah Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amber Park</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jenny Aguirre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gordon Gallagher</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tasnim Sears</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sam Mullins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ayden Moss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robin Bridges</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniyal Watkins</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Patrons<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">$50,000+</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Leading donors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-purple-color">$5,000 - $14,999</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item -->

<!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Sustaining donors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-green-color">$1,000 - $4,999</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:shiro/accordion-item --></div>
<!-- /wp:shiro/accordion --></div>
<!-- /wp:group -->
CONTENT;
