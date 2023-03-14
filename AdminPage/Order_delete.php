<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['delete']))
{
	$Username = $_POST['username'];
	
	$query = "DELETE FROM orderproduct where Username='$Username'";
	
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