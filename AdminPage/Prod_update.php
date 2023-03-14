<?php


$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['update']))
{
	    $Product_id = $_POST['Product_id'];
		$Product_name = $_POST['Product_name'];
		$Product_stock = $_POST['Product_stock'];
		$Product_price = $_POST['Product_price'];
		$Product_category = $_POST['Product_category'];
	
	$query = "UPDATE product SET product_id='$Product_id',product_stock='$Product_stock',product_category='$Product_category',product_price='$Product_price',product_name='$Product_name' where product_id='$Product_id'";
	
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