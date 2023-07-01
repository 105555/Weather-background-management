<html>
	
	<style>

		body{
			background-color:#0A6EBD;
			display: flex;
			justify-content: center;
			align-items: center; 
			background-image: url(https://thumb.photo-ac.com/db/db27c4a7aa3ceb933098608cdd307029_t.jpeg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
		
		.register{
			text-align: center;
			
		}
		.background{
			background-color:#4FC0D0;
			width:300px;
			display: flex;
			justify-content: center;
			align-items: center; 
			border-radius: 10px;
		}
		.logo{
			left:10px;
			display: flex;
		}
		.logo a{
			margin: 0 auto;
			padding: 10px;
			text-decoration: none;
			color:#2B2730;
			font-size: 40px;
			font-weight: 800;
		}
		.member{
			color:#2B2730;
		}

	</style>

	<body>
		<div class="container">
			<div class="logo">
				<a href="home.php" >優星氣象</a><br>
			</div>
			<div class="background">
				<form action = "register_res.php" method = post>
						<div class = 'register'>
							<h2>註冊</h2>
						</div>
						<br>暱稱 : <input type = text name = 'cname'>
						<br><br>帳號 : <input type = text name = 'cid'>
						<br><br>密碼 : <input type = password name = 'cpwd'>
						<br><br>性別 : <input type = radio name='csex' value=0>男<input type = radio name='csex' value=1>女
			
						<br><br>生日 : <input type = date name='cbir'>
						<br><br><center><input type = submit value = '註冊'></center> 
						<br><br>
						<center class="member">已有會員 請點選<a href="login.php">登入</a></center>
				</div>
			</form>
		</div>
	</body>
</html>
