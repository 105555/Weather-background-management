<html>
	
	<style>
        *,*::after,*::before{
            box-sizing:border-box;
        }
        a{
            text-decoration: none;
            color:#020202;
            font-weight: bold;
        }
        .header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #2E8A99;
            width: 100%;
            margin-top: -10px;
        }
        .header a{
            text-decoration: none;
        }
        .logo{
            margin-left: 25px;
        }
        .logo a{
            color:#2B2730;
            font-size: 20px;
        }
        .item{
            list-style: none;
            display: flex;
        }
        .item li{
            padding: 10px;
            margin-left: 10px;
            margin-right: 10px;
            font-size: 18px;
        }
        .item li :hover{
            color:#ffffff;
            border-bottom:solid 2px #46458C;
            
        }
        .item li a{
            color:#2B2730;
            font-weight: bold;
        }

		body{
            background-image: url(https://thumb.photo-ac.com/db/db27c4a7aa3ceb933098608cdd307029_t.jpeg);
            background-repeat: no-repeat;
            background-size: 100%; 
		}
        .box{
            display: flex;  
            align-items: center;
            justify-content: center;
            margin-top: 150px;
        }
        .display{
            
            background-color: #9BABB8;
            font-weight: bold;
            border-radius:10px;
            height: 250px;
        }

	</style>

	<body>
		<div class="container">
            <div class="header">
                <div class="logo">
                    <a href="home.php"><h2>優星氣象</h2></a>
                </div>
                <ul class="item">
                    <li><a href="use.php">使用須知</a></li>
                    <li><a href="member.php">會員資料</a></li>
                    <li><a href="weather.php">發布資訊</a></li>
                    <li><a href="weather_select.php">顯示資訊</a></li>
                </ul>
            </div>

        </div>
	</body>
</html>



<form >
	搜尋:<input type=text name='content'> <input type=submit value=查找>
</form>

<table border =1 class="display">
<?php

	if(isset($_GET['content']))
	{
		$content=$_GET['content'];
	}else{
		$content ='';
	}
	
   $con = mysqli_connect('localhost','root','','m0039'); 

   
   $sql= "select * from weather_m0039 where wea_location like '%$content%' or wea_type like '%$content%'or wea_percent like '%$content%'or wea_spac like '%$content%' or wea_date like '%$content%'";
   
   $rt = mysqli_query($con, $sql) or die(mysqli_error($con)); 
   
    echo "<th>ID</th><th>地區</th><th>降雨機率</th><th>天氣</th><th>訊息</th><th>訊息</th><th>變動</th>";
    
   
   while ( $rs = mysqli_fetch_assoc($rt)){
	   $weapid =  $rs['weapid'];
	   $wea_location =  $rs['wea_location'];
		$wea_type =  $rs['wea_type'];
	    $wea_percent =  $rs['wea_percent'];
		$wea_date =  $rs['wea_date'];
		$wea_spac =  $rs['wea_spac'];
		
	   echo "<tr><td> $weapid </td>";
	   echo "<td> $wea_location </td>";
	   echo "<td> $wea_percent </td>"; 
	   echo "<td> $wea_type </td>";
	   echo "<td> $wea_date </td>";
	   echo "<td> $wea_spac</td>"; 
	   echo "<td> "; 
	   echo "<a href='weather_delete.php?id=$weapid' >刪除</a> &nbsp ";
	   echo "<a href='weather_update.php?id=$weapid' >更新</a> &nbsp ";
	    
	   echo " </td>";  
   }
?>
</table >


