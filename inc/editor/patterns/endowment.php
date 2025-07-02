<?php
/**
 * Block pattern for the endowment section.
 */

namespace WMF\Reports\Editor\Patterns\Endowment;

const NAME = 'wmf-reports/endowment';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"Endowment"},"align":"wide","className":"wmf-pattern-endownment","includeInToC":true,"tocLabel":"Wikimedia Endowment","tocSlug":"toc-wikimedia-endowment"} -->
<div class="wp-block-group alignwide wmf-pattern-endownment"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Wikimedia Endowment</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Sustaining Impact</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Wikimedia Endowment launched in 2016 with an aim to create a permanent fund to support Wikipedia and other Wikimedia projects, sustaining our mission well into the future. <strong>This year, the Endowment reached an important milestone: a portion of its investment income was used to support the technical innovation of the Wikimedia projects.</strong> In a series of interviews with Endowment donors, we heard repeatedly about the desire to use their donations to support technical innovation to keep the Wikimedia projects relevant in a rapidly evolving world. <br><br>The focus on technical innovation also supports the Endowment’s long-term vision for maintaining the projects, including sustainable technical infrastructure. The projects chosen align with current and existing work being done to improve and innovate on Wikimedia projects in collaboration with volunteers. The recipients are:</p>
<!-- /wp:paragraph -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper wp-block-wmf-reports-accordion\u002d\u002dalt"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper wp-block-wmf-reports-accordion--alt undefined"><!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Abstract Wikipedia and Wikifunctions</strong></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://meta.wikimedia.org/wiki/Abstract_Wikipedia" target="_blank" rel="noreferrer noopener">Abstract Wikipedia</a> aims to build a knowledge base independent of language, making it easier to share, add, translate, and improve knowledge across languages on Wikipedia. Wikifunctions is the underlying technical infrastructure that supports the project. Abstract Wikipedia’s technical development is led by the Wikimedia Foundation.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Kiwix</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://www.kiwix.org/en/" target="_blank" rel="noreferrer noopener">Kiwix</a> is a non-profit that provides an offline reader for Wikipedia content, making knowledge more accessible to people around the world regardless of internet connectivity. Kiwix has over 10-12 million users spanning 200 countries.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Machine Learning</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p>Led by the Wikimedia Foundation’s <a href="https://www.mediawiki.org/wiki/Machine_Learning" target="_blank" rel="noreferrer noopener">Machine Learning</a> team, this programmatic area of Wikimedia work focuses on building and strengthening AI and machine learning infrastructure on the Wikimedia projects. Machine learning tools make the work of volunteer editors more efficient, enabling them to focus time on edits that require complex human judgment. This<a href="https://www.mediawiki.org/wiki/Machine_Learning/Modernization#Machine_learning_modernization_efforts" target="_blank" rel="noreferrer noopener"> work</a> includes the development of algorithms to measure the quality of Wikipedia articles and machine learning models that help catch incidents of vandalism on Wikimedia projects.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text"><strong>Wikidata</strong><mark class="has-inline-color has-base-10-color"></mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:paragraph -->
<p><a href="https://www.wikidata.org/wiki/Wikidata:Main_Page" target="_blank" rel="noreferrer noopener">Wikidata</a> is the multilingual, structured knowledge base that powers knowledge on Wikipedia. With more than 100 million data items, it is the most edited Wikimedia project. Wikidata more easily connects knowledge from Wikimedia projects with machines, including voice assistants, websites, and other platforms that leverage Wikimedia content. The Endowment grant will fund the existing multi-year plan for the project, which is led by Wikimedia Deutschland in collaboration with the Wikimedia Foundation.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion -->

<!-- wp:paragraph -->
<p>We are excited to see how Abstract Wikipedia, Kiwix, Machine Learning, and Wikidata strengthen our technical infrastructure and innovation.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Read more in the Wikimedia Endowment Annual Report <a href="https://wikimediaendowment.org/reports/2022-2023-annual-report/" target="_blank" rel="noreferrer noopener">here</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
