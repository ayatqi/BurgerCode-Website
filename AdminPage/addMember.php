<?php

$dbname = "project";
$connection = mysqli_connect("localhost","root","",$dbname);

if(isset($_POST['add']))
{
	
		$Member_ID = $_POST['id'];
		$Member_Name = $_POST['name'];
		$Member_Phone = $_POST['phone'];
		$Member_Gender = $_POST['gender'];
		$Member_Point = $_POST['point'];
		$Member_Address = $_POST['address'];
		
		$query ="INSERT INTO member(Member_ID,Member_Name,Member_Phone,Member_Gender,Member_Point,Member_Address) values('$Member_ID','$Member_Name','$Member_Phone','$Member_Gender','$Member_Point','$Member_Address')";
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