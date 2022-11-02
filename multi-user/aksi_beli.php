<?php 
include ('koneksi.php');

if (isset($_POST['beli'])) {
	$nama= $_POST['nama'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$id=$_POST['nama_barang'];
	$stok=$_POST['jumlah_pembelian'];
	$nama_barang=$_POST['nm_barang'];

	$query = "INSERT INTO pembelian (nm_lengkap,email,alamat,id_barang,stok,nm_barang) VALUES ('".$nama."','".$email."','".$alamat."','".$id."','".$stok."','".$nama_barang."')";
	$insert = $koneksi->query($query);

	if($insert == true){
	header('location: barang.php');
	}else {
	echo "
		<script>
		alert('ERORR');
		</script>
		";	
	}
}

?>