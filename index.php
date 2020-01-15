<?php include"Database/Database.php";?>
<?php include"config/config.php";?>
  
<!DOCTYPE html>
<html lang="en">
<head>

  <title>section maintenance system</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
 <link rel="stylesheet" href="css/fontawesome-all.min"/>
	<link rel="stylesheet" href="css/fontawesome-all.min"/>
    <link rel="stylesheet" href="css/app.css"/>
 
</head>



<body>

<section class="top">
		<div class = "login">
			
				<a href="login.php" class="btn btn-default btn-sm">
				  <span class="glyphicon glyphicon-log-out"></span> Login 
				</a>
				
				<a href="login_logout/regform.php" class="btn btn-default btn-sm">
				  <span class="glyphicon glyphicon-log-out"></span> Sign Up   
				</a>
			  
		</div>
			
			<div class="row">
	  
		
				<div class ="title">
				<a href="index.php"><img src="img/title.png" alt=""  >  </a>
				
				</div>
			
				<div class="logo">
		
					<div class="bubt_logo">
					 <a href="https://www.bubt.edu.bd/"><img src="images/bubt_logo.png" alt=""  >  </a>
						
					</div>
					
					<div class="nx_logo">
					<a href="http://www.annex.bubt.edu.bd/"><img src="images/nx_logo.png" alt=""  >  </a>
					
					</div>
			
			</div>
		</div>
  </section>
  
<section>

<?php  include("navbar.php");?>


</section>
  
  
  
  <section>
<div id="myDIV">

  
<div class = "full_notice">	
	<div class="notice_board w3-display-middle" >
	<h1> NOTICE BOARD  </h1>
	</div>
    	<?php 
 $db = new Database();
 $query = "SELECT * FROM notice_board order by serial_no desc LIMIT 6 ";
 $read = $db->select($query);
?>
<br><br><br><br><br>
<div class="notice">
    	<?php 
		
$row_count = 1;
while($row = $read->fetch_assoc()){

?>      		
		<br><br>
	<div class ="w3-center<?php=$row_count?>" >
	   <br>	
	 <div class = "text-center">
	  <button type="button" class="btn btn-info" data-toggle="collapse" data-parent="container"
	  data-target = "#demo<?=$row_count?>"  > <?php echo $row['title']; ?></button><br>
		<?php echo "NOTICE PUBLISH DATE : " , $row['time']; ?>  <br><br>
		</div>
				<div id="demo<?=$row_count?>" class="collapse w3-container w3-section w3-green">
 			<?php  echo "SCHEDULED DATE : " , $row['submission_date']; ?> 
			<h3 class = "w3-right">	<?php echo "COURSE CODE : ", $row['course_code'];?>  </h3> <br><br>	<br>
			<h3 class = "w3-right">	<?php echo "TYPE : " ,  $row['type']; ?>   </h3>
			<?php echo  "TOPICS " ?> <br> ------------------- <br>	<?php echo $row['topics']; ?>  
			
				
                 <br><br>
				
				
					
				
				</div>	
	</div>
	
			
	<?php $row_count++; } ?>



	
  </div>
</div>
</div>
</section>

<section>
	
			<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
				<h1>Section Maintenance System </h1>
				<p> &copy; 2018 section_maintenance.com  -  All Rights Reserved  </p>
  
  <h2 class = "follow" > Follow us on  </h2>
  
  
  
  <a href = "https://www.facebook.com/groups/bubtcse32/?ref=bookmarks"><i class="fa fa-facebook-official w3-hover-opacity"></a></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>
		
</section>

</body>
</html>