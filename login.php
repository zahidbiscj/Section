
<?php include"Session.php";
Session::init();
?>
<?php include"Database/Database.php";?>
<?php include"config/config.php";?>
<?php include"Format.php";?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="login_css.css"  />
	
	</head>
<body>
<?php
$db=new Database();
$fm=new Format();
?>
<div class="container">
	<section id="content">
			<?php
// var_dump($_POST);
	// die();

if ($_SERVER['REQUEST_METHOD']=='POST') {
	
	$username=$fm->validation($_POST['username']);
	$password=$fm->validation(md5($_POST['password']));
	$username  = mysqli_real_escape_string($db->link, $username);
	$password  = mysqli_real_escape_string($db->link, $password);
	$query= "SELECT * FROM cr_panel WHERE username='$username' AND password='$password'";
	$result=$db->select($query);
	// var_dump($result);
	// die();
	if ($result !=false) {
		$value=mysqli_fetch_array($result);
		$row=mysqli_num_rows($result);
		if ($row>0) {
			Session::set("login",true);
			Session::set("username",$value['username']);
			Session::set("password",$value['password']);
			header("Location: http://localhost/section/admin.php");
		}else{
         echo "no result found";
		}
	}else{?>
		<h2 class = "edit">NAME AND PASSWORD DOES NOT MATCHES </h2>"
		
	<?php }
}
	?>

		
		<!-- form -->
	
<form action="" method="post">
  <div class="imgcontainer">
    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b class ="b">Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
<br>
    <label for="password"><b class = "b">Password</b></label>
    <input type="password" placeholder="Enter Password " name="password" required>
<br>        
    <button type="submit" name = "btn" value = "login">Login</button>
	
	<br><br><br>
    
  </div>

</form>

	
	
	</section><!-- content -->
</div><!-- container -->



</body>
</html>
<?php
