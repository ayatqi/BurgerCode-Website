<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['add']))
{
	
		$Username = $_POST['username'];
		$Email = $_POST['email'];
		$Date = $_POST['date'];
		$Time = $_POST['time'];
		$Category_type = $_POST['category_name'];
		$Product_name = $_POST['product_name'];
		$Price = $_POST['price'];
		
		$query ="INSERT INTO orderproduct(Username,Email,Date,Time,Category_type,Product_name,Price) values('$Username','$Email','$Date','$Time','$Category_type','$Product_name','$Price')";
		$query_run = mysqli_query($connection,$query);
		
	if($query_run)
	{
		echo'<script type="text/javascript">
		alert("Data Added")</script>';
	}
	else
	{
		echo'<script type="text/javascript">
		alert("Data Not Added")</script>';
	}
}

?>

