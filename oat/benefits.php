<?php
ob_start();
$bodyClass = "subbody benefits";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','','','','','','');
$pageTitle = "OAT | Benefits For BCIT Students";
$metaDescription = "Contact information and detailed information on policy number, coverage period, a list of extended health and dental benefits, and how to make a claim.";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
 ?>

<main>
	<section>
		<h1>BCIT student benefits</h1>
		<article>
			<h2>Student Handbook</h2>
			<p>Contains BCIT policies on attendance, student conduct, use of technology, graduation requirements, harassment complaints, and other policies.</p>
			<a href="./pdf/HTP_Student_Handbook.pdf" target="_blank"><span class="icon-file-pdf"></span>Student handbook full PDF</a>
		</article><!--end first article-->

		<article>
			<h2>Benefits Handbook</h2>
			<p>Contains information on policy number, coverage period, a list of extended health and dental benefits, and how to make a claim.</p>
			<a href="https://www.mystudentplan.ca/bcit/en/home" target="_blank"><span class="icon-file-pdf"></span>Student health and dental plan</a>
		</article><!--end second article-->

		<article>
			<h2>Benefits Contact List</h2>
			<p>Who to contact for more information about student benefits.</p>
			<a href="./pdf/Benefit_Contact_Info.pdf" target="_blank"><span class="icon-file-pdf"></span>Benefits contacts full PDF</a>
		</article><!--end third article-->
	</section><!-- end section -->
</main>

 <?php
 include_once('./templates/footer.php');
 ?>