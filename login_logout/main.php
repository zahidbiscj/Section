<?php
session_start();
if($_SESSION['nam']!=""){
if($_SESSION['mssg']!=""){
echo $_SESSION['mssg']; 
echo $_SESSION['mssg']="";
}
?>



<a href="logout.php">LOGOUT</a> <br />
<h2> Main Page</h2>
<strong><?php echo $_SESSION['nam']; ?></strong>
<?php }else{
 header("Location: http://localhost/login/");
}	?>

