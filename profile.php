<?php
session_start();
error_reporting(0);

	$userprofile = $_SESSION['user_name'];
	
	if($userprofile==true)
	{
		
	}	
	else
	{
		header('location:login.php');
	}
	
	$sql = "SELECT * FORM employees WHERE username='$userprofile'";
	$data = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($data);
	$result = mysqli_fetch_assoc($data);
	echo  "Good Day Ahed ".$result['username'];
	




?>
<hr><br>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>employee</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<a href="employeeinfo.php">eInfo</a><br>
	<a href="addcustomer.php">Add Customers</a>
	<a href="viewcustomers.php">View All Customers</a><br><br>
	<a href="adddelivery.php">Add Delivery Boys</a>
	<a href="viewdeliveries.php">View All Delivery Boys</a><br><br>
	<a href="addbreakfast.php">Add breakfast</a>
	<a href="viewbreakfast.php">view breakfast</a><br><br>
    <a href="addlunch.php">Add lunch</a>
	<a href="viewlunch.php">view lunch</a><br><br>
	<a href="adddinner.php">Add dinner</a>
	<a href="viewdinner.php">view dinner</a><br><br>
	
	<br><br><a href="logout.php">Logout</a>
	
</body>
</html>