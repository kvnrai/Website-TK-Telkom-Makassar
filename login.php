<?php 

  session_start();

  include('koneksi.php')
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
      .container{
        width: 30%;
        margin-top: -190px;
        box-shadow: 0 3px 8px;
        padding: 40px;
        border-radius: 20px;
      }
      button{
        width: 49%;
      }
      body{
          background-size: cover;
      }
      button{
        width: 100%;
        margin-top: 10px;
      }
      h3{
        padding-top: 35%;
        font-family: sans-serif;
      }
      img{
        width: 13%;
        margin-left: 594px;
        padding-top: 10%;
        padding-bottom: 70px;
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

    <title>Login</title>
  </head>
  <body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(cover.jpg);">
    
    <img src="logo2.png">

    <div class="container bg-white">
      <h3 class="text-center" style="padding-top: 120px;">LOGIN</h3>
      <hr>

      <form method="POST" action="proses_login.php">
        <div class="form-group">
          <label class="text-left">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
          <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda" required />
          </div>
        </div>

        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required />
          </div>
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-3">MASUK</button>
        <a href="registrasi.php">Belum Punya Akun?</a>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
