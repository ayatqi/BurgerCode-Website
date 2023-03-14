<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['edit']))
{
		$Username = $_POST['username'];
		$Email = $_POST['email'];
		$Date = $_POST['date'];
		$Time = $_POST['time'];
		$Category_type = $_POST['category_name'];
		$Product_name = $_POST['product_name'];
		$Price = $_POST['price'];
		
	
	$query = "UPDATE orderproduct SET Category_type='$Category_type',Product_name='$Product_name',Price='$Price',Date='$Date',Time='$Time',Email='$Email' where Username='$Username'";
	
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

