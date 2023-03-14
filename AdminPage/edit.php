<!DOCTYPE html>
<html>
<head><title>Manage Order Page</title></head>
<link rel="stylesheet" href="Project7.css">
<body>
<div class="container">

	<div class="formtitle">
	<h2>EDIT ORDER</h2>
	</div>
	<div class="mngform">
	<form action="edit.php" method="POST">
	<p>Member ID:<input type="text" name="id" placeholder="Enter Member ID"></p>
	<p>Member Name:<input type="text" name="name" placeholder="Enter Member Name"></p>
	<p>Phone Number:<input type="text" name="phone" placeholder="Enter Member Phone"></p>
	<p>Date:<input type="date" name="date" min="2021-01-01" max="2021-12-31"/></p>
	<p>Time:<input type="time" name="time" min="11:15:00" max="11:15:00"/></p>
	<p>Number of person:<input type="text" name="No.of person" placeholder="Enter no.of person"></p>
	<p>Preferred food:<input type="text" name="food" placeholder="Enter preferred food"></p>
	
	<p><input type="submit" name="edit" value="EDIT"></p>

	</form>
	
	</div>
	
</div>

<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['edit']))
{
	$Member_ID = $_POST['id'];
	$Member_Name = $_POST['name'];
	$Member_Phone = $_POST['phone'];
	$Date = $_POST['date'];
	$Time = $_POST['time'];
	$Number_of_person = $_POST['address'];
	$Preferred_food = $_POST['food'];
	
	$query = "UPDATE order SET Member_Name='$Member_Name',Member_Phone='$Member_Phone',Date='$Date',Time='$Time',Number_of_person='$Number_of_person',Preferred_food='$Preferred_food' where Member_ID='$Member_ID'";
	
	$query_run = mysqli_query($connection,$query);
	
	if($query_run)
	{
		echo'<script type="text/javascript">
		alert("Data Edited")</script>';
	}
	else
	{
		echo'<script type="text/javascript">
		alert("Data Not Edited")</script>';
	}
}


?>

</body>
</html>