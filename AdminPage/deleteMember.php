<?php


$dbname ="project";
$connection = mysqli_connect("localhost","root","",$dbname);

if(isset($_POST['delete']))
{
	$Member_ID = $_POST['id'];
	
	$query = "DELETE FROM member where Member_ID='$Member_ID'";
	
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