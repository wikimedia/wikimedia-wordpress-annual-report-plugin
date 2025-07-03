<?php
/**
 * Block pattern for adding a Donors section to the WMF Annual Report
 */

namespace WMF\Reports\Editor\Patterns\Donors;

const NAME = 'wmf-reports/donors';

const PATTERN = <<<CONTENT
<!-- wp:group {"metadata":{"name":"Donors"},"align":"wide","className":"wmf-pattern-reports-donors","includeInToC":true,"tocLabel":"Donors","tocSlug":"toc-donors"} -->
<div class="wp-block-group alignwide wmf-pattern-reports-donors"><!-- wp:heading {"className":"is-style-report-section-heading"} -->
<h2 class="wp-block-heading is-style-report-section-heading">Donors</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"xlarge"} -->
<h3 class="wp-block-heading has-xlarge-font-size"><strong>Celebrating and thanking the Wikimedia Foundation’s generous donors</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:wmf-reports/thank-you /-->

<!-- wp:image {"id":74559,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2024/04/Heart.png?w=144" alt="" class="wp-image-74559"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>With immense gratitude, we extend our heartfelt thanks to all our donors globally. Your steadfast support and generosity propel our mission and create meaningful impact worldwide.<br><br>We want to especially acknowledge those who contributed significantly during the fiscal year 2022-2023. Your extraordinary generosity has been instrumental in sustaining our projects and initiatives.<br><br>To every benefactor, you are a vital part of our community, and your commitment to furthering the Wikimedia Foundation's mission is truly inspiring. Together, we are forging a world where knowledge transcends boundaries, allowing individuals from diverse backgrounds to benefit from the wealth of information provided by Wikimedia projects. Your support empowers us to continue our journey toward fostering a more knowledgeable, connected, and equitable society.<br><br>Below is a list celebrating those who gave $1,000 or more during the past year:</p>
<!-- /wp:paragraph -->

<!-- wp:wmf-reports/accordion {"className":"accordion-wrapper"} -->
<div class="wmf-accordion-wrapper wp-block-wmf-reports-accordion accordion-wrapper undefined"><!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Major donors<br><mark class="has-inline-color has-wmf-report-blue-color">$50,000+</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Acton Family Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alfred P. Sloan Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Apple Inc, Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Arcadia</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ASML</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Antoine Bello</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brave browser users</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charina Endowment Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Crankstart Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Foundation for a Better World</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Amy Fulton Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Google.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Google Matching Gifts Program&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Hinman Charitable Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>HPE Accelerating Impact Initiative</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Horizons Ventures Techcracker: Miwa Seki, Yumiko Murakami, Kathy Matsui, Adam Maxwell, Erika Milczek, Andy Kleitsch, Michael Biercuk, Pierre-Yves Paslier, Rodrigo Garcia Gonzalez, Cheri Ackerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>I.W. Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kaphan Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>King Baudouin Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>MathWorks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Microsoft Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Montgomery Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evelyn and Kurt Riedel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Scheinberg Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Simons Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stichting Sub3</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tony Wheeler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WoodNext Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous Donors</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Patron donors<br><mark class="has-inline-color has-orange-color">$15,000 – $49,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Adobe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kyle Aster</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill and Melinda Gates Foundation Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bloomberg LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Boeing Company Gift Match</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cisco</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Helen Clawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Giuliani Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Geltz and Elizabeth Hands Geltz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Heartsprung Fund WA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Heising and Elizabeth Simons Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intel Corporation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Asa Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay and Mary Jones</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Eric Jordan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JVR - Murray and Jan Ritland Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keough Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda Kintzel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Oleg Krot</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>N1243</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gregory and Kathy Nelson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wheeler and Elizabeth Munro</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chris Peterson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Renée B. Fisher Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Salesforce.com Foundation Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Silverleaf Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Seiwald</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Shor Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Diana Strassmann and Jeff Smisek</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Tai &amp; Kin-Ching Wu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul von Kuster</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elmira Choopani &amp; Khanh Vu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Leading<br><mark class="has-inline-color has-wmf-report-purple-color">$5,000 - $14,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>A &amp; J Saks Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Alison Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Alwan Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A-Mark Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert G. Andrews</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Prabhu &amp; Rina Balasubramanian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bank of America Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steedman Bass</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joe and Rachel Beda</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Behemoth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stefan Bengtsson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven and Sandra Berglund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andy &amp; Elliot Berndt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BlackRock Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samuel Bowen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phil &amp; Valerie Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Van Dalsen and Tor Braham</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Julia Butters</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Canfield</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caterpillar Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Chambers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chevron Matching Employee Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Circiello&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Liam Connell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Cook</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Cooper-Siegel Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CouponFollow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Covington Family Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter S. Dixon, MD.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Dixon and Joan Cresse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Durst Organization LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Elevate Prize Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Epic Games</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex &amp; Patricia Farman-Farmaian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frumkin Falco Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian &amp; Rebecca Geisel, Geisel Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Genentech Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Betty Harrell Gerlack</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Russell Gersten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tyson &amp; Elizabeth Gill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Spencer Glendon and Lisa Tung</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donald E. Graham</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Grainger Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kiwan Gu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guttman Family Donor Advised Fund gGmbH</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Haahr and Susan Karp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ryan Hamerly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Helen Ingham Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hewlett Packard Enterprise</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don &amp; Paula Heye</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Heising and Elizabeth Simons Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>HPI</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tim Huang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Ibbotson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Isambard Kingdom Brunel Society of North America</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Secoy Krach Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jericho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Johnson &amp; Johnson Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amy and Josh Jernigan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JP Morgan Chase Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr. Susan and Esabeau Kendall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sung-Hou and Rosalind Kim</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>KLA Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kusik Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kirk Laughton and Chang Woo Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laxmi Family Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phillip Lawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward A. Lee and Rhonda Righter</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Soon Lee and Andrew Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leon Levy Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Josh &amp; Sara Leslie</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Levine &amp; Yael Taqqu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leo Liu, MD</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Li Lu Humanitarian Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>LinkedIn Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Luetschine Consulting LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of my father Dr. Bradley W. Maring</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Greg and Elizabeth Stanton Marra</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Darrin Massena</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Mayo-Smith &amp; Leslie Vensel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward McCullough</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The McLean Family-Lincoln Nebraska</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Al and Margo Merck</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth Meyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Milner Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sheila Mossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mycelium Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nike Employee Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nvidia Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David OBrien</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Oracle Corporation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>P&amp;C Collins Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pearlstein-Hollingsworth Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Drew and Lola Perkins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Peters Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pipkin Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pfizer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>PlayStation Cares</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Quinn-Newall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Raytheon Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Revada Foundation of the Logan Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Barbara Brookover Richards</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rick &amp; Susan Goings Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rockefeller Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruth and Peter Metz Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Ryan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yann Samuelides</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Schmale Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roy Schneiderman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mick &amp; Alison Seaman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Shanbrom Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H Rodney Sharp III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ed and Elaine Shoben</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shane Skikne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scooter Software</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>S&amp;P Global Community Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew and Elizabeth Spokes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sprague Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Doug Standing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Timothy Steinert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Takeda Pharmaceuticals North America, Inc Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Texas Instruments Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rabbi Rob and Lauren Thomas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>UHG</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J.P. Brinker-Uys</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Visa</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>VMware Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charlotte von der Hude</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ted Waitt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walt Disney Company Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rich Warner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Watkins</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Adam and Abigail Winkel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wright NY, NY</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee Xu&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yen Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Greg and Margo Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth and Anna Zankel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zegar Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard and Angela Ziock</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item -->

<!-- wp:wmf-reports/accordion-item -->
<div class="wp-block-wmf-reports-accordion-item wmf-accordion-item"><button class="wmf-accordion-item__title"><h3 class="wmf-accordion-item__title-text">Sustaining<br><mark class="has-inline-color has-green-color">$1,000 - $4,999</mark></h3></button><div class="wmf-accordion-item__content"><!-- wp:list {"className":"wmf-pattern-reports-donors__list"} -->
<ul class="wp-block-list wmf-pattern-reports-donors__list"><!-- wp:list-item -->
<li>Abbott Laboratories - EGC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AbbVie Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Adams</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ADP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Agilent Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Howard Ahmanson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AIG Matching Grants Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Hani Akkawi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Albert E. Harrison Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alcon Vision, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Allstate Giving Campaign</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Ryan Alexander&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alice Greene McKinney and E. Kirk McKinney, Jr. Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca Allen&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Ann Allen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ian Almond</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amateur Radio Digital Communications (ARDC)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AMD</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>American Express Company Employee Giving Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>American Express Give2Gether Campaign</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ameriprise Financial, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amgen Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analog Devices</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sarah Anderson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joe and Barbara Andrade</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alexandros Andrianopoulos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Flavia &amp; Bernie Anger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Applied Materials Foundation Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Maite Arango</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Etienne Ardant and Laurence Lapeyre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edward and Sallie Arens</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Garner Ted Armstrong Evangelistic Association</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ben Arthur</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ASML</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Siddharth Asnani</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AstraZeneca Pharmaceuticals LP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Atlassian</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Avants</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rick and LaNae Avra Giving Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Autodesk Foundation Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Ayers Investment Management</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mohammad Azab</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bae Systems</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rose and Neil Baird</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Baldauf</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ball Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott &amp; Cyan Banister Freedom Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Bantivoglio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ken Baron</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Barta</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Carol Baskauf</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Bates and Mini Pathria</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Juan Battle &amp; Michael Bennett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Bay</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BD Group Matching Gift</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nicolette Getty Beck</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent Beckley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Émile Beguin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samy Bengio and Elaine McMurray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joan Berman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Dudley Berry, Jr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sravan Bhamidipati</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K.S. &amp; Jayashree Bhaskar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Peter Bial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>René Bilodeau and Naomi Black</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Biogen MA Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Graeme Birchall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer and John Bird</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marc Birling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Black</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dominika Blackappl&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Blacklock and Gabriele Amtmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark and Deborah Blackman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Bloch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Blum</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent Blumenstein &amp; Anne Ryan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jabe Blumenthal &amp; Julie Edsforth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Blush</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>BNY Mellon Community Partnership Employee Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Boberschmidt and Nancy Gross</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charu and Jeff Bogdan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas A. Booth and Margaret Simpson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walter and Marguerite Bopp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Booz Allen Hamilton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Cleona "Ione" Botkin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Bowers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff and Lauren Bowman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Boyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Debra Boyle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David H. Bradley, Sr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Glenn Brandimarte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Briggs &amp; Hisayo Tago</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bright Funds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Brill&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bristol-Myers Squibb</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Broadcom</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bernhard Brodowsky</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Brönnimann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian and Melissa Brothers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charley &amp; Kathy Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Brown&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey and Marguerite Browne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Brubaker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sailesh R Buddhavarapu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robin and Thomas Burch Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Louis Burgener</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Burkhart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chica Burnett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Patrick Butler III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barry Buzan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cabin Fund, Santa Fe Community Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cadence Design Systems, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marta B. Calás</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Craig Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Colin Chandler Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Ammar Campa-Najjar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Gary D. Campbell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Capital Group Companies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cargill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Max Carlson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carmax Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca and Irad Carmi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Toby Carrodus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K. Bradford Carr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charlie &amp; Darian Carson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kyra and Ken Carson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Max Schaefer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Margaret Casbourne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cascade Asset Management</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Cassidy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CDK Global, LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CDW Coworker Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tantek Çelik</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sumir Chadha</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Merle Chambers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dileep Jivanlal Champaneria</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith Chapman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Maxfield Parrish and Gloria F. Parrish Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Schwab</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Saul and Nan Chase&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Curtis Chen and Jennifer Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ken Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pengyuan Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Viola Chen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Veeraswami Chennamsetty</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Chernick</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stuart Cheshire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chevron Humankind Matching - Retirees</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andy Chiang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gilbert Chin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Chorost and Victoria Nugent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Choy &amp; Shannon Moffett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee and Amy Christel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ciena Cares Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>CIGNA Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lawrence Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stuart &amp; Wendi Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christine and Michael Clarke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rich and Joana Clayton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jacqueline Clinton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Coca-Cola Company</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthew Coleman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Costantino Colnaghi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Comcast</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martha Gates and Spencer Commons&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guy and Helen Connolly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Constellation Energy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda D Cooley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Cooper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephanie J. and Ted Coopman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Costanzo&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Costco Wholesale Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gretchen Cotter</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Cowart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stone Coxhead</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Meg Coyle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Roger Edward&nbsp; Broughton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alain Crain, in honor of Diana Strassmann in recognition of her extensive contributions to&nbsp; education by her teaching, writing, and years of active engagement with Wikipedia.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Beth Crane and Richard McKee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lillian Creighton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anna Crivici</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Crow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Crowe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Crump</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Cunningham Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Cutler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cyan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Terrence Daly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AnnaMarie Daniels</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sauparna Das</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Claudia Davidoff and Joseph Kahan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dauber Family V Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Lucile Packard Foundation Matching Grant Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martha K. Davis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Davis-King &amp; Associates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H. Andrew Decker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carole Deitrich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pierre Deligne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caroline and Lloyd de Llamas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yonca Dervişoğlu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen &amp; Elizabeth Detwiler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>B. Devereaux</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gayatri Devi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joshua Dezube</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven DiCarlo&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Dickey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Josh Dillon &amp; Effie Seiberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher C. Dixon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A Sibbald Doan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Dodenhoff and Nancy Sicotte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Doerr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dokali Megharief Education Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter and Linda B. Dooley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Dowling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jesse Drake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Karen Berger Drastal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim and Wendy Drasdo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pierre Drion</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dropbox, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Duke Energy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Dunn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edgar Durbin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Durst Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>eBay, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Carol L. Ebert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Eddings</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pamela Edillon, MD and Teresa Sarlitto</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ralph Edler&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron Bailey and Bill Edwards</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen and Leslie Ehrmann, in memory of Dorothy Ehrmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David and Casey Eichenberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Eisenberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elasticsearch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Electronic Arts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Simon Ellgas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Bill Ellison</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hashem Emami</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Emch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Energizer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Esposito&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James Evans</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Expedia Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>F5 Networks, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>FM Global</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fred Falkner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ann Fallon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hany Farid</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Feng</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feral Interactive Limited</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan and Elizabeth Finkel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tatiana Finkelsteyn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Fisch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Fishman&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jody Fleischer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Florida First Capital Finance Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carla and Charlie Flournoy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>For everyone who wonders</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Ford</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Forrest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fournier Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mr. Peter Ernst Francati</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Juanita Francis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bernard Francois</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Reynolds Architects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of George H. Frank, a brilliant, kind man and a loving father who is missed every day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark and Janice Franzen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Fregeau&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kathy French</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hunter Freyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Fry and Meidee Goh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles James Gallant III</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Julie and Rafael Garcia Giving Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gartner (The Matching Gift Center)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Beverley Gasner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michèle Ray Gavras&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Famiglia Gazzetta&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The GC Companies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GE Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don Gensler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James George</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aaron Getz &amp; Sheila Geraghty Getz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Gerrard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George &amp; Alice Rich Charitable Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Gibbs&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gilead Sciences, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Amanda Ginther</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GitHub</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GivingForce Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>K. Reed Gleason</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Emily and Sam Glick</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Glidden&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kelly &amp; Jeff Glisch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gpe and Gmo Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Terence Go</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norman Godinho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Ira Gold</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Monica and Danny Gold</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Annelise Goldberg in honor of Max Goldberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Goldman, Sachs, and Co. Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Goodman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phil Gormley and Erica Bisguier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J. Alex Graeffe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Temple Grandin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Babette Krolik and Harry Greenwald in honor of their children</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce and Erica Greer Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Daryl Grime</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Grosse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Grossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cornelius N. Grove</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Beth Guard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alexander M. Guest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jerome Guillen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Egils and Anne Gulbis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Henry Gurr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Gwinn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kelsey and Scott Hadley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Hakel Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pauliana Hall and Eric Hall, Esq.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark D Halperin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hamilton Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bob Hammond</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guy and Julia Hands</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael and Sheila Hannah</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wells Hansen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>F. Dok Harris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Gina Harris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harvest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barry Harvey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Hase</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne Hathaway</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>M. Hawley, in Honor of Ryan Turner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Hazelbaker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>healthinsurance.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hearst</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron and Beth Heiby Family Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frances Hellman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Henry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Mary and Paul Henry Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Amanda Henson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bobby Hernreich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael and Kimberly Hicks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hideous Weasel Butt LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tran Ho</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Hobart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Home Depot Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Ben Hesper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of Emily Catherine Holzer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carol Hooker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>hopeful earth foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dermot Horgan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Morgan Hough</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Orville E. Howard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy Howes&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Else Hoyrup</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel and Celia Huber</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff and Kristin Huget</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>H Scott Huizenga</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zachary W. and Elizabeth S. Hulsey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IBM</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carla and Philippe Ifrah</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Ignat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IMF</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Indeed, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In support of those who cannot give</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anne Infeld</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intetics Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intuit Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Intuitive Surgical, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>IQVIA Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roshan Isaac</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Israel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ITW Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sigrid &amp; Roy Jablonka</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chip Jackson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Jackson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rex Jaeschke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Jaffe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dirk Jagdmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet and Wilson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jericho Charitable Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>JK Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Deere</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Borge Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lee Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Johnson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Joss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Boyan Jovanovic</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Jove and Moriel Levy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin Joyce&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tanya Joyce</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Dr. James L. Julian, who cherished knowledge above all else</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Karen Jurewicz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Kamer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of APJ Abdul Kalam, former President of India</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kalpatharu Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Maryann Karlen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Karplus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Kass</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Katz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rebecca Krantz and Donald Katz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>KDSM Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Kelly and Germaine Fuh-Kelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan S Kelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary Lowe Kennedy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brett and Susan Kennelly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tom and Laura Kent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert M. Kern</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keysight Technologies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kheterpal Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth and Albert Kidd</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Frank Kienast</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anthony, Su-Hyun and Tae-Yang Kim</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jesse and Kimberly Kinder</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donald A&nbsp; &amp; Janemarie D King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Harold D. King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>King Cheadle Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sam King</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The James Kinsella and Robert McNeal Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Kipping Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nancy Kleinrock</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eric Klusman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron Knapp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey Knauth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dillon Knezacek</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Koepp</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Igor Kopylov</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Koshland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kurt Kufeld</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthias Kunze&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith and Patricia Kusunis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Francois René LACOSTE</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Lake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tom and Evelyn LaMers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lam Research</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Honor of Spencer Lang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janna Smith Lang and Kurt F. Lang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tanja Lange</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jane Lansing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Lapeyre</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne and Karen Lattuca</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lawrence Livermore Labs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet Lawson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Felicity W C Leong</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eunjin Lee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bonnie Lemert&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark A. Lemley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Leo Model Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel Lenski</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richards and Leong Family Trust</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nathan Leventhal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marc Levoy and Laurie Winslow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lai-Yet Lam &amp; Peter W. Lew</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Don Lewis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Wei-Ching Liao</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dylan Liebgott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lilly US Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matt Limmer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tsung-Yin Lin&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lincoln Loop</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christopher Lingle</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan Ellis and Mark Linton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of my friend Thomas D. Lombaer and separate listing Spencer Brown</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mario Londono</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda Look</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Felix Lopez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rayson Lorrey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keith Loritz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Philip Loughlin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>love of words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anahita and Jim Lovelace</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joyce Lowinson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Marilyn Lucht</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Lucy Fund&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jing Li and Yeming Luo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott and Julie Lynch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Natalie Ma</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Bruce MacEvoy and Janet Randall Trust</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen Mackain</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Madabhushi Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matt and Kristin Maguire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Emily Maier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Victor Mair</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Malatesta</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Marcus and Kitty Juds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Macquarie Group Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Marinelli Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Goran &amp; Kelly Marnfeldt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Mart Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Martin &amp; Ottaway, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffrey Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel L Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean-Philippe Martin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Marx AIA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jack Mason</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>MasterCard Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Catherine et Frank Mathis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Preston McAfee</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Koshland and James McCaughey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walter and Nancy McClure</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John McGeehan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elizabeth McGlynn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jenna McGugan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Mcinnis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James McKinney</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>McKinsey &amp; Company, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John McLaughlin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mcmaster-Carr Supply Company</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Medtronic Foundation Volunteer Grant Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of&nbsp; Lillian M. Mehr</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Mendez</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Girish Menon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Merck Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kathleen Messina</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Micron Technology, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Matthew Midboe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Middle Road Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Uncle Mike</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mildred B and Radhe Mohan&nbsp; For The Mohan Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Midvale Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Westin Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kimberley Sloan Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wannett and Ralph Miller</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alicia Mills</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Minassian Media</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ronald Minnich</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Patricia and Charles Mintz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Mitchell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Riaz &amp; Lily Moledina</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Money Penny</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Meridee Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Colin and Roberta Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norma Moore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Brent Moore and Jennifer Stichman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jennifer Moores Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brigitte Morel-Curran</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Morgenthaler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Viktor Moros</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr. Amy S. Morris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dr Shirley Margolis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeff Morrow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Seth Morton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Felix Moses</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Les &amp; Carol Moss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joaquin Mostany</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Motorola Solutions Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tim Mott for Sam Mott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Msquared Groep</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Chandra Mukerji</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Mumford</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jack Munson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Murin</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Murphy USA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mary G Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William M. Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Neil Murray</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kimbal Musk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jasmine Nabi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>nafSadh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>National Instruments</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Ali Nariman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruediger Naumann-Etienne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Neisler</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Nelson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>NetApp, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Netflix</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Newman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>New Orleans Roofers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jerry Newman Willowridge Partners, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hải Quân Nguyễn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Theodor Nicol</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kirsten Niemeyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Nikopoulos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nintendo of America</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Niteo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Noakes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeremy M. Norman and Patricia G. Gilbert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nordstrom Charitable Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Novartis Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The O'Brien Family, New Jersey</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The OceanRain Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Olive Bridge Fund of the Oregon Community Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Omidyar Group</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Norm ONeill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin and Laura O’Shea</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin O'Shea</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brendan O’Sullivan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Oelke and Sylvia Hysong</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen Oganowski</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One Point Of Light Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex Opal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Open Knowledge Association (OKA)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Ordal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Osborne Partners</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ottaway Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Rita Ousterhout</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pacific Gas and Electric Company&nbsp; Employee Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Manisha Kher and Manoj Padki</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Catherine Paessun</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Giancarlo Pallavicini</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Palo Alto Networks, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Justin Palpant</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jhilmil Pandit &amp; Punchhi Pandi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paramount</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Linda and Peter Parshall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Paul&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Pazirandeh Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>PayPal Gives Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brian Peierls</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Pennisi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pentair Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pepsico Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William E. Perry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Perullo Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wayne Pfeiffer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anny Beideler-Pfister and Christoph Pfister</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Phillips 66</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In the memory of Andrew G. Phillips</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Duane and Laurie Phillips</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laura Philips and John Elliott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hart &amp; Rebecca Phinney and Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Carmen Piccini</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pieper Electric, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Pieper Sr.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve and Carol Pieper in honor of Donald Roger Pieper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Pittman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The PixInsight Project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Timothy Pletcher</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill Plummer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mike Potel and Cathy Frantz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of James D. Powell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>J. David Powell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Pretlow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Prescott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rob and Anna Prestezog</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Tom Price</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ryan Price</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William Prinzmetal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nicholas and Susan Pritzker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Progressive Insurance Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Prudential Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laura Murphy and Bill Psillas&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Publicis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Katrina Pugh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Purjes Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stephen Pyryemybida</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Dr. Agnar Pytte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Qualcomm Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Praveen Ramaprabhu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jeffery and Patricia Randall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pratima Rangarajan and Gregory Gillette</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William &amp; Anne Rasnake</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kate and Paul-Erik Raue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ian Reasor and Jamie Molaro</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kristin Rechberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Rechnitz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Red Hat</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Regeneron Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paul Resnick and Caroline Richardson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scheryle Reuss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>RELX Group</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Rhodes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>James and Cynthia Richardson&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tarrus Richardson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Riot Games, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Derek Riley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ripples A Not For Profit Corporation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Green Rives</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Robert and Vivian Lamb Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joseph Robillard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert Wood Johnson Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roblox</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roche Molecular Systems, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jean Memken and Michael Rogers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brittany Rohrman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Georg Romero and Margaret Loos</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dan Roper</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elly Rose</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Roger Rosenberger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dennis Rossman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sievert Rohwer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mathieu Rouleau&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Abraham Rowe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ruby Family Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bow and Erina Ruggeri</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daniel and Lynne Russell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rusty Russell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>M. Duane Rutledge</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jay Sachs &amp; Mary De Voe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rohini Sabikhi and Tushar Chandra</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brent &amp; Neri Sandweiss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Sargent</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Salesforce.org</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Samsung</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SAP Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sasa and Calvin Lin Charitable Fund”</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ron and Sally Sassen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scott Satterwhite</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Elaine Scarry</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kenneth Schaffer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Schattner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Scheinman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karen and Damon Scheppelmann</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Schloss</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Schmidt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Schneider Electric North America Foundation Matching Gifts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gary Schneider</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andreas Scholten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alex Schwendner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Scott</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dominic Scriven OBE</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pretzel Semus</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dhruva R.J. Sen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Randall Seright</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ServiceNow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Charles Severance</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The S. Garbus Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David A. Shapiro, MD &amp; Sharon L. Wheatley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nate and Julia Sharpe Charitable Gift Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Rasha Shehada</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bradford Sherburne</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Austin Short</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Dr. Donald W. and Ann P. Shunn</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Silicon Valley Bank</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Douglas Simons</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aahana Singal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hartaj Singh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shamina Singh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Evan M Smith of Berkeley CA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fred and Li Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Mary J. Stanley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Toni and Joe Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Travis Smith</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sara Smollett</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Donna and Alec Smythe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin Sofield</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Aaron and Jamie Solak</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Some old physicist</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanita Sood</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Sopko</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Soros Fund Charitable Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joel Spiegel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sports Reference LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Soros Fund Charitable Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>D. Squire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The St. Dima Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Stadtfeld&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Russell Staley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Standard Insurance</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thomas Stanis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Starbucks Corporation - Partner Match - Financial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Robert P. Starling</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cesar Stastny&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>State Farm Companies Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Albert &amp; Candace Staton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Virginia Steel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Christie Steier</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bruce G. Stewart</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Revin Stoker</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David R. Stoutemyer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joan Strassmann and David Queller&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Andrew Sutherland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>&nbsp;Richard Sutton&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Synchrony Financial</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Synopsys Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Norman E. Tanis, Dean of the University Library at Cal State University, Northridge</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Atul Tandon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steve Tanksley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alan Taylor and Hans Reiser</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dale Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Harrison Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In Memory of Julian Taylor</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thermo Fisher Scientific Matching Gift Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gwen Ewart and Bob Thomas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In loving memory of Dolly Thompson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael Thonis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ben Thul</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Beth Tidwell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Steven Tjiang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>To our beloved Jack and Henry — Seek God, truth and wisdom</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>T-Mobile USA, Inc</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Tobert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tina Tomsen, MD&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tomas Torres</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kristof Toth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Michael P Totten</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>TOYOTA InfoTechnology Center</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kit Transue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>T. Rowe Price Program for Charitable Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>禪</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John &amp; Bernice Tulloch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tungare Manohar Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John B. Turner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Turrell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two Sigma Investments LLC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ellen Tykeson and Ken Hiday</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>USAA</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Van de Wiel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanguard</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yuan Zheng &amp; Jeffrey van Gogh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Gert van Manen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jos van Schagen and Marjon Floris</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Betty Vandenbosch</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John Vandermeer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vanistendael Gaí‚tan</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jos Vankan, Royal Netherlands Aerospace Centre NLR</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of Richard M. Van Slyke</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Varian Medical Systems</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Louis Vera</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Veritas Employee Engagement Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Verizon Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vertex Pharmaceuticals</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ViaSat Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Susan Vice</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Caitlin, Patrick, and Molly Virtue</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Johann Volz</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Voya Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jens von der Heide</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anthony Vu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jane Waddell</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cynthia C. Wainwright and Stephen Berger</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cynthia Walk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bret Walker AO SC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Warner Media</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Joyce Watson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stan &amp; Karen Watt</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anas Wattar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dan Wayland</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Clare and Richard Weinberg</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mark Welsh</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wendroff and Associates, CPA&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thurman Wenzl</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WePay</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pam Kochiss Werth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Glenn Westley and Jeanne Holzgrefe</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WestWind Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In gratitude to the Wikimedia Foundation Technology Team</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In honor of the Wikipedia Staff</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mandy Whalen</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Janet White and Michael Clark</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bill &amp; Cynthia Wilby</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Peter Wiley</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Benjamin Wiley Sittler and Rebecca Middleton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>William &amp; Flora Hewlett Foundation Matching Gifts Program</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>John and Lacey Williams&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ms. Caryl and Janice McNeilly and Dr. Robert E. Williamson</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Adam Winsor Family</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Dean and Helen Witter Family Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>In memory of Sam Wolpert</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wonderful Giving</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dr Raymond J Wootton</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Workday, Inc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Barbara Wright</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Sing-Yung and Yvonne Wu&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jason Wyse</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Xiaoping Xu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yahoo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Stanley Yamane</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Yee Family Foundation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>David Yngve</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Richard Yonash</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alice Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jonathan Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Kevin and Donna Young</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mimi Yu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wendy Zacchio&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Majid Zarrinkelk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pamela Zave</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Will Provost &amp; Stacey Zelbow</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The Zerhouni Foundation&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Eric Zhang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Liang Zhang&nbsp;</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zhuqing Zhang</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jim Stepp and Peter Zimmer Fund</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>George Zimmerman</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tushar Shah and Sara Zion</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Anonymous donors</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:wmf-reports/accordion-item --></div>
<!-- /wp:wmf-reports/accordion --></div>
<!-- /wp:group -->
CONTENT;
