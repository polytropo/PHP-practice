<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<table class="table table-inverse">
		<thead>
			<tr>
				<?php 
					$multiArray = array ("Family" => array("primoz", "anu", "matej"), "pets" => array("moksi", "willow", "toro"), "roommates" => array("Sara", "Natasha"));

					foreach($multiArray as $first => $bla) { echo "<th>" . $first . "</th>";} ?>
			</tr>
		</thead>
		<tbody>


			<?php 

				
				
				
				/* echo "<br>" . $multiArray["Family"][1] . "<br>"; */
				
				foreach($multiArray as $key=>$row) {
    			echo "<tr>";
    foreach($row as $key2=>$row2){
        echo "<td>" . $row2 . "</td>";
    }
    echo "</tr>";
}
echo "</table>";





	?>
		</tbody>
	</table>

		<!-- <table class="table table-inverse">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>jdoe@gmail.com</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Will</td>
                    <td>Johnson</td>
                    <td>will@yahoo.com</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Shannon</td>
                    <td>Williams</td>
                    <td>shannon@yahoo.com</td>
                </tr>
            </tbody>
        </table> -->

	<form class="form-control" action="practice.php" method="post" accept-charset="utf-8">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php 
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$connection = mysqli_connect('localhost', 'root', '', 'phptest');
			if ($connection) {
				echo "We are connected";
			}  else {
				die("Database connection failed");
			}

			$query = "INSERT INTO usernames(username, password)"; 
			$query .= "VALUES ('$username', '$password')";

			$result = mysqli_query($connection, $query);

			if(!$result) {
				die("Insert  failed " . mysqli_error()); 
			} else {
				echo "New username added!";
			}
		} 
		// $query= 'CREATE DATABASE PHPtest2';
		// if (mysqli_query($connection, $query)) {
		// 	"Echo we created atabase for you!";
		// } else {
		// 	echo "Database creation failed";
		// }
	?>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>