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
            background-image: url(https://thumb.photo-ac.com/db/db27c4a7aa3ceb933098608cdd307029_t.jpeg);
            background-repeat: no-repeat;
            background-size: 100%; 
		}
        .content{
            position: relative;
        }
        .content .box{
            position: absolute;
            top: 50%;  
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 20px;
            margin-top: 200px;
        }
        .content .box a{
            text-decoration: none;
            border:solid 1px black;
            color:#090580;
            padding:20px;
            margin: 30px;
            font-size: 50px;
            font-weight: bold;
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
            <div class="content">
                <div class="box">
                    <a href="register.php">註冊</a>
                    <a href="login.php">登入</a>
                </div>
            </div>
        </div>
	</body>
</html>