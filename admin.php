<?php include"Session.php";
Session::init();
?>
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
  
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
 <link rel="stylesheet" href="css/fontawesome-all.min"/>
	<link rel="stylesheet" href="css/fontawesome-all.min"/>
    <link rel="stylesheet" href="css/app.css"/>
   <link rel="stylesheet" href="admin_css.css"/>
 
</head>



<body>


  
<section>



<?php 
 $db = new Database();

 //submit 
 if(isset($_POST['submit'])){
 $title  = mysqli_real_escape_string($db->link, $_POST['title']);	
 $course_code  = mysqli_real_escape_string($db->link, $_POST['course_code']);
 $option  = mysqli_real_escape_string($db->link, $_POST['option']);
 $publish_date  = mysqli_real_escape_string($db->link, $_POST['publish_date']); 
 $submission_date  = mysqli_real_escape_string($db->link, $_POST['submission_date']); 
 $topics  = mysqli_real_escape_string($db->link, $_POST['topics']);
 
 

 if($title =='NULL'&& $course_code =='NULL'&& $option =='NULL'&&$publish_date =='NULL'&&submission_date =='NULL'&&$topics =='NULL'){
  $error = "Field must not be Empty !!";
  
 } 
 
 else {
  $query = "INSERT INTO notice_board(title,course_code,type,publish_date,submission_date,topics,time)
   values('$title','$course_code','$option','$publish_date','$submission_date','$topics',CURRENT_TIMESTAMP)";
  

  $create = $db->insert($query);
  if ($create) {?>
   <h2 class = "w3-center">NOTICE INSERTED SUCCESSFULLY</h2>
 <?php }
 }
 
 
}
//submit
?>


<div class="container">

  
<a href="login_logout/logout.php" class="w3-button w3-blue w3-left">LOGOUT</a> <br />

  
  <br><br> <br><br> 
  <h1 class = "w3-center ">Compose a new notice </h1>
  
  <form action="" method="post">
    <div class="form-group">
      
	  
	  <label for="title"> Title :</label>
  
	<select class="form-control" id="title" name = "title">
	  <option>please select a title  .... </option>
        <option>ANNOUNCEMENT FOR CLASS TEST</option>
        <option>ANNOUNCEMENT FOR QUIZ</option>
        <option>ANNOUNCEMENT FOR Assignment</option>
       
      </select>
	
  <br><br>   
	  
	  <label for="course_code">Course code : </label>
		<input type="text" name="course_code"> </input>
	
	
	<label for="type"> TYPE  :  </label>
	<input type="radio" name="option" value="class test"> Class test
  <input type="radio" name="option" value="Quiz"> Quiz
  <input type="radio" name="option" value="Assignment"> Assignment
	
  <br><br>
	
	<label for="submission_date">Scheduled date :  </label>
	<input type="date" name="submission_date">
	
	<label for="publish_date">Publish date :  </label>
	<input type="date" name="publish_date">
	
	
	<br><br>
	  <label for="comment1">Topics :</label>
	  <textarea class="form-control" rows="10" cols="20" id="comment1" name="topics"></textarea>
	  
	  
	  <input type="submit" name="submit">
    </div>
  
 </form>

 
 </div>
</section >
</body>
</html>