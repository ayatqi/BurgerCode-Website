<?php


$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['delete']))
{
	$Category_id = $_POST['id'];
	
	$query = "DELETE FROM category where Category_id='$Category_id'";
	
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