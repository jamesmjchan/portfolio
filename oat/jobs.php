<?php
ob_start();
$bodyClass = "subbody jobs";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','','','class="nav-here"','','','');
$pageTitle = "OAT | Help Find Your Ideal Job";
$metaDescription = "A collection of links that help graduates find their ideal jobs";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
 ?>

<main>
	<section>
		<h1>Jobs</h1>
		<article>
			<h2>Job Websites</h2>
			<ul>
				<li><a href="http://www.bcit.ca/hr/careers/" target="_blank"><span class="icon-link link"></span>Careers at BCIT</a></li>
				<li><a href="http://www.bcit.ca/ses/ejobs/" target="_blank"><span class="icon-link link"></span>BCIT e-Jobs</a></li>
				<li><a href="http://www.psea.bc.ca/members/employment-opportunities" target="_blank"><span class="icon-link link"></span>Post-Secondary Employers' Association</a></li>
				<li><a href="http://www2.gov.bc.ca/myhr/employment" target="_blank"><span class="icon-link link"></span>BC Public Service</a></li>
				<li><a href="http://www.hr.ubc.ca/staff-finders/" target="_blank"><span class="icon-link link"></span>Careers at UBC</a></li>
			</ul>
		</article><!-- end first article -->

		<article>
			<h2>Recruitment Agencies</h2>
			<ul>
				<li><a href="http://www.roberthalf.ca/JobSeekersOfficeTeam" target="_blank"><span class="icon-link link"></span>Clerical - Robert Half - Office Team</a></li>
				<li><a href="http://www.roberthalf.com/accountemps/" target="_blank"><span class="icon-link link"></span>Accounting Jobs</a></li>
				<li><a href="http://www.angusone.com/" target="_blank"><span class="icon-link link"></span>Clerical - Angus One</a></li>
				<li><a href="http://www.adecco.ca/en" target="_blank"><span class="icon-link link"></span>Adecco Canada</a></li>
				<li><a href="http://www.hunt.ca/" target="_blank"><span class="icon-link link"></span>Hunt Personnel Employment Agency</a></li>
				<li><a href="http://www.miles.ca/" target="_blank"><span class="icon-link link"></span>Miles Employment Group Ltd</a></li>
			</ul>
		</article><!-- end second article -->

		<article>
			<h2>Job Search Sites</h2>
			<ul>
				<li><a href="http://www.bcit.ca/ses/" target="_blank"><span class="icon-link link"></span>BCIT Employment Services</a></li>
			</ul>
		</article><!-- end third article -->
	</section><!-- end section -->
</main>

 <?php
 include_once('./templates/footer.php');
 ?>