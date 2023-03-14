<?php

$dbname = "project";
$connection = mysqli_connect("localhost","root","",$dbname);

if(isset($_POST['add']))
{
	
		$Staff_ID = $_POST['id'];
		$Staff_Name = $_POST['staffname'];
		$Staff_Phone = $_POST['phone'];
		$Staff_Gender = $_POST['gender'];
		$Staff_Position = $_POST['position'];
		$Staff_Address = $_POST['address'];
		
		$query ="INSERT INTO staff(Staff_ID,Staff_Name,Staff_Phone,Staff_Gender,Staff_Position,Staff_Address) values('$Staff_ID','$Staff_Name','$Staff_Phone','$Staff_Gender','$Staff_Position','$Staff_Address')";
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