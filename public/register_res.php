

<?php 
   $cname= $_POST['cname'];
   $cid= $_POST['cid']; 
   $cpwd= $_POST['cpwd']; 
   $csex= $_POST['csex']; 
   $cbir= $_POST['cbir']; 
 
   $con=mysqli_connect('localhost','root','','m0039');
   $sql= "insert into member_m0039 (cname,cid,cpwd,csex,cbir ) values ( '$cname','$cid' ,'$cpwd','$csex','$cbir') ";
   
   mysqli_query($con, $sql) or die(mysqli_error($con));
	echo "註冊成功";
   header("refresh:1; url=login.php"); 
   
   
   
   
   
?>