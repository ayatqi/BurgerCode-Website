<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['add']))
{
	
		$Product_id = $_POST['Product_id'];
		$Product_name = $_POST['Product_name'];
		$Product_stock = $_POST['Product_stock'];
		$Product_price = $_POST['Product_price'];
		$Product_category = $_POST['Product_category'];
		
		$query ="INSERT INTO product(product_id,product_category, product_name,product_stock,product_price) values('$Product_id','$Product_category','$Product_name','$Product_stock','$Product_price')";
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