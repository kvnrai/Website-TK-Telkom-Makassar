<?php 
//Tetap memanggil file 'koneksi.php' sbelumnya untuk melakukan koneksi data base
include'koneksi.php';


	//membuat variabel untuk menampung data dari form
	$username		=$_POST['username'];
	$ortu    	=$_POST['ortu'];
	$nama_anak 	    =$_POST['nama_anak'];
	$password		=$_POST['password'];
	//$gambar_produk  =$_FILE['gambar_produk']['name']; 
	//Jalankan query INSERT untuk menambah data ke database pastidak sesuai urutan (id mah gak usah soalnya kan udah dibikin otomatis)
		$query="INSERT INTO registrasi (username,ortu,nama_anak,password) VALUES ('$username', '$ortu', '$nama_anak','$password')";
		$result = mysqli_query($koneksi,$query);
		// Periksa query apakah ada yang error?

		if(!$result){
			die ("Query gagal dijalankan". mysqli_errno($koneksi)."-". mysqli_error($koneksi));
		}else{
			//tampil alert dan akan redirect ke halaman index.php
			//silahkan ganti index.php sesuai halaman yang akan dituju
		echo "<script>alert('Selamat! Akun berhasil dibuat.');window.location='login.php';</script>";
	}
	
?>
