<?php
	$con=mysqli_connect('localhost','root','','m0039');
	$id = $_GET['id'];
	$sql= "delete from weather_m0039 where weapid=$id";
	
	
	echo $sql; 
	mysqli_query($con, $sql) or die(mysqli_error($con)); 
	header("refresh:0; url=weather_select.php"); 

	 
   


?>