<?php

$connection = mysqli_connect("localhost","root","","project");

if(isset($_POST['add']))
{
	
		$Category_id = $_POST['id'];
		$Category_name = $_POST['name'];
		
		$query ="INSERT INTO category(Category_id,Category_name) values('$Category_id', '$Category_name')";
		$query_run = mysqli_query($connection,$query);
		
	if($query_run){
		
		?>
      <script>
        alert("Data Added");
      </script>
	  
    <?php
	}
	else
	{
		?>
      <script>
        alert("Data Not Added");
      </script>
    <?php
	}
	
	
}

?>