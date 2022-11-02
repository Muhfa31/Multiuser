<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.box,.box1{
			width: 300px;
			height: 100px;
			display: flex;
			justify-content: center;
		}
		.box{
			align-items: center;
			justify-content: center;
		}
		.box1{
			justify-content: space-between;
		}
		a{
			width: 120px;
			height: 50px;
			background: blue;
			color: white;
			text-decoration: none;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="box">
		<h2>LOGIN SEBAGAI</h2>
	</div>
	<div class="box1">
		<a href="adminlogin.php">ADMIN</a>
		<a href="pelangganlogin.php">PELANGGAN</a>
	</div>
</body>
</html>