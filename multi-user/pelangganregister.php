<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.box{
			width: 300px;
			height: 500px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.box1{
			width: 300px;
			height: 50px;
			display: flex;
			justify-content: space-between;
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
		input[type=text], input[type=password], input[type=email]{
			width: 300px;
			padding: 10px 18px;
			margin: 7px 0;
			display: inline-block;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<form action="aksi_register.php" method="POST">
		<div class="box">
			<table>
				<tr>
					<td>
						<center><h2>REGISTER</h2></center>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" required="" placeholder="Username">
					</td>
				</tr>
				<tr>
					<td>
						<input type="email" name="email" required="" placeholder="Email">
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" required="" placeholder="Password">
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="cekpassword" required="" placeholder="Confirm Password">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nama" required="" placeholder="Nama Lengkap">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="alamat" required="" placeholder="Alamat">
					</td>
				</tr>
			</table>
		</div>
		<div class="box1">
			<input type="submit" name="" value="Register">
			<input type="reset" name="" value="Reset">
		</div>
	</form>
</body>
</html>
