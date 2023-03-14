<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['view']))
{
	$query = "SELECT * FROM orderproduct";
	$result = mysqli_query($connection,$query);
	while($rw = mysqli_fetch_array($result))
	{
		echo"".$rw["Username"]." ".$rw["Email"]." ".$rw["Date"]." ".$rw["Time"]." ".$rw["Category_type"]." ".$rw["Product_name"]." ".$rw["Price"]."<br>";
		
	}
}



?>