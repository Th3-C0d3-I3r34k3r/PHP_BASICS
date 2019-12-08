<?php 
//Defining Constants

define("TITLE", "Constant Declaration");

//Decalaring Variables

$my_name = "baby";
$fav_color = "blue";
$birthyear = 1994;

// Setting the default time zone

date_default_timezone_set('asia/kolkatta');

// Manipulate today's date

$today = date('F j, Y');
$year = date('Y');  // calculate current year.

$my_age = ($year - $birthyear);

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<h1><?php echo TITLE;  ?></h1>
	<p>Today date is: <?php echo $today; ?></p>
	<p>My Name is: <?php echo $my_name; ?></p>
	<p>My Fav-Color is: <?php echo $fav_color; ?></p>
	<p>My Age is: <?php echo $my_age; ?></p>
	<br>
	<small>&c;<?php echo $my_name; ?>-<?php $year; ?></small>

</body>
</html>
