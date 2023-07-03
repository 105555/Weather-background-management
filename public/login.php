<html>
	
	<style>

		body{
			
			display: flex;
			justify-content: center;
			align-items: center; 
			background-image: url(https://thumb.photo-ac.com/db/db27c4a7aa3ceb933098608cdd307029_t.jpeg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
		a{
			text-decoration: none;
		}
		.register{
			text-align: center;
			
		}
		.background{
			background-color:#9BABB8;
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
				<form action = 'login_res.php'  method = post>
						<div class = 'register'>
							<h2>登入</h2>
						</div>
						<br><br>暱稱 : <input type = text name = 'cname'>
						<br><br>帳號 : <input type = text name = 'cid'>
						<br><br>密碼 : <input type = password name = 'cpwd'>			
						<br><br><center><input type = submit value = '登入'></center> 
						<br><br>
						<center class="member">不是會員 請點選<a href="register.php">註冊</a></center>
				</div>
			</form>
		</div>
	</body>
</html>
