<?php
   session_start();
   
   if(session_destroy()) {
	    $_SESSION['nam']="";
       header("Location: http://localhost/section/index.php");
   }
?>