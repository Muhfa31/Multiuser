<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<style type="text/css">
		li{
			list-style: none;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td><a href="form_beli.php"><button>Pembelian Barang</button></a></td>
			<td><a href="logout.php"><button>Logout</button></a></td>
		</tr>
	</table>
	
	<h3>Tabel Stok Barang</h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No</td>
			<td>ID Barang</td>
			<td>Nama Barang</td>
			<td>Berat Barang (Kg)</td>
		</tr>

		<?php  
		include 'koneksi.php';
		$no = 1;
		$query = "SELECT * FROM barang";
		$result = $koneksi->query($query);
		while($row = $result->fetch_array()) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id_barang']; ?></td>
				<td><?php echo $row['nm_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
			</tr>
		<?php } ?>
	</table>

	<h3>Tabel Pembelian Barang</h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No</td>
			<td>Pembeli</td>
			<td>ID Barang</td>
			<td>Nama Barang</td>
			<td>Membeli (Kg)</td>
		</tr>
		<?php  
		include 'koneksi.php';
		$no = 1;
		$query = "SELECT * FROM pembelian";
		$result = $koneksi->query($query);
		while($row = $result->fetch_array()) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td>
					<ul>
						<li>Nama Lengkap : <?php echo $row['nm_lengkap']; ?></li>
						<li>Email  		 : <?php echo $row['email']; ?></li>
						<li>Alamat 		 : <?php echo $row['alamat']; ?></li>
					</ul>
				</td>
				<td><?php echo $row['id_barang']; ?></td>
				<td><?php echo $row['nm_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>