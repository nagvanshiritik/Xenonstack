<?php
session_start();
if(!isset($_SESSION['username']))
{
 header('location:login.php?msg=You Must Login First');
}
?>
<html>
  <head>
    <title>The Car's Hub</title>
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
            <a class="nav-link" href="afterlogin.php" style="color: #C5B358;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="conafter.php" style="color: #C5B358;">Contact Us</a>
          </li>
        </ul>
        <a href="login.php" style="color:#C5B358;text-decoration:none;margin-right:5px;font-size:20px;">Logout&nbsp;<i class="fa fa-sign-in"></i></a>
      </div>
    </nav>


<style>
  #sellc
  {
    background-color:#0B0B45;
    padding: 10px;
    border-radius: 10px;
    margin: auto;
    margin-bottom: 10px;
    box-shadow: 0 0 15px #0B0B45;
  }
  #picsell
  {
    padding: 10px;
  }
  .cont
  {
    color:#C5B358;
    font-family: Times;
    padding: 10px;
  }
  #cui
  {
    font-size: 18px;
    padding: 10px;
    text-align: center;
  }
</style>

    <div class="container-fluid" style="background-image: url('images/main.jpg');background-size: 100% 100%;">
      <div class="row" style="padding:20px;">
        <div class="col-sm-4" >
          <div class="mp" id="sellc">
            <img src="images/hyundai_venue.jpg" width="100%" height="350px" id="picsell">
            <div class="cont">
              <h4 align=center>Hyundai Venue</h4>
              <p id="cui">
                Selling Code: HV1983 <br/>
                KMS Consumed: 10,698 <br/>
                Condition: Best <br/>
                Years Old: 2 <br/>
                Price: Rs. 7,00,000 <br/>
                Contact: 1234567890 <br/>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mp" id="sellc">
            <img src="images/safari.jpg" width="100%" height="350px" id="picsell">
            <div class="cont">
              <h4 align=center>TATA Safari</h4>
              <p id="cui">
                Selling Code: TS4569 <br/>
                KMS Consumed: 40,536 <br/>
                Condition: Good <br/>
                Years Old: 4 <br/>
                Price: Rs. 5,00,000 <br/>
                Contact: 1234567890 <br/>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mp" id="sellc">
            <img src="images/xuv700.jpg" width="100%" height="350px" id="picsell">
            <div class="cont">
              <h4 align=center>Mahindra XUV 7OO</h4>
              <p id="cui">
                Selling Code: MX7O8956 <br/>
                KMS Consumed: 27,538 <br/>
                Condition: Good <br/>
                Years Old: 2.5 <br/>
                Price: Rs. 11,00,000 <br/>
                Contact: 1234567890 <br/>
              </p>
            </div>
          </div>
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
