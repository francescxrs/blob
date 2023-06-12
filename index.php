<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$connection = mysqli_connect("localhost","root","","blob"); 
		if (!$connection) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$query = "SELECT * FROM blobs WHERE id=1;";
		$result = mysqli_query($connection,$query);
		while ($row=mysqli_fetch_assoc($result)){
			$identificador=$row['id'];
		}
		mysqli_free_result($result);
		mysqli_close($connection);
	?>
	<img src="blob.php">
</body>
</html>
