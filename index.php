<?php include("variables.php"); ?> // Includes function

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
  	<?php include("navbar.php"); ?>
  	<br/>
  	<center>
    <h1>
    	<?php
			echo "Hello World!<br/>"; // Print out to the screen

			echo " And then she said: \"YOU're ugly!\" <br/>"; // Escape caracers:
			$first_name = "Natty";
			$favorite_number = 7;
			$last_name = "Postolache";
			$num_1 = 7;
			$num_2 = 10;
			var_dump($num_1 > $num_2);
			if($first_name == "Naty") {
				echo "<br/> Hello Naty! How are you?";
			} elseif ($first_name == "Natty") {
				echo "<br/> You're te boss!";
			} else {
				echo "<br/>" . $first_name . ", you are an intruder!";
			}
		?>
    </h1>
    </center>

    <?php echo $first_name; ?>
    <br/>
    <?php echo 41 + 4; ?>
    <br/>
    <?php echo $num_1 * $num_2; ?>
    <br/>
    <?php echo $num_2 ** $num_1; ?>
    <br/>
    <?php echo $first_name . " " . $last_name; ?>
    <br/>
    <?php echo ++$num_1; ?>
    <br/>
    
    <h2> <center>
    <?php 
    // Arrays number
    $names = array("John", "Curl", "Butt", "Ronaldo");
    echo $names[2] . "<br/>";

    // Arrays associative
    $fav_pizza = array(
    	"John" => "4cheese", 
    	"Steve" => "Vegetarian", 
    	"Bossulica" => "Halloumi"
    );

    echo $fav_pizza['Bossulica'] . "<br/>";
    echo count($fav_pizza) . "<br/>";

    // Arrays number

    $city = array("Iasi", "Bucharest", "Barcelona", "Madrid", "Athens", "Berlin");
    echo $city[count($city) - 1] . "<br/>";
    echo count($city) - 1 . "<br/>";

    $total = count($city) - 1;
    while ($total >= 0) {
    	echo $city[$total] . "<br/>";
    	--$total;
    }
    $total = 0;
    do {
		echo $city[$total] . "<br/>";
		++$total;
	} while ($total < count($city));
	// For loops
	for ($count = 0; $count <= 10; ++$count) {
		echo "The count is $count <br/>";
		}
		// For each loops

		$cars = array("Lamborghini", "Ferrari", "Aston Martin", "Pagani");
			foreach ($cars as $vehicle) {
				echo "$vehicle<br/>";
			}

			function activity($do) {
				return "Let's $do";
			}

			echo activity("I'm going to get a trip with ");

		// Random functions

			$babes = array("Miruna", "Andreea", "Eugenia", "Rebeca", "Jessica", "Theo", "Diana");
			echo $babes[mt_rand(0 , 6)] . " for " . rand(11 , 100) . " days and nights<br/>";

		// Date function
			echo date('l jS \of F, Y') . "<br/>";

			$todays_day = date('l');
			echo $todays_day . "<br/>";

		// String manipulation

			$stuff = "I'm the future programmer of the year <br/>";
			echo str_replace("future", "rising star", $stuff);
			echo strtoupper($stuff);
			echo ucwords($stuff);
			echo ucfirst($stuff);
			echo strtolower($stuff);
			echo lcfirst($stuff);
			echo strlen($stuff) . "<br/>";
			echo str_shuffle($stuff);

		// Include function

			include("footer.php");

     ?>
 </center>
 	</h2>
    </body>



  </body>
</html>





