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
        .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 150px;
        }

        .release{
            border:solid 1px black;
            background-color: #9BABB8;
            font-weight: bold;
            border-radius:10px;
            height: 250px;
        }

	</style>
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
        <div class="wrap">
            <form action = "weather_res.php" method=post>
                <table  class="release">
                    <tr><td>地區 : </td><td>
                                            <select name='wea_location'>
                                                <option value=台北>台北</option>
                                                <option value=桃園>桃園</option>
                                                <option value=台中>台中</option>
                                            </select>
                                        </td>
            
                    <tr><td>降雨機率 : </td><td> <input type = text name = 'wea_percent'></td>
            
                    <tr><td>天氣狀況 : </td><td>
                                                <select name='wea_type'>
                                                    <option value=晴天>晴天</option>
                                                    <option value=陰天>陰天</option>
                                                    <option value=雨天>雨天</option>
                                                </select>
                                            </td>
                    <tr><td>日期 : </td><td><input type="date" name='wea_date'></td>
                    <tr><td>訊息 : </td><td>
                                        <textarea name='wea_spac'></textarea>
                                    </td>
                    <tr>
                    <td colspan = 2>
                        <center>
                            <input type = submit value = '發布'>
                        </center>
                    </td>
            
                </table>
            </form>
        </div>
	</body>
</html>