<?php
 //Defining Constant
 define("TITLE", "AssociativeArray");

// Variable Declaration

 $my_name = "baby";

 //Associative array

 $bike = array(
             name => "R15",
             brand => "Yamaha",
             color => "blue"
              );
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?> </title>
 </head>
<body>
	<h1><?php echo TITLE; ?></h1>

	<p>
		 i bought a<?php echo $bike['name'] ?> of <?php echo $bike['color'] ?> .

	</p>

</body>
</html>
