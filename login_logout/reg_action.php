

<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$mobile = $_POST['mobile'];
 if(!empty($username)){
 if(!empty($password)){
	 require_once("condb.php");
 if(mysqli_connect_error()){
   die('Connect Error ('. mysqli_connect_error() .')'
    .mysqli_connect_error());
	}
	else{
	  $sql = "INSERT INTO cr_panel(username , password,email,mobile) values('$username', '$password','$email','$mobile')"; 
	  if($conn->query($sql)){
	  echo "New record is inserted successfully";
	  header("Location: http://localhost/section/index.php");

	  }
	  else{
	  echo "Error: ".$sql ."<br>". $conn->error;
	  }
	  $conn->close();
	  
	  }
	}
 else{
 echo "Password should not  be empty";
 die();
 }
  }
  else{
    echo "Username should not be empty";
 die();
 }
 



?>