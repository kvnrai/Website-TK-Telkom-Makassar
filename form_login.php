<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootsrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- My Link -->
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/Bootstrap.js">

    <!-- My CSS -->
    <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    body{
      background-size: cover;
      background-attachment: fixed;
      font-family: new time roman;
    }
    ul{
      margin-bottom: 50px;
    }
    ul a{
      font-size: 29px;
      color: white;
    }
    ul a:hover{
      text-decoration: none;
      color: gray;
    }
    .label{
      font-size: 20px;
      color: white;
      font-weight: normal;
    }
    .form-control{
      background: transparent;
      border-radius: 0px;
      border: 0px;
      border-bottom: 1px solid #f44c89;
      margin-bottom: 30px;
      font-size: 22px;
      color: white;
      padding: 20px;
    }
    input[type="checkbox"]{
      height: 15px;
      width: 15px;
    }
    small{
      font-size: 19px;
      color: white;
    }
    .btn-info{
      background: #f44c89;
      border: 2px solid #f44c89;
      border-radius: 0px;
      width: 360px;
      margin-top: 20px;
      font-size: 20px;
      background: transparent;
    }
    .btn-info:hover{
      background: #f44c89;
      border: 2px solid #f44c89;
    }
    p{
      font-size: 16px;
      margin-top: 40px;
      color: gray;
    }
    img{
      width: 365px;
      height: 500px;
    }
    </style>

    <title>Login</title>
  </head>
  <body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(cover.jpg);">
    <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <!-- make a 2 colum of 6 -->
        <div class="row" style="margin-top: 80px; box-shadow: -1px 1px 50px 10px black">
          <div class="col-md-6">
            <ul>
              <a href="#" style="border-bottom: 2px solid #f44c89; padding: 10px;">Sign In </a>
              <a href="#">/ Sign Up</a>
            </ul>
            <label class="label control-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
            <label class="label control-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <input type="checkbox"> <small>Remember me ?</small>
            <a href="#"><div class="btn btn-info">SIGN IN</div></a>
            <p class="text-center">FORGET PASSWORD ?</p>
          </div>
          <div class="col-md-6">
            <img src="kayu.jpg">
          </div>
        </div>
        <!-- close -->
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
