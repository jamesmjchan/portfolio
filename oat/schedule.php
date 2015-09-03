<?php
ob_start();
$bodyClass         = "subbody schedule";
$mobileButtonClass = "subpage-mobile-button";
$navHere           = array('class="nav-here"','','','','','','');
$pageTitle = "OAT | Program Schedule";
$metaDescription = "Monthly schedule of the OAT program";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
$scheduleTable = "schedule";


 ?>




<?php
//set the const in database host user password and name
require_once('config.php');


//Access the database of oat_25_students
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// determine if connection was successful
if( mysqli_connect_errno() != 0 ){
	die("<p>Could not connect to DataBase</p>");
	//link back to home page echo "<p>index.html</p>";
}
// if(isset($_GET['currentdate']) == false ){
// 	header('Location:schedule.php?currentdate='.$currentdate);
// }
$currentDate = date('Y-n');
$currentyear = date('Y');
$currentdate = $_GET['currentdate'];   //get the date 2xxx-x from subpages
$query         = "SELECT fulldate FROM $scheduleTable";
$result        = $mysqli->query( $query );
$row           = mysqli_fetch_array($result);
$dateStarts    = $row['fulldate'];
//first month of the course
$query         = "SELECT * FROM $scheduleTable WHERE fulldate = '".$dateStarts."' ";
$result        = $mysqli->query( $query );
$row           = mysqli_fetch_array($result);
$firstMonth    = new DateTime($row['fulldate']);
$ouputMonthNav = $firstMonth->format('F');
$monthNavLink  = $firstMonth->format('Y-n');


	if((!preg_match("/^20[0-9]{2}-[0-1]{1}[0-9]{1}$/", $currentdate))&&(!preg_match("/^20[0-9]{2}-[0-9]{1}$/", $currentdate))){
		header('Location:schedule.php?currentdate='.$monthNavLink);
	}
	$invalidMonth = array($currentyear.'-'.'13', $currentyear.'-'.'14', $currentyear.'-'.'15', $currentyear.'-'.'16', $currentyear.'-'.'17', $currentyear.'-'.'18', $currentyear.'-'.'19');
	foreach($invalidMonth as $oneMonth){
		if( $currentdate == $oneMonth){
			header('Location:schedule.php?currentdate='.$monthNavLink);

		}

	}

	$currentMonth        = new DateTime($currentdate);
	$currentmonth        = $currentMonth->format('n'); //convert 2XXX-X to just x
	$currentyear         = $currentMonth->format('Y');
	$currentMonthDisplay = $currentMonth->format('F');


	// echo $currentdate;
	$bgc = '';

	//add one month -> next month
	$addOneMonth      = new DateTime($currentdate);
	$addOneMonth->modify('+1 month');
	$nextMonth        = $addOneMonth->format('Y-n');

	//subtract one month -> previous month
	$subtractOneMonth = new DateTime($currentdate);
	$subtractOneMonth->modify('-1 month');
	$prevMonth        = $subtractOneMonth->format('Y-n');

	// //get the specific data from database
	$query  = "SELECT * FROM $scheduleTable WHERE month = '".$currentmonth."' ";
	$result = $mysqli->query( $query );

	if(empty($_GET['currentdate'])){
	header('Location:schedule.php?currentdate='.$currentDate);
	}else{
	$row       = mysqli_fetch_array($result);
	$dataYear  = $row['year'];
	$dataMonth = $row['month'];
	if( ($currentyear != $dataYear)&&($currentMonth != $dataMonth) ){
			header('Location:schedule.php?currentdate='.$monthNavLink);
		}
	}

?>

<main>
	<h1>Schedule</h1>
<?php

	$numberOfRecordsInResult = $result->num_rows;
	// echo "<p>Number of records:".$numberOfRecordsInResult ."</p>";
	if($numberOfRecordsInResult == '0' ){
		$currentdate = date('Y-n');
		// echo $currentdate;
		header('Location:schedule.php?currentdate='.$monthNavLink.'');

	}else{
		echo "<div class='month-control'>";

		echo "<h2>";
		echo "<a href='schedule.php?currentdate=".$prevMonth."'><span class='icon-circle-left'></span></a>";
		echo "<span>".$currentMonthDisplay."</span>";
		echo "<a href='schedule.php?currentdate=".$nextMonth."'><span class='icon-circle-right'></span></a>";
		echo "</h2>";

	}
		//output the month
		//make it more flexible to the next semester
		$query         = "SELECT fulldate FROM $scheduleTable";
		$result        = $mysqli->query( $query );
		$row           = mysqli_fetch_array($result);
		$dateStarts    = $row['fulldate'];
		//first month of the course
		$query         = "SELECT * FROM $scheduleTable WHERE fulldate = '".$dateStarts."' ";
		$result        = $mysqli->query( $query );
		$row           = mysqli_fetch_array($result);
		$firstMonth    = new DateTime($row['fulldate']);
		$ouputMonthNav = $firstMonth->format('F');
		$monthNavLink  = $firstMonth->format('Y-n');
		echo "<a href='schedule.php?currentdate=".$monthNavLink."'>".$ouputMonthNav."</a>";
		//Second month of the course
		$secondMonth   = new DateTime($dateStarts);
		$secondMonth->modify('+1 month');
		$secondMonth   = $secondMonth->format('n/j/Y');
		$query         = "SELECT * FROM $scheduleTable WHERE fulldate = '".$secondMonth."' ";
		$result        = $mysqli->query( $query );
		$row           = mysqli_fetch_array($result);
		$monthNav      = new DateTime($row['fulldate']);
		$ouputMonthNav = $monthNav->format('F');
		$monthNavLink  = $monthNav->format('Y-n');
		echo "<a href='schedule.php?currentdate=".$monthNavLink."'>".$ouputMonthNav."</a>";
		//Third month of the course
		$thirdMonth    = new DateTime($secondMonth);
		$thirdMonth->modify('+1 month');
		$thirdMonth    = $thirdMonth->format('n/j/Y');
		$query         = "SELECT * FROM $scheduleTable WHERE fulldate = '".$thirdMonth."' ";
		$result        = $mysqli->query( $query );
		$row           = mysqli_fetch_array($result);
		$monthNav      = new DateTime($row['fulldate']);
		$ouputMonthNav = $monthNav->format('F');
		$monthNavLink  = $monthNav->format('Y-n');
		echo "<a href='schedule.php?currentdate=".$monthNavLink."'>".$ouputMonthNav."</a>";
		//Fourth month of the course
		$fourthMonth   = new DateTime($thirdMonth);
		$fourthMonth->modify('+1 month');
		$fourthMonth   = $fourthMonth->format('n/j/Y');
		$query         = "SELECT * FROM $scheduleTable WHERE fulldate = '".$fourthMonth."' ";
		$result        = $mysqli->query( $query );
		$row           = mysqli_fetch_array($result);
		$monthNav      = new DateTime($row['fulldate']);
		$ouputMonthNav = $monthNav->format('F');
		$monthNavLink  = $monthNav->format('Y-n');
		echo "<a href='schedule.php?currentdate=".$monthNavLink."'>".$ouputMonthNav."</a>";
		echo "</div>";

		//ouput the mobile-schedule in html
	echo "<table class='mobile-schedule'>";
		$query  = "SELECT * FROM $scheduleTable WHERE month = '".$currentmonth."' ";
		$result = $mysqli->query( $query );
			echo "<tr><th>Date</th><th>Room</th><th>Course / Instructor</th>";
			echo "</tr>";
	while( $oneRecord = $result->fetch_assoc() ){
		$currentYear  = date('Y');
		$currentMonth = date('n');
		$currentDate  = date('j');

			if( $oneRecord['year'] == $currentYear && $oneRecord['month'] == $currentMonth && $oneRecord['date'] == $currentDate ){
				$bgc = 'class = "today"';
			}else{
				$bgc = '';//reset $bgc value
			}
			//add class when the database date is equal to today.
			if($oneRecord['course']==''){
				$bgca = 'class = "hideweekend"';
			}else{
				$bgca ='';
			}
		echo "<tr ".$bgc.$bgca.">";
		echo "<td> ".$oneRecord['date']." </td>";
		echo "<td>".$oneRecord['room']."</td>";
		echo "<td><span>".$oneRecord['course']."</span><span>".$oneRecord['instructor']."</span></td>";
		echo "</tr>";



	}
	echo "</table>";

//Desktop-schedule
function draw_calendar($month,$year){
		$scheduleTable = "schedule";
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$currentDate = date('Y-n');
		$currentyear = date('Y');
		$currentdate = $_GET['currentdate'];   //get the date 2xxx-x from subpages
		$currentMonth        = new DateTime($currentdate);
		$currentmonth        = $currentMonth->format('n'); //convert 2XXX-X to just x
		$currentyear         = $currentMonth->format('Y');
		$currentMonthDisplay = $currentMonth->format('F');
		$query   = "SELECT * FROM $scheduleTable WHERE month = '".$currentmonth."' ";
		$result  = $mysqli->query( $query );
		/* draw table */
		$calendar = '<table class="desktop-schedule">';
		/* table headings */
		$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		$calendar.= '<thead><th>'.implode('</th><th>',$headings).'</th></thead>';

		/* days and weeks vars now ... */
		$running_day = date('w',mktime(0,0,0,$month,1,$year));
		$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
		$days_in_this_week = 1;
		$day_counter = 0;
		$dates_array = array();

		/* row for week one */
		$calendar.= '<tr>';

		/* print "blank" days until the first of the current week */
		for($x = 0; $x < $running_day; $x++):
				$calendar.= '<td class="calendar-day-np"> </td>';
				$days_in_this_week++;
		endfor;

		/* keep going with days.... */
		for($list_day = 1; $list_day <= $days_in_month; $list_day++):
			$currentYear  = date('Y');
			$currentMonth = date('n');
			$currentDate  = date('j');
			$row          = mysqli_fetch_array($result);
			if( $row['year'] == $currentYear && $row['month'] == $currentMonth && $row['date'] == $currentDate ){
						$bgc = 'class = "today"';
			}else{
						$bgc = "";
			}
				$calendar.= "<td ".$bgc.">";

				/* add in the day number */
				$calendar.= '<span class="date">'.$list_day."</span>
				 <span class='room'>Room ".$row['room']."</span>
				 <span class='instructor'>".$row['instructor']."</span>
				 <span class='course'>".$row['course']."</span></td>";


				/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
				$calendar.= '</td>';
				if($running_day == 6):
				$calendar.= '</tr>';
					if(($day_counter+1) != $days_in_month):
					$calendar.= '<tr>';
					endif;
				$running_day = -1;
				$days_in_this_week = 0;
				endif;
				$days_in_this_week++; $running_day++; $day_counter++;
		endfor;

		/* finish the rest of the days in the week */
		if($days_in_this_week < 8):
				for($x = 1; $x <= (8 - $days_in_this_week); $x++):
				$calendar.= '<td class="calendar-day-np"> </td>';
				endfor;
		endif;
		/* final row */
		$calendar.= '</tr>';
		/* end the table */
		$calendar.= '</table>';
		/* all done, return result */
		return $calendar;
}

$currentdate = $_GET['currentdate'];
$currentdate = new DateTime($currentdate);
$month = $currentdate->format('n');
$year = $currentdate->format('Y');
//echo out the table schedule
echo draw_calendar($month,$year);

?>
</main>

 <?php
 include_once('./templates/footer.php');
 ?>