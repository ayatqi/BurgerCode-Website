<?php
	
$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['view']))
{
	$query = "SELECT * FROM category";
	$result = mysqli_query($connection,$query);
	
	while($rw = mysqli_fetch_array($result))
	{
		echo"".$rw["Category_id"]." ".$rw["Category_name"]."<br>";
	}
}

?>