<?php
ob_start();
$bodyClass = "subbody courses";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','','','','','','');
$pageTitle = "OAT | Courses";
$metaDescription = "Credit and detailed information of the four courses taught in the program";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
 ?>

<main>
	<section>
		<h1>Courses</h1>
		<article>
			<h2>OATP 1000 Communication Skills<span>Credits: 5.0</span></h2>
			<p>This course has been designed to assist students in the acquisition, application and development of professional skills. Topics covered include, but are not limited to: interview skills, career planning, time management, team building and conflict resolution skills.</p>
			<a href="./pdf/OATP_1000_-_Communication_Skills.pdf" target="_blank"><span class="icon-file-pdf"></span>View full PDF version</a>
		</article><!-- end first article -->

		<article>
			<h2>OATP 1200 Business Development<span>Credits: 6.0</span></h2>
			<p>This course has been designed to assist students in the acquisition, application and development of business skills to function effectively as an office administrator. Topics covered include, but are not limited to: financial reporting, business writing, customer service, public speaking, and presentation skills.</p>
			<a href="./pdf/OATP_1200_-_Business_Development.pdf" target="_blank"><span class="icon-file-pdf"></span>View full PDF version</a>
		</article><!-- end second article -->

		<article>
			<h2>OATP 2000 Information Technology<span>Credits: 24.0</span></h2>
			<p>This course has been designed to give students intermediate to advanced skills in the computer applications most commonly used in business. Topics covered include, but are not limited to: Microsoft Office, Visio, computerized accounting, desktop publishing, and Web site development.</p>
			<a href="./pdf/OATP_1000_-_Communication_Skills.pdf" target="_blank"><span class="icon-file-pdf"></span>View full PDF version</a>
		</article><!-- end third article -->

		<article>
			<h2>OATP 3000 Work Term<span>Credits: 24.0</span></h2>
			<p>This work practicum provides students with the opportunity to augment their classroom training and demonstrate learned business technology in a related position. Students will acquire and further refine their skills through real-world work experiences and potential mentor relationships with work practicum employers. Students working in an administrative related position may be able to use their employment in lieu of a work practicum.</p>
			<a href="./pdf/OATP_3000_-_Work_Term.pdf" target="_blank"><span class="icon-file-pdf"></span>View full PDF version</a>
		</article><!-- end fourth article -->
	</section><!-- end section -->
</main>

 <?php
 include_once('./templates/footer.php');
 ?>