<?php
ob_start();
$bodyClass = "index";
$mobileButtonClass = "home-mobile-button";
$pageTitle = "BCIT Office Administrator With Technology Program";
$metaDescription = "The BCIT Office Administrator with Technology program is a 6-month program that is designed to provide learners with the advanced computer and business skills required by administrative positions today";
$currentdate = date('Y-n');
require_once('./templates/header.php');
 ?>

	<div class="home-nav-container clearfix">
		<nav class="home-mobile-nav mobile-nav">
			<ul class="clearfix">
				<li><a href="courses.php">Courses</a></li>
				<li><a href="https://my.bcit.ca/cp/home/displaylogin" target="_blank">MyBCIT</a></li>
				<li><a href="http://www.bcit.ca/" target="_blank">BCIT</a></li>
			</ul>
		</nav><!-- end first nav -->

		<nav class="home-sub-nav"> <!-- hide in mobile environment -->
			<ul class="clearfix">
				<li><a href="courses.php">Courses</a></li>
				<li><a href="benefits.php">Benefits</a></li>
				<li><a href="https://my.bcit.ca/cp/home/displaylogin" target="_blank">MyBCIT</a></li>
				<li><a href="http://www.bcit.ca/" target="_blank">BCIT</a></li>
			</ul>
		</nav><!-- end second nav -->

		<nav class="home-main-nav">
			<ul class="clearfix">
				<li><?php echo "<a href='schedule.php?currentdate=".$currentdate."'>Schedule</a>"; ?></li>
				<li><a href="students.php">Students</a></li>
				<li><a href="certification.php">Certificate</a></li>
				<li><a href="jobs.php">Jobs</a></li>
				<li><a href="benefits.php">Benefits</a></li> <!-- hide in desktop environment -->
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav><!-- end third nav -->
	</div> <!-- end home-nav-container -->
</div><!-- end header-nav-container-->

 <?php
 include_once('./templates/footer.php');
 ?>