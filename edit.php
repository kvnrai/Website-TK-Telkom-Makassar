<!DOCTYPE html>
<html>
<head>
	<title>From Edit</title>
</head>
<body>

	<h2>Formulir Edit</h2>
	<br/>
	<a href="siswa.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM registrasi WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update.php">
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Anak</td>
					<td><input type="text" name="nim" value="<?php echo $d['nama_anak']; ?>"></td>
				</tr>
				<tr>
					<td>Orang Tua</td>
					<td><input type="text" name="alamat" value="<?php echo $d['ortu']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="alamat" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>Orang Tua</td>
					<td><input type="text" name="alamat" value="<?php echo $d['ortu']; ?>"></td>
				</tr>
				<tr>
					<td>Tipe User</td>
					<td><input type="text" name="alamat" value="<?php echo $d['tipe_user']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>
