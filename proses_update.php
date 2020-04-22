<?php 

include 'koneksi.php';

	$username = $_POST['username'];
	$nama_anak = $_POST['nama_anak'];
	$ortu = $_POST['ortu'];
	$password = $_POST['password'];

		mysql_query("UPDATE registrasi VALUES('$username','$nama_anak','$ortu',$password) WHERE id='$id'");

		header("location:siswa.php?pesan=update");
?>
