<html>
	
	<style>
        *,*::after,*::before{
            box-sizing:border-box;
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
            background-image: url(https://img95.699pic.com/photo/40154/4601.jpg_wh300.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
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

