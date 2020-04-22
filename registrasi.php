<?php 
  include ('koneksi.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/eb1adb8e65.js" crossorigin="anonymous"></script>

    <style>
      .container {
        width: 30%;
        margin-top: 35px;
        box-shadow: 0 3px 8px;
        padding: 40px;
        border-radius: 20px;
      }
      button{
        width: 49%;
      }
      body{
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
      button{
        width: 100%;
        margin-top: 10px;
      }
      h3{
        font-family: sans-serif;
      }
      .btn-primary{
      background: red;
      color: red;
      border: 2px solid red;
      border-radius: 8px;
      width: 330px;
      margin-top: 20px;
      font-size: 18px;
      background: transparent;
      }
      .btn-primary:hover{
        background: red;
        color: white;
        border: 2px solid red;
        transition: 0.8s;
      }
      a{
        color: #f44c89;
      }
      a:hover{
        color: red;
      }
    </style>

    <title>Registrasi</title>
  </head>
  <body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(cover.jpg);">
    <div class="container bg-white">
      <h3 class="text-center">REGISTRASI</h3>
      <hr>

      <form method="POST" action="proses_registrasi.php">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
          <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
          </div>
        </div>

        <div class="form-group">
          <label>Nama Anak</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-child"></i></div>
            </div>
          <input type="text" name="nama_anak" id="namaanak" class="form-control" placeholder="Masukkan Username">
          </div>
        </div>

        <div class="form-group">
          <label>Nama Orang Tua</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-male"></i></div>
            </div>
          <input type="text" name="ortu" id="ortu" class="form-control" placeholder="Masukkan Username">
          </div>
        </div>

        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
          </div>
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-3">REGISTRASI</button>
        <a href="login.php">Sudah Punya Akun</a>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
