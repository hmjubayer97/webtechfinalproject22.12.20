<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rms";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
 
	$id = $_GET['id'];
	$query = "DELETE FROM lunch where id='$id'";
	$data = mysqli_query($conn, $query);
	if($data)
	{
		echo "Data Delete";
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/employee/viewlunch.php">



	<?php	
	}
	else
	{
		echo "Failed";
	}
?>