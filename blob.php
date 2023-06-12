<?php 

$connection = mysqli_connect("localhost","root","","blob"); 
$query = "SELECT * FROM blobs where id=1;";
$result = mysqli_query($connection,$query);

while ($row=mysqli_fetch_assoc($result)){
	$blobData=$row['image'];
}

mysqli_free_result($result);
mysqli_close($connection);

header("Content-Type: image/jpeg");
echo $blobData;

?>

