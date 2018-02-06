<?php 
	if(isset ($_POST["submit"])) {
		echo "Its connected";
		$name = $_POST["firstname"];
		
		if (strlen($name) < 5) { echo "Enter at least 5 charachters!";
		
		} else { 
			echo "Your name is " . $name . "!";
		}
	}
	
	$randomTxt = "randomValue in here";
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashSalt = $hashFormat . $salt;
	$encryptedRandomTxt = crypt($randomTxt, $hashSalt);
	
	echo $encryptedRandomTxt;

	

?>