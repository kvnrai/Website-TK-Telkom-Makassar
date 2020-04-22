<?php

	session_start();

		include'koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi,"SELECT * from registrasi where username='$username' and password='$password'");

  $cek = mysqli_num_rows($login);

  if($cek > 0){
  $data=mysqli_fetch_assoc($login);

        if($data["tipe_user"]=="admin"){
          $_SESSION['username'] = $username;
          $_SESSION['tipe_user'] = "admin";
          header("location:admin.php");
        }else if($data["tipe_user"]=="pengguna"){
          $_SESSION['username'] = $username;
          $_SESSION['tipe_user'] = "pengguna";
          header("location:profile.php");
        }else{
          echo "error";
        }
}else{
  header("location:pesan=gagal");
}

?>
