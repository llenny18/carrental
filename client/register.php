<?php

include '../db/include.php';
include 'functions/func.php';


if (isset($_SESSION['userID'])){
  redirect_to("index.php");

}

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="css/reg.css">
    <link rel="icon" href="images/car_logo.jpg" type="image/x-icon" />

   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="functions/func.php?action=reg" method="post">
      <div class="input-box">
        <input type="text" name="fname" placeholder="Enter your first name" required>
      </div>
      <div class="input-box">
        <input type="text" name="lname" placeholder="Enter your last name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="text" name="cnum" placeholder="Enter your contact number" required>
      </div>
      <div class="input-box">
        <input type="text" name="address" placeholder="Enter your address" required>
      </div>
      <div class="input-box">
        <input type="text" name="occupation" placeholder="Enter your occupation" required>
      </div>
      <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Choose your gender</span> </label>
    <select id="select-box1" class="select" name="gender" required>
      <option value=""></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    
  </div>
      <div class="input-box">
        <input type="password" name="pass1" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="pass2" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
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
  <script src="js/reg.js"></script>
</body>
</html>