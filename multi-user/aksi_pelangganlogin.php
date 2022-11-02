<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM pelanggan WHERE username='$username' AND password='$password'";
$cek_login = $koneksi->query($query);

if($cek_login == true){
	header('location: barang.php');
}else {
	echo "
		<script>
		alert('Maaf username dana password yang anda masukkan salah');
		window.location.href = ('pelangganlogin.php');
		</script>
		";	
}
