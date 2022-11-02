<?php 
include('koneksi.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$cekpassword = md5($_POST['cekpassword']);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if($password == $cekpassword){
	$query = "INSERT INTO pelanggan (username,email,password,nama_lengkap,alamat) VALUES ('".$username."','".$email."','".$password."','".$nama."','".$alamat."')";
	$insert = $koneksi->query($query);
	if($insert === true){
		echo "
		<script>
		alert('Anda Sukses Registrasi');
		window.location.href = ('pelangganlogin.php');
		</script>
		";	
	}else{
		echo "
		<script>
		alert('Registrasi Gagal, Coba Kembali');
		window.location.href = ('pelangganlogin.php');
		</script>
		";	
	}
	}else{
		echo "
		<script>
		alert('Ulangi, Password Anda tidak sama');
		window.location.href = ('pelangganlogin.php');
		</script>
		";
}