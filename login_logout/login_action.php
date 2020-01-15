<?php
  session_start();
  require_once("condb.php");
  if(@$_POST['btn'] == "login"){

   $uname = $_POST['username'];
   $pawds = $_POST['password'];
   $sql = "SELECT * FROM cr_panel WHERE username='$uname' AND password = MD5('$pawds')";
   $qry = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($qry);
   if($num>0)
    {  $_SESSION['nam']=$uname;
      $_SESSION['mssg']="Login Success";
	  header("location: http://localhost/admin.php");
   }else {
      $_SESSION['mssg']="Login Failed. Please New Register.";
      header("Location: http://localhost/login_logout/regform.php");
   }
  }
     ?>