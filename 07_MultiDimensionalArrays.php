<?php

// Declaring constant

define("TITLE", "MultiDimensionalArrays");

// variables

$my_name = "baby";

//MultiDimensionalArrays

$bikes = array(
              
               array(
                   name=>"r15",
                   year=>2015,
                   color=>"blue"
               ),
               array(
                   name=>"KTM",
                   year=>2016,
                   color=>"orange"
                            ),
               array(
                   name=>"Apache",
                   year=>2018,
                   color=>"white"
      
               ),
     );
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<h1><?php echo TITLE; ?></h1>
	<p>
		
      BikeName:<?php  echo $bikes[0]['name'];?>
      ReleaseYear:<?php echo $bikes[0]['year']; ?>
      Color: <?php echo $bikes[0]['color']; ?>

	</p>
<p>
		
      BikeName:<?php  echo $bikes[1]['name'];?>
      ReleaseYear:<?php echo $bikes[1]['year']; ?>
      Color: <?php echo $bikes[1]['color']; ?>
      
	</p>
<p>
		
      BikeName:<?php  echo $bikes[2]['name'];?>
      ReleaseYear:<?php echo $bikes[2]['year']; ?>
      Color: <?php echo $bikes[2]['color']; ?>
      
	</p>

</body>
</html>
