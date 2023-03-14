<?php

$connect = mysqli_connect("localhost","root","","project");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Report</title>
    <link href="sales.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>

    <div class="content">


    		<a href="MemberAdd.html"><span>Add Member</span></a>
    		<hr>
    		<a href="MemberUpdate.html"><span>Update Member</span></a>
    		<hr>
    		<a href="MemberDelete.html"><span>Delete Member</span></a>
    		<hr>
    		<a href="MemberView.html"><span>View Member</span></a>
    		<hr>
        <a href="StaffAdd.html"><span>Add Staff</span></a>
    		<hr>
    		<a href="StaffUpdate.html"><span>Update Staff</span></a>
    		<hr>
        <a href="StaffSelection.html"><span>Select Staff</span></a>
    		<hr>
    		<a href="StaffDelete.html"><span>Delete Staff</span></a>
    		<hr>
    		<a href="StaffView.html"><span>View Staff</span></a>
    		<hr>
        <a href="MemberAdd.html"><span>Add Product</span></a>
        <hr>
        <a href="MemberUpdate.html"><span>Update Product</span></a>
        <hr>
        <a href="MemberDelete.html"><span>Delete Product</span></a>
        <hr>
        <a href="MemberView.html"><span>View Product</span></a>
        <hr>

        <a href="sales_report.php"><span>Sales Report</span></a>
        <hr>

      </div>
      <a class="Home" href="main.html"><input type="submit" name="HOME" value="HOME" /></a>
      <a class="Logout" href="logout.php"><input type="submit" name="LOGOUT" value="LOGOUT" /></a>
    </div>


<div class="mid">
    <h1>Product Sales Report</h1>
    <h2>BurgerCode</h2>

    <?php
    echo date("D, M j, Y");
     ?>

    <hr>

	   <table width="650px">
		     <tr>
			        <th>Product ID</th>
			        <th>Product Name</th>
			        <th>Product Stock</th>
              <th>Product Price</th>
              <th>Product Category</th>
        </tr>
		      <?php

		     $result = mysqli_query($connect, "select * from product");
	       while($row = mysqli_fetch_assoc($result))
		     {
			        ?>

			<tr>
				<td><?php echo $row["product_id"]; ?></td>
				<td><?php echo $row["product_name"]; ?></td>
				<td><?php echo $row["product_stock"]; ?></td>
        <td><?php echo $row["product_price"]; ?></td>
        <td><?php echo $row["product_category"]; ?></td>

			</tr>

			<?php
		}
		?>

    <tfoot>
      <tr>
        <th>Total</th>
        <th colspan="1"></th>
        <?php

        $result = mysqli_query($connect, "select sum(Product_stock) as ssum from product");
        while($row = mysqli_fetch_assoc($result))
        {

        ?>
        <th><?php echo $row['ssum']; ?></th>

        <?php
      }

      ?>

      <?php

        $result = mysqli_query($connect, "select sum(Product_price) as psum from product");
        while($row = mysqli_fetch_assoc($result))
        {

          ?>
          <th><?php echo $row['psum']; ?></th>

      <?php
      }

      ?>

      <th colspan="1"></th>


      </tr>
    </tfoot>

	</table>

  </div>

  </body>
</html>
