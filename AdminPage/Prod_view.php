<?php
	
$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['view']))
{
	$query = "SELECT * FROM product_table";
	$result = mysqli_query($connection,$query);
	while($rw = mysqli_fetch_array($result))
	{
		echo"".$rw["product_name"]." ".$rw["product_stock"]." ".$rw["product_price"]." ".$rw["product_category"]."<br>";
		
	}
}


?>