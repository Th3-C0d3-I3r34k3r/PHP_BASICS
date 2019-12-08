<?php
 
 //Constant Declaration

define("TITLE", "Arrays");

//Custom Variable

 $my_name = "baby";

 //Creating An Array

 $fruits = array("banana", "apple", "orange");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<h1><?php echo TITLE; ?></h1>
	<h2>Fruits I Like:</h2>
	<ul>
		<li><?php echo $fruits[0]; ?></li>
		<li><?php echo $fruits[1]; ?></li>
		<li><?php echo $fruits[2]; ?></li>
	</ul>
	<small>&copy;<?php echo date('Y'); ?>- <?php echo $my_name; ?></small>

</body>
</html>
