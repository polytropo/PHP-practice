<?php 	
	
		
		$connection = mysqli_connect('localhost', 'root', '', 'phptest');
		if ($connection) {
			echo "We are connected";
		}  else {
			die("Database connection failed");
		}

		$query = "SELECT * FROM usernames";

		$result = mysqli_query($connection, $query);

		if(!$result) {
			die("Insert  failed " . mysqli_error($connection)); 
		} 
	 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="col-3">
			<?php 
				while($row = mysqli_fetch_assoc($result)) {
			?>
					<div class="card p-3 my-3">
			<?php		
					print_r($row);
			?>
					</div>
			<?php
				}
			?>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>