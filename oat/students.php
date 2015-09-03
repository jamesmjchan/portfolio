<?php
ob_start();
$bodyClass = "subbody students";
$mobileButtonClass = "subpage-mobile-button";
$navHere = array('','class="nav-here"','','','','','');
$pageTitle = "OAT | Student 2015 Winter Intake";
$metaDescription = "Student names and portfolio URL";
require_once('./templates/header.php');
require_once('./templates/subpage_nav.php');
?>

<?php
require_once('config.php');//authorization for connecting to the database

for($i = 0; $i < 6; $i++){

	if (!array_key_exists($i, $alphabets)){
		echo "<h1 style='color: red'>Error: Please make sure you have entered six alphabets in the config file</h1>";
		goto footer;
		}
	}

$alphabetOne   = strtoupper($alphabets[0]);
$alphabetTwo   = strtoupper($alphabets[1]);
$alphabetThree = strtoupper($alphabets[2]);
$alphabetFour  = strtoupper($alphabets[3]);
$alphabetFive  = strtoupper($alphabets[4]);
$alphabetSix   = strtoupper($alphabets[5]);
$optionalSegment = false;

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);//Access to the database

// determine if connection was successful
if( mysqli_connect_errno() != 0 ){
	die("<p style='color:red'>Oops!Connection to the database failed...</p>");
}

/* create and run a query, capture results in variables */

$queryLastnameSegment1 = "SELECT * FROM students WHERE $sortBy REGEXP '^[$alphabetOne-$alphabetTwo]' ORDER BY $sortBy ";

$queryLastnameSegment2 = "SELECT * FROM students WHERE $sortBy REGEXP '^[$alphabetThree-$alphabetFour]' ORDER BY $sortBy ";

$queryLastnameSegment3 = "SELECT * FROM students WHERE $sortBy REGEXP '^[$alphabetFive-$alphabetSix]' ORDER BY $sortBy ";

?>

<main>
	<h1>Students</h1>
	<input type="text" id="search" placeholder="Type a name" name="search"></input>
	<?php
	//echo out the anchor links
	echo "<a class='segment' href='#segment1'>".$alphabetOne.' - '.$alphabetTwo."</a>".
			 "<a class='segment' href='#segment2'>".$alphabetThree.' - '.$alphabetFour."</a>".
			 "<a class='segment' href='#segment3'>".$alphabetFive.' - '.$alphabetSix."</a>";
			if (array_key_exists('6', $alphabets) && array_key_exists('7', $alphabets)) {
				$optionalSegment = true;
				$alphabetSeven = strtoupper($alphabets[6]);
				$alphabetEight = strtoupper($alphabets[7]);
				echo "<a class='segment' href='#segment4'>".$alphabetSeven.' - '.$alphabetEight."</a>";
			}
	?>

	<section class="student-info">
	<?php
		$result = $mysqli->query( $queryLastnameSegment1 );
		//output the first table
		echo "<table><thead><tr><th id='segment1' colspan ='2'>$alphabetOne - $alphabetTwo</th></tr></thead>";

		while( $oneRecord = $result->fetch_assoc() ){

			$firstname = $oneRecord['firstname'];
			$firstnameInitialLowercase = strtolower($firstname{0});
			$lastnameLowercase = strtolower($oneRecord['lastname']);
			$firstnameLowercase = strtolower($oneRecord['firstname']);
			$firstnameCapitalized = ucfirst($firstnameLowercase);
			$lastnameCapitalized = ucfirst($lastnameLowercase);

			echo "<tr><td>".$firstnameCapitalized." <span class='lastname'>".$lastnameCapitalized."</span></td>";
			echo "<td><a href='http://".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."' target='_blank'>
					 <span class='icon-briefcase'></span>".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."</a></td></tr>";
		}//end while
		echo "</table>";
	?>
	</section><!-- end first section -->

	<section class="student-info">
	<?php
		$result = $mysqli->query( $queryLastnameSegment2 );
		//output the second table
		echo "<table><thead><tr><th id='segment2' colspan ='2' >$alphabetThree - $alphabetFour</th></tr></thead>";

		while( $oneRecord = $result->fetch_assoc() ){

			$firstname = $oneRecord['firstname'];
			$firstnameInitialLowercase = strtolower($firstname{0});
			$lastnameLowercase = strtolower($oneRecord['lastname']);
			$firstnameLowercase = strtolower($oneRecord['firstname']);
			$firstnameCapitalized = ucfirst($firstnameLowercase);
			$lastnameCapitalized = ucfirst($lastnameLowercase);

			echo "<tr><td> ".$firstnameCapitalized." <span class='lastname'>".$lastnameCapitalized."</span></td>";
			echo "<td><a href='http://".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."' target='_blank'>
					 <span class='icon-briefcase'></span>".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."</a></td></tr>";
		}//end while
		echo "</table>";
	?>
	</section><!-- end second section -->

	<section class="student-info">
	<?php
	$result = $mysqli->query( $queryLastnameSegment3 );
	//output the third table
	echo "<table><thead><tr><th id='segment3' colspan ='2' >$alphabetFive - $alphabetSix</th></tr></thead>";

	while( $oneRecord = $result->fetch_assoc() ){
		$firstname = $oneRecord['firstname'];
		$firstnameInitialLowercase = strtolower($firstname{0});
		$lastnameLowercase = strtolower($oneRecord['lastname']);
		$firstnameLowercase = strtolower($oneRecord['firstname']);
		$firstnameCapitalized = ucfirst($firstnameLowercase);
		$lastnameCapitalized = ucfirst($lastnameLowercase);

		echo "<tr><td> ".$firstnameCapitalized." <span class='lastname'>".$lastnameCapitalized."</span></td>";
		echo "<td><a href='http://".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."'target='_blank'>
				 <span class='icon-briefcase'></span>".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."</a></td></tr>";
	}//end while
	echo "</table>";
	?>
	</section><!-- end third section -->

	<?php
	//output the optional fourth table if required
	if ($optionalSegment) {

	$queryLastnameOptional = "SELECT * FROM students WHERE $sortBy REGEXP '^[$alphabetSeven-$alphabetEight]' ORDER BY $sortBy ";
	$result = $mysqli->query( $queryLastnameOptional );

	echo '<section class="student-info"><table><thead><tr>';
	echo "<th id='segment4' colspan ='2'>$alphabetSeven - $alphabetEight</th></tr></thead>";

	while( $oneRecord = $result->fetch_assoc() ){
		$firstname = $oneRecord['firstname'];
		$firstnameInitialLowercase = strtolower($firstname{0});
		$lastnameLowercase = strtolower($oneRecord['lastname']);
		$firstnameLowercase = strtolower($oneRecord['firstname']);
		$firstnameCapitalized = ucfirst($firstnameLowercase);
		$lastnameCapitalized = ucfirst($lastnameLowercase);

		echo "<tr><td> ".$firstnameCapitalized." <span class='lastname'>".$lastnameCapitalized."</span></td>";
		echo "<td><a href='http://".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."'target='_blank'>
				 <span class='icon-briefcase'></span>".$oatWebAddress.$firstnameInitialLowercase.$lastnameLowercase."</a></td></tr>";
	}//end while
	echo "</table></section>";
	}//end if

	?>

</main>

 <?php
 footer:
 include_once('./templates/footer.php');
 ?>