<?php
include 'error.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background="images/space.png">
    <img src="images/w40k.png" alt="Responsive image" class="img-fluid" style="width:1440px;height:150px;">
    <div class="topnav topnav-centered">
      <a href="/webpage.php">Home</a>
      <a class="active" href="/application.php">Apply</a>
      <a href="/info.php">Info</a>
    </div>
    <div style="color: Red"><?php echo $success; ?></div>
    <div class="container">
  <div class="row g-1">
    <div class="col-md-2">
    </div>
      <div class="col-7">
        <div class="container-fluid">
          <main>
          <div class="col-md-8 offset-md-3">
        <br>
<div style="margin-left: 550px;">
  <style>
   {
    font-family: Georgia, serif;
  }
  </style>
  <i><h2 class="mb-2" style="color:White; margin-left: 90px;">Application form</h2></i>
  <h4 class="mb-1" style="color:Red;">All fields marked with * symbol are required.</h4>
  <br>
    <form class="application-form" method="POST" action="application.php">
          <div class="row g-2">
            <div class="col-md-6">
              <label for="name" class="form-label" style="color:White;">Name:</label>
          <input style="margin-left: 30px;" autocomplete="given-name" class="form-control" id="name" type="text" name="name" placeholder="Enter name" size="49">
          <span class="error" style="color:Red;"> * <?php echo $nameErr; ?> </span>
        </div>
        <div class="col-md-6">
          <br>
          <label for="surname" class="form-label" style="color:White;">Surname:</label>
          <input style="margin-left: 8px;" autocomplete="family-name" class="form-control" id="surname" type="text" name="surname" placeholder="Enter Surname" size="49">
          <span class="error" style="color:Red;"> * <?php echo $surnameErr; ?> </span>
        </div>
        <div class="col-md-6">
          <br>
          <label for="email" class="form-label" style="color:White;">E-mail:</label>
          <input style="margin-left: 28px;" autocomplete="on" class="form-control" id="email" type="text" name="email" placeholder="Enter e-mail" size="49" >
          <span class="error" style="color:Red;"> * <?php echo $emailErr; ?> </span>
        </div>
        <div class="col-md-6">
        <br>
        <p for="comment" class="form-label" style="color:White;">Please tell us why are you interested in joining the club?:<span class="error" style="color:Red;"> * <?php echo $commentErr; ?> </span></p>
        <textarea id="comment" class="form-control" name="comment" placeholder="Enter text here..." rows="10" cols="50"></textarea>
      </br>
    </div>
    <div>
      <br>
      <div class="col-md-5 offset-md-5">
        <button style="margin-left: 170px;" class="btn btn-success" type="submit" name="submit" style="color:Black;">SUBMIT</button>
          <p>&nbsp;</p>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
