<!DOCTYPE html>
<html>
<head>
	<title>Kevin</title>
</head>
<body>

	<h2>DATA SISWA TK TELKOM MAKASSAR</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Username</th>
			<th>Nama Anak</th>
			<th>Orang Tua</th>
			<th>Password</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from registrasi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['nama_anak']; ?></td>
				<td><?php echo $d['ortu']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['tipe_user']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
