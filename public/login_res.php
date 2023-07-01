<?php
	$cname=$_POST['cname'];
	$cid=$_POST['cid'];
	$cpwd=$_POST['cpwd'];
	$con=mysqli_connect('localhost','root','','m0039');
	$sql = " SELECT * FROM member_m0039 WHERE cid = '$cid' AND cpwd = '$cpwd' ";
	$box = mysqli_query($con,$sql)or die(mysqli_error($con));
	$count = 0;
	while($record = mysqli_fetch_assoc($box)){
		$count = $count + 1;
		$cid=$record["cid"];
        $cpwd=$record["cpwd"];
		$cname=$record["cname"];
		$pid=$record["pid"];
		/*print_r($record);*/
	}

	if($count == 0){
		echo "請註冊,查無此人";
		header("refresh:1; url=login.php");
	}else{
		echo "歡迎光臨";
		echo"<table style='border:1px solid black ; margin-top:10px'>";
		echo"<tr>";
		echo"<td>"."暱稱:".$cname."</td>";
		echo"<tr>";
		echo"</table>"."<br>";
		header("refresh:1; url=home.php");
	}
?>