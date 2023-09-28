<?php

include '../db/include.php';


if (isset($_SESSION['userID'])){
  redirect_to("index.php");

}


?>


<html>
    <head>
        <meta charset="utf-8" />
        <title>Login to Rent a Car</title>
        <link rel="stylesheet" href="css/login.css" />
        <link rel="icon" href="images/car_logo.jpg" type="image/x-icon" />
        <script src="js/login.js"></script>
 
    </head>
    <body>
    <div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">Please enter your email and password, if not registered kindly register and verify your email</div>
    </div>
    <div class="right">
    <form action="index.php" method="post">
      <div class="form">
        <div class="div-input">
        <label for="email">Email</label>
        <input type="email" id="email">
        </div>
        <div class="div-input">
        <label for="password">Password</label>
        <input type="password" id="password">
        </div>
        <div class="div-input">
        <button type="submit" class="button-43">Login</button>
        <a href="register.php" class="link">No Account? Register Now</a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/alerts.js"></script>
    </body>
</html>