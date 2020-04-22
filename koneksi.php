<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$nama_db = "project_kevin"; //Nama Database

	$koneksi = mysqli_connect($host, $user, $pass, $nama_db);
	//urutannya harus seperti ini

	if(!$koneksi){
		die("koneksi Gagal: ".mysqli_connect_error());
	}
 ?>
