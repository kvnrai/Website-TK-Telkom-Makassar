<?php 
// koneksi database
include 'koneksi.php';

	// menangkap data yang di kirim dari form
	$username = $_POST['username'];
	$nama_anak = $_POST['nama_anak'];
	$ortu = $_POST['ortu'];
	$password = $_POST['password'];

	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO registrasi (username,ortu,nama_anak,password) VALUES('$username','$nama_anak','$ortu','$password')");
	

		// mengalihkan halaman kembali ke index.php
		header("location:siswa.php");

			if(!$result){
						die ("Query gagal dijalankan". mysqli_errno($koneksi)."-". mysqli_error($koneksi));
					}else{
						//tampil alert dan akan redirect ke halaman index.php
						//silahkan ganti index.php sesuai halaman yang akan dituju
					echo "<script>alert('Selamat! Akun berhasil dibuat.');window.location='siswa.php';</script>";
				}

?>
