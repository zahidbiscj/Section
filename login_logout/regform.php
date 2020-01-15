<!DOCTYPE html>
<html>
<head>
      <title>Form site</title>
<link rel="stylesheet" href="w3.css">	 
	 <style>
	         form{padding-top: 10px;
			      text-align: center;
			      font- size: 20px;}
			 input{width: 350px;
			       height: 30px;
				   font-size: 20px;}
		</style>
</head>

<style>
body {
    background-image: url("a.jpg");
    background-repeat: no-repeat;
	background-size: 100%;
}
</style>


<body>
<h1  class = "w3-center" > REGISTER </h1>

<form method = "post" action ="reg_action.php">
<h2>Username : </h2><input type = "text" name = "username"><br>
<h2>Password : </h2><input type = "password" name = "password"><br>
<h2>E-mail : </h2><input type = "text" name = "email"><br>
<h2>Mobile : </h2><input type = "text" name = "mobile"><br><br>      

	  <input type = "submit" value = "Register" >
	
</form>
</body>	
</html>