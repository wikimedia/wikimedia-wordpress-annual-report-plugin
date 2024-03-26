<?php
/**
 * Block pattern for adding a Donors section to the WMF Annual Report
 */

namespace WMF\Reports\Editor\Patterns\Donors;

const NAME = 'wmf-reports/donors';

const PATTERN = <<<CONTENT
<!-- wp:group {"className":"wmf-pattern-reports-donors","layout":{"type":"constrained"},"includeInToC":true,"tocLabel":"Donors","tocSlug":"toc-donors"} -->
<div class="wp-block-group wmf-pattern-reports-donors"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Donors</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Consectetur quis et Lorem ex commodo sint. Anim id esse voluptate nisi qui adipisicing esse. Reprehenderit velit consectetur sit consequat quis incididunt reprehenderit est cillum nostrud. Lorem est officia laboris et et aute excepteur proident qui do quis ullamco et. Culpa incididunt veniam sint commodo nisi et labore eiusmod commodo. Incididunt adipisicing tempor mollit proident do anim incididunt non. In excepteur ad cupidatat dolor proident non.</p>
<!-- /wp:paragraph -->

<!-- wp:shiro/accordion -->
<div class="accordion-wrapper wp-block-shiro-accordion undefined"><!-- wp:shiro/accordion-item -->
<div class="accordion-item"><button class="accordion-item__title"><h3 class="accordion-item__title-text">Major benefactors<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-wmf-report-blue-color">$50,000+</mark></h3></button><div class="accordion-item__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Ada Carr<br>Sebastien Young<br>Azaan Sharp<br>Mckenzie Zimmerman<br>Ashley Newton<br>Kasey Cameron<br>Miriam Odonnell<br>Ned Hodges<br>Nadine Faulkner<br>Isra Becker<br>Fintan Morse<br>Alan Summers<br>Anjali Jensen<br>Harmony Holt<br>Aiden Salazar<br>Evelyn Juarez<br>Flora Barlow<br>Richie Mullen<br>Axel Rich<br>Kajus Santos<br>Dante Guzman<br>Hafsah Drake</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Isra Becker<br>Fintan Morse<br>Alan Summers<br>Anjali Jensen<br>Harmony Holt<br>Aiden Salazar<br>Evelyn Juarez<br>Flora Barlow<br>Richie Mullen<br>Axel Rich<br>Kajus Santos<br>Dante Guzman<br>Hafsah Drake<br>Amber Park<br>Jenny Aguirre<br>Gordon Gallagher<br>Tasnim Sears<br>Sam Mullins<br>Ayden Moss<br>Robin Bridges<br>Daniyal Watkins</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
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
