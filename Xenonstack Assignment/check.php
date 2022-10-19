<?php
session_start();
?>
<html>
  <head></head>
  <body>
    <?php
     include('dbconfig.php');
     if(isset($_REQUEST['login']))
     {
     $name=$_REQUEST['username'];
     $pass=$_REQUEST['password'];
     $que="select * from users where binary username='$name' and binary password='$pass'";
     $x=mysqli_query($conn,$que);
     if(mysqli_num_rows($x)==1)
     {
      $_SESSION['username']=$name;
      header('location:afterlogin.php');
     }
     else
     {
     header('location:login.php?msg=Either user Name or Password is incorrect');
     }
    }
    ?>
  </body>
</html>
