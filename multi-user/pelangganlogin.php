<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.box{
			width: 300px;
			height: 200px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.box1{
			width: 300px;
			height: 100px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.box2{
			width: 300px;
			height: 50px;
			display: flex;
			justify-content: center;
		}
		input[type=submit], input[type=reset]{
			width: 120px;
			height: 50px;
			background: blue;
			color: white;
			text-decoration: none;
			display: flex;
			justify-content: center;
			align-items: center;
			border: white 1px solid;
			border-radius: 8px;
		}
		input[type=text], input[type=password]{
			width: 300px;
			padding: 10px 18px;
			margin: 7px 0;
			display: inline-block;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<form action="aksi_pelangganlogin.php" method="POST">
		<div class="box">
			<table>
				<tr>
					<td>
						<center><h2>Silahkan Login</h2></center>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" required="" placeholder="Username">
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" required="" placeholder="Password">
					</td>
				</tr>
			</table>
		</div>
		<div class="box1">
			<input type="submit" name="" value="Login">
			<input type="reset" name="" value="Reset">
		</div>
		<div class="box2">
			<table>
				<tr>
		            <td>Belum punya akun?</td>
		            <td><a href="pelangganregister.php">Register</a></td>
		        </tr>
			</table>
		</div>
	</form>
</body>
</html>