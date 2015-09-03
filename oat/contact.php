<?php
ob_start();
$bodyClass = "subbody contact";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','','','','class="nav-here"','','');
$pageTitle = "OAT | Faculty Contact And Program Location";
$metaDescription = "Faculty contact information and program location information";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
 ?>

<main>
	<section class="faculty">
		<h1>Faculty Contact</h1>
		<article>
			<h2>Lorraine Fentie</h2>
			<ul>
				<li>Program Coordinator / Instructor</li>
				<li><span class="icon-phone"></span>604-412-7710</li>
				<li><a href="mailto:Lorraine_Fentie@bcit.ca"><span class="icon-envelop"></span>Lorraine_Fentie@bcit.ca</a></li>
			</ul>
		</article><!-- end first article -->

		<article>
			<h2>Debra Williams</h2>
				<ul>
					<li>Program Head / Instructor</li>
					<li><span class="icon-phone"></span>604-412-7695</li>
					<li><a href="mailto:Debra_Williams@bcit.ca"><span class="icon-envelop"></span>Debra_Williams@bcit.ca</a></li>
				</ul>
		</article><!-- end second article -->

		<article>
			<h2>Ron Terencio</h2>
				<ul>
					<li>Program Coordinator</li>
					<li><span class="icon-phone"></span>604-412-7622</li>
					<li><a href="mailto:Ron_Terencio@bcit.ca"><span class="icon-envelop"></span>Ron_Terencio@bcit.ca</a></li>
				</ul>
		</article><!-- end third article -->

		<article>
			<h2>Rhonda Ewashko</h2>
				<ul>
					<li>Program Assistant</li>
					<li><span class="icon-phone"></span>604-412-7727</li>
					<li><a href="mailto:Rhonda_Ewashko@bcit.ca"><span class="icon-envelop"></span>Rhonda_Ewashko@bcit.ca</a></li>
				</ul>
		</article><!-- end fourth article -->
	</section> <!-- end first section -->

	<section class="location">
		<h1>Program Location</h1>
		<article>
			<h2>High-Technology Professional Programs</h2>
			<ul>
				<li>#350 - 555 Seymour Street, Vancouver, BC V6B 3H6</li>
				<li><span class="icon-phone"></span>604-412-7788</li>
				<li><a href="mailto:htp@bcit.ca"><span class="icon-envelop"></span>htp@bcit.ca</a></li>
				<li><a href="http://www.bcit.ca/cas/htp/" target="_blank"><span class="icon-sphere"></span>High-Technology Professional Programs</a></li>
				<li><a href="http://www.bcit.ca" target="_blank"><span class="icon-sphere"></span>BCIT</a></li>
				<li><a href="https://my.bcit.ca/cp/home/displaylogin" target="_blank"><span class="icon-sphere"></span>MyBCIT</a></li>
			</ul>
		</article><!-- end fifth article -->
	</section><!-- end second section -->
</main>

 <?php
 include_once('./templates/footer.php');
 ?>