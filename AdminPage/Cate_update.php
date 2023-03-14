<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['update']))
{
	$Category_id = $_POST['id'];
	$Category_name = $_POST['category'];
	
	$query = "UPDATE category SET Category_id ='$Category_id', Category_name ='$Category_name'where Category_id='$Category_id'";
	
	$query_run = mysqli_query($connection,$query);
	
	if($query_run)
	{
		echo'<script type="text/javascript">
		alert("Data Updated")</script>';
	}
	else
	{
		echo'<script type="text/javascript">
		alert("Data Not Updated")</script>';
	}
}


?>