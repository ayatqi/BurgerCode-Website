<!DOCTYPE html>
<html>
<head><title>Staff Login Page</title></head>
<style>

</style>
<link rel="stylesheet" href="login.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>

<div style="width:400px; padding:40px; margin:auto;border-radius: 10px;">


<div id="LoginContainer">
<div class="text">Administrator Login</div>

<form class="LoginForm" action="" method="post">
			
<div class="input-field">


<input type="text" placeholder="Staff ID" name="id" required>

</div>
<div class="input-field">

<input type="password" placeholder="Password" name="password" required>
 </div>
<button type="submit" class="log" name="loginbtn">Login Now</button>

<div class="Forgot">
 <a href="#">Forgot Password?</a>
 <br>
 <a href="#">Forgot Staff ID?</a>
 </div>

   </div>
 </form>
            
</div>

</body>

</html>

<?php include("data.php") ?>
<?php

if (isset($_POST["loginbtn"]))
{

 $staffID = $_POST["id"];
 $password = $_POST["password"];

 $result = mysqli_query($connect, "Select * from staff where Staff_ID = '$staffID' && staff_password = '$password' ");
 $count = mysqli_num_rows($result);

 if($count == 1)
 {
	 header('location: main.html');
 }
 else
 {
	 header('location: login.php');
 }


}
?>