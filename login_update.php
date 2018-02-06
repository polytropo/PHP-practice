<?php 	
	
		
	$connection = mysqli_connect('localhost', 'root', '', 'phptest');
	if (!$connection) {
		
		die ("Database connection failed");
	}

	$query = "SELECT * FROM usernames";

	$result = mysqli_query($connection, $query);

	if(!$result) {
		die("Insert  failed " . mysqli_error($connection)); 
	} 
 
 	if(isset($_POST["update"])) {
 		$username = $_POST["username"];
 		$password = $_POST["password"];
 		$id = $_POST["id"];

 		$queryUpdate = "UPDATE usernames SET ";
 		$queryUpdate .= "username='$username', password='$password' ";
 		$queryUpdate .= "WHERE id = $id";

 		$updateSql = mysqli_query($connection, $queryUpdate);
 		if(!$updateSql) {
 			die ("QUERY FAILED");

 		} 
 	}
 	
	
	$resultAll = mysqli_query($connection, $query);
	mysqli_close($connection);
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
	<div class="p-5">
		<h1>UPDATE</h1>
		<div class="col-6">
			<form class="form-control" action="login_update.php" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input type="text" name="password" class="form-control">
				</div>
				<div class="form-group">
					
					<select  id="" name="id">
						<?php

							while ($row = mysqli_fetch_assoc($result)){
								// print_r($row);
								$id = $row['id'];
								echo "<option value='$id'>$id</option>";
							}
						?>
					

				</div>
				
				<input class="btn btn-primary" type="submit" name="update" value="Update">
				
			</form>

			</div>
		<div class="container">
			<div class="col-6">
				<?php 
					while($row = mysqli_fetch_assoc($resultAll)) {
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
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>