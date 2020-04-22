<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH SISWA</title>
</head>
<body>

	<h2>TAMBAH DATA SISWA</h2>
	<br/>
	<a href="siswa.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="proses_tambah.php">
		<table>
			<tr>			
				<td>Usernama</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Nama Anak</td>
				<td><input type="text" name="nama_anak"></td>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td><input type="text" name="ortu"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
