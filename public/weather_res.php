<?php 
   $wea_location= $_POST['wea_location']; 
   $wea_percent= $_POST['wea_percent']; 
   $wea_type= $_POST['wea_type']; 
   $wea_date= $_POST['wea_date'];
   $wea_spac= $_POST['wea_spac'];
   $con = mysqli_connect('localhost','root','','m0039'); 
   
   $sql= "insert into weather_m0039(wea_location,wea_percent,wea_type,wea_date,wea_spac) values ( '$wea_location','$wea_percent','$wea_type','$wea_date','$wea_spac')";
   echo $sql;
   
   mysqli_query($con, $sql) or die(mysqli_error($con)); 
   
   header("refresh:0; url=weather_select.php"); 
   
   
   
   
?>