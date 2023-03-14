<?php include(data.php); ?>

<html>
  <head>
    <title>My Account</title>
	<link rel="stylesheet" href="landing.css">
  </head>
  <body>
    <div id="Container">
		    <ul class="List1">
			   <li><a class="home" href="Home.html">HOME</a></li>
      <li><a class="meun" href="Menu.html">MENU</a></li>
      <li><a class="aboutUs">ABOUT US</a></li>
      <li><a href="contact.html"class="contact_home">CONTACT</a></li>
      <li><a class="cart"></a></li>
            <li><a class="Log" href="logout.php"><input type="submit" name="Login" value="LOGOUT" /></a></li>
			<section class="contact" id="contact">
		</ul>

	  </div>

    <div class="slidebar">
		    <center>
			       <h4>USER NAME</h4>
		    </center>
		    <a href="Landing_Page.php"><span>DASHBOARD</span></a>
		    <hr>
		    <a href="#"><span>ORDERS</span></a>
		    <hr>
		    <a href="#"><span>DOWNLOADS</span></a>
		    <hr>
		    <a href="#"><span>ADDRESS</span></a>
		    <hr>
		    <a href="account.php"><span>ACOUNT DETAILS</span></a>
		    <hr>
		    <a href="#"><span>WISHLIST</span></a>
			  <hr>
			  <a href="rating.html"><span>RATE OUR SERVICE</span></a>
		    <hr>
		    <a href="logout.php" class="logout_btn"><span>LOGOUT</span></a>
    </div>

    <div class="account-content">
      <fieldset>
          <p>First name
            <input type="text" name="firstname" size="40"/>

            Last name
            <input type="text" name="lastname" size="40"/>
          </p>

          <p>Display name </br>
            <input type="text" name="username" size="108"/>
          </p>

          <p>
            Email address </br>
            <input type="text" name="email" size="108">
          </p>

          <h3>PASSWORD CHANGE</h3>
          <hr>

          <p>
            Current password </br>
            <input type="text" name="email" size="108">
          </p>

          <p>
            New password </br>
            <input type="text" name="email" size="108">
          </p>

          <p>
            Confirm new password </br>
            <input type="text" name="email" size="108">
          </p>

          <p><input type="submit" name="run" value="SAVE CHANGES"/></p>

        </fieldset>
    </div>

  </body>
</html>
