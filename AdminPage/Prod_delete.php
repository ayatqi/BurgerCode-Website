<?php


$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['delete']))
{
	$Product_id = $_POST['Product_id'];
	
	
	$query = "DELETE FROM product where product_id='$Product_id'";
	
	$query_run = mysqli_query($connection,$query);
	
	if($query_run)
	{
		echo'<script type="text/javascript">
		alert("Data Deleted")</script>';
	}
	else
	{
		echo'<script type="text/javascript">
		alert("Data Not Deleted")</script>';
	}
}


?>