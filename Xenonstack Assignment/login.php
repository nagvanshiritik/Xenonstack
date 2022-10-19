<?php
session_start();
include('dbconfig.php');
?>
<html>
  <head>
    <title>Login Here</title>
    <link rel="icon" type="image/x-icon" href="images/main.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#0B0B45;font-family:'Times in new roman';">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#"><i class="fa fa-car" style="font-size:50px;color:#C5B358;"></i></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html" style="color: #C5B358;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html" style="color: #C5B358;">Contact Us</a>
          </li>
        </ul>
        <a href="login.html" style="color:#C5B358;text-decoration:none;margin-right:5px;font-size:20px;">Login&nbsp;<i class="fa fa-sign-in"></i></a>
      </div>
    </nav>

<style>
  .login
  {
    height:auto;
    width:400px;
    background-color:#0B0B45;
    margin:auto;
    font-family:Times;
    color:#C5B358;
    padding:50px;
    border-radius:10px;
    text-align:center;
  }
  #loele
  {
    width:100%;
    padding:7px;
    color:#C5B358;
    background-color:inherit;
    outline:none;
    padding:10px;
    border:1px solid #C5B358;
    border-radius:5px;
    margin-top:10px;
    margin-bottom:10px;
  }
  #losu
  {
    width:100px;
    padding:7px;
    background-color:#C5B358;
    color:#0B0B45;
    border:none;
    border-radius:5px;
    margin-top:10px;
    margin-bottom:10px;
  }
</style>

    <div class="container-fluid" style="background-image: url('images/main1.jpg');background-size: 100% 100%;">
      <div class="row" style="padding:85px;">
        <div class="login">
          <form action="#" method="post">
            <h2 align='center'>LOGIN</h2>
            <input type="text" placeholder="User Name" id="loele" name="username" required/>
            <input type="password" placeholder="Password" id="loele"  name="password" required/>
            <input type="submit" value="Login" id="losu" name="login">
            <h6 align="center">NEW USER <a href="signup.html">SignUp Here</a></h6>
          </form>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row" style="background-color: #0B0B45; padding:50px;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <a href="#" id="foot" style="padding-left:14px; padding-right:14px"><i class="fa fa-facebook"></i></a>
          <a href="#" id="foot" target="_blank"><i class="fa fa-google"></i></a>
          <a href="#" id="foot" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="#" id="foot" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="#" id="foot" target="_blank"><i class="fa fa-github"></i></a>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row">
      </div>
    </div>
  </body>
</html>
