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
<div class="container">
     <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		   </br></br>
		   <h3 class="text-center">All Records</h3>
		   <table class="table table-bordered table-hover">
		      <thead>
			     <tr>
				     <th>ID</th>
				     <th>NAME</th>
				     <th>PASSWORD</th>
				     <th>ACTION</th>
				 </tr>
			  </thead>
			  <TBODY>
			       <?php 
				      include_once("config.php");
					  $select = "select * from user ORDER BY id DESC limit 5";
					  $run = mysqli_query($conn,$select);
					  while($row=mysqli_fetch_array($run))
					  {
						  ?>
						 <tr>
						   <td><?php echo $row['id']; ?></td>
						   <td><?php echo $row['name']; ?></td>
						   <td><?php echo $row['pass']; ?></td>
						   <td>
						      <a href="delete.php?del=<?php echo $row['id']?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
						      <a href="update.php?up=<?php echo $row['id']?>" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></a>
						   </td>
						 </tr>
						  
						<?php   
					  }
				   ?>
			  </TBODY>
		   </table>
		</div>