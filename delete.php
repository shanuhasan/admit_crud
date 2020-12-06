<?php
        include_once("config.php");
		$get_id = $_GET['del'];
		
	  $delete = "delete from user where id='$get_id'";
	  $run = mysqli_query($conn , $delete);
	  if($run>0)
		{
			//$error =  "insert";
		   echo "<script>window.open('display.php','_self')</script>";
		}
		else
		{
			echo   "not insert";
		}

?>