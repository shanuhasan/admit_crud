<?php
   $conn = mysqli_connect("localhost","root","")or die("connection error..!");
   mysqli_select_db($conn , "ajax")or die("check database..!");
?>