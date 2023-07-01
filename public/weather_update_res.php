<?php 
   $wea_location= $_POST['wea_location'];
   $wea_percent= $_POST['wea_percent'];  
   $wea_type= $_POST['wea_type']; 
   $wea_date= $_POST['wea_date']; 
   $wea_spac= $_POST['wea_spac']; 
   $weapid= $_POST['weapid']; 
  
	echo $wea_location."<br>";
	echo $wea_percent."<br>";
	echo $wea_type."<br>";
	echo $wea_date."<br>";
	echo $wea_spac."<br>";
	echo $weapid;
	
	$con=mysqli_connect('localhost','root','','m0039');
	$sql="update weather_m0039 set wea_location ='$wea_location' , wea_percent='$wea_percent',wea_type='$wea_type' , wea_date ='$wea_date', wea_spac ='$wea_spac' where weapid = '$weapid' ";
	echo $sql;
	mysqli_query($con,$sql) or die(mysqli_error($con));
	header('refresh:0;url=weather_select.php');
   
   
?>