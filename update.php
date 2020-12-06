<?php 
    include_once("config.php");
	$get_id = $_GET['up'];
	
	$select="select * from user where id='$get_id'";
	$query=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($query);
 
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		
		$update = "update  user set name='$name' , pass='$pass' where id='$get_id'";
		$run = mysqli_query($conn, $update);
		if($run>0)
		{
			//echo "Data Insert";
			echo "<script>window.open('display.php','_self')</script>";
		}
		else
		{
			echo "Data Not update";
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Vertical Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
</head>
<body>
<div class="container-fluid">
     <div class="row">
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
		</br></br>
		   <h3 class="text-center">Admin Panel - Insert</h3>
		     
		</br></br>
		   <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputUser">Username</label>
            <input type="text" name="name" class="form-control" id="inputUser" placeholder="Username" value="<?php echo $row['name'];?>" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" value="<?php echo $row['pass'];?>" required>
        </div>
		
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
		</div>
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
	 </div>
</div>
</body>
</html>                            