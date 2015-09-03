<?php
ob_start();
$bodyClass = "subbody certification";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','','class="nav-here"','','','','');
$pageTitle = "OAT | Get Certified As A Microsoft Office Specialist";
$metaDescription = "The Microsoft credentials are a globally recognized standard that validates skills with using the 2013 Microsoft Office system. The successor to the Microsoft Certified Application Specialist credential meets the demand for the most up-to-date skills on the latest technologies from Microsoft.";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
 ?>

<main>
 	<h1>Microsoft Certification</h1>
 	<section>
		<article>
			<h2>Microsoft Office Specialist</h2>
			<p>The Microsoft credentials are a globally recognized standard that validates skills with using the 2013 Microsoft Office system. The successor to the Microsoft Certified Application Specialist credential meets the demand for the most up-to-date skills on the latest technologies from Microsoft.</p>
			<p>The MOS credential validates the skills that individuals and organizations depend on. Candidates who successfully complete the program by passing a certification exam prove that they meet globally recognized performance standards and are able to work productively and efficiently.</p>
			<p>Candidates must pass one certification exam in order to earn the MOS credential. Below are links to review the skills measured of each available exam.</p>
			<img src="images/ms_specialist.jpg" alt="MS Specialist Logo">
			<ul>
				<li><a href="http://www.microsoft.com/learning/en-us/exam-77-418.aspx" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Word 2013</a></li>
				<li><a href="http://www.microsoft.com/learning/en-us/exam-77-420.aspx" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Excel 2013</a></li>
				<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-422" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office PowerPoint 2013</a></li>
				<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-424" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Access 2013</a></li>
				<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-423" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Outlook 2013</a></li>
			</ul>
	 	</article><!--end first article-->

	 	<article>
			<h2>Microsoft Office Master</h2>
			<p>Demonstrate your master-level expertise with Microsoft Office programs. The Microsoft Office 20130 Master certification shows that you have the technical skills to efficiently use the full features of the 2013 Office system.</p>
			<p>To earn the <a href="http://www.microsoft.com/learning/en-us/mos-expert-certification.aspx" target="_top">Microsoft Office 2013 Master</a> certification, you must pass four of the following MOS exams:</p>
			 <img src="images/ms_master.png" alt="MS Master Logo">
			<ul>
				<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-425" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Word 2013 Part 1 Expert</a></li>
			 	<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-425" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Word 2013 Part 2 Expert</a></li>
			 	<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-427" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Excel 2013 Part 1 Expert</a></li>
			 	<li><a href="http://www.microsoft.com/learning/en-us/exam.aspx?ID=77-428" target="_blank"><span class="icon-link link"></span>MOS: Microsoft Office Excel 2013 Part 2 Expert</a></li>
			</ul>
	 	</article><!--end second article-->

	 	<article>
			<h2>Certiport</h2>
			<p>Certiport is a provider of exam certifications which are distributed to a specialized worldwide network of testing centers, during the program all MOS exams will be delivered through this organization.  Certiport will keep an online version of your transcript available for you to view and print at any time.</p>
				<img src="images/certipot_logo.jpg" alt="Certiport Logo">
			<ul>
				<li><a href="http://www.certiport.com" target="_blank"><span class="icon-link link"></span>Visit Certiport Web Site</a></li>
			</ul>
	 	</article><!--end third article-->
  </section><!--end section-->
</main>

 <?php
 include_once('./templates/footer.php');
 ?>