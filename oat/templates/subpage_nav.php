<?php
$currentdate = date('Y-n');
?>


<div class="subpage-nav-container">
    <nav class="subpage-mobile-nav mobile-nav">
        <ul class="clearfix">
          <li><a href="index.php">Home</a></li>          <!-- hide in desktop environment -->
          <li><?php echo "<a href='schedule.php?currentdate=".$currentdate."'>Schedule</a>"; ?></li>
          <li><a href="students.php">Students</a></li>
          <li><a href="jobs.php">Jobs</a></li>
          <li><a href="certification.php">Certificate</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="benefits.php">Benefits</a></li>
        </ul>
    </nav>
    <nav class="subpage-main-nav">
        <ul class="clearfix">
          <li><a href="index.php">Home</a></li>          <!-- hide in desktop environment -->
          <li><?php echo "<a href='schedule.php?currentdate=".$currentdate . "'" .$navHere[0] . ">Schedule</a>"; ?></li>
          <li><a href="students.php" <?php echo $navHere[1] ?>>Students</a></li>
          <li><a href="certification.php" <?php echo $navHere[2] ?>>Certificate</a></li>
          <li><a href="jobs.php" <?php echo $navHere[3] ?>>Jobs</a></li>
          <li><a href="contact.php" <?php echo $navHere[4] ?>>Contact</a></li>
        </ul>
    </nav>

    <nav class="subpage-sub-nav">
        <ul class="clearfix">
          <li><a href="index.php">Home</a></li>  <!-- hide in mobile environment -->
          <li><a href="courses.php" <?php echo $navHere[5] ?>>Courses</a></li>
          <li><a href="benefits.php" <?php echo $navHere[6] ?>>Benefits</a></li>
        </ul>
    </nav>
	</div>
</div>