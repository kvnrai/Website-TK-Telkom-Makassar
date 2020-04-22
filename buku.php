<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/eb1adb8e65.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <style>
      .dropdown-item{
        background: red;
        color: red;
        background: transparent;
      }
      .dropdown-item:hover{
        background: red;
        color: white;
        transition: 0.8s;
      }
      h2,h3 {
        color: #fff;
      }
      h2{
        font-size: 18px;
      }
      p {
        color: #999;
        line-height: 25px;
      }
      .dropdown-item{
        background: red;
        color: red;
        background: transparent;
      }
      .dropdown-item:hover{
        background: red;
        color: white;
        transition: 0.8s;
      }
      section{
        min-height: 420px;
      }
      .footer-top {
        background: #111;
        padding: 80px 0;
        margin-top: 70px;
      }
      .segment-one h3 a {
        font-family: courgette;
        color: #fff;
        letter-spacing: 3px;
        margin: 2px 0;
      }
      .segment-two h2 b {
        color: #fff;
        font-family: poppins;
        text-transform: uppercase;
      }
      .segment-two h2 b:before {
        content: "|";
        color: #c65039;
        padding-right: 10px;
      }
      .segment-two ul{
        margin: 0;
        padding: 0;
        list-style: none;
      }
      .segment-two ul li {
        border-bottom: 1px solid rgba(255,255,255,0.3);
        line-height: 40px;
      }
      .segment-two ul li a {
        color: #999;
        text-decoration: none;
      }
      .segment-three h2 b{
        color: #fff;
        font-family: poppins;
        text-transform: uppercase;
      }
      .segment-three h2 b:before {
        content: "|";
        color: #c65039;
        padding-right: 10px;
      }
      .segment-three a {
        background: #494848;
        width: 40px;
        height: 40px;
        display: inline-block;
        border-radius: 50%;
      }
      .segment-three a i {
        font-size: 20px;
        color: #fff;
        padding: 10px 12px;
      }
      .segment-four h2 b {
        color: #fff;
        font-family: poppins;
        text-transform: uppercase;
      }
      .segment-four h2 b:before {
        content: "|";
        color: #c65039;
        padding-right: 10px;
      }
      .segment-four form input[type=submit] {
        background: #c65039;
        border: none;
        padding: 3px 15px;
        margin-left: 0px;
        margin-top: 12px;
        color: #fff;
        text-transform: uppercase;
      }
      .footer-bottom-text {
        padding-left: 100px;
        background: #000;
        line-height: 75px;
        margin-bottom: 0px;
      }
      .text-right {
        margin-top: -50px;
        padding-right: 100px;
      }
      .fa{
        color: red;
      }
      .ml13 {
        font-size: 0.9em;
        text-transform: uppercase;
        letter-spacing: 0.3em;
        font-weight: 600;
      }
      .ml13 .letter {
        display: inline-block;
        line-height: 1em;
      }


      /* responsive css */
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .md-mb-30 {
          margin-bottom: 30px;
        }
      }
      @media only screen and (max-width: 767px) {
        .sm-mb-30 {
          margin-bottom: 30px;
        }
        .footer-top {
          padding: 50px 0; 
        }
      }
    </style>

    <title>Buku Pelajaran</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
      <img src="gambar1.png" width="150">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-black" href="profile.php">PROFILE</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle text-black" href="#tutorial" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PEMBAYARAN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="spp.php">SPP SEKOLAH</a>
              <a class="dropdown-item active" href="buku.php" style="background-color: red; color: white;">BUKU PELAJARAN</a>
              <a class="dropdown-item" href="seragam.php">SERAGAM</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-black" href="ppdb.php">PPDB<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-black" href="profile.php#contact">HUBUNGI KAMI</a>
          </li>
          <li class="nav-item">
            <a href="proses_logout.php" class="nav-link js-scroll-trigger text-black">LOG OUT</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <br><br><br>

    <section id="sitem_pembelajaran" class="portofolio bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-5 mb-5">
        <div class="col text-center">
          <h2 style="color: black; font-size: 32px;">Buku Pelajaran</h2>
          <hr>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img src="buku1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Lingkup Pengembangan Fisik Motorik TK-A</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="Buku2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Lingkup Pengembangan Nilai Agama dan Moral TK-A</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="Buku3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Lingkup Pengembangan Bahasa TK-B</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img src="Buku4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Lingkup Pengembangan Nilai Agama dan Moral TK-B</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="Buku5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Lingkup Pengembangan Sosial Emosional TK-A</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="Buku6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="color: black; text-align: center;">Buku Calistung</p>
              <a href="" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
              <img src="gambar1.png" style="width: 150px; margin-bottom: 20px;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco.</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
              <h3 class="a">Useful link</h3>
              <ul>
                <li><a href="#">Event</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Hosting</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
              <h2 class="b">Media Social</h2>
              <p>Ikuti kami di media sosial kami untuk informasi lebih lanjut untuk terus memperbarui</p>
              <a href="https://www.facebook.com/TKTelkomMakassar/"><i class="fab fa-facebook-f" style="margin-left: 2px;"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/tktelkom_makassar/"><i class="fab fa-instagram mr-2"></i></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-four md-mb-30 sm-mb-30">
              <h2 class="b">Lokasi</h2>
              <div class="mt-3" style="color: white;">
                <i class="fas fa-map-marker-alt"></i><p class="lead" style="margin-top: -27px; padding-left: 25px; font-size: 17px;"><a href="https://www.google.com/maps/place/Jl.+A.+P.+Pettarani+No.4,+Gn.+Sari,+Kec.+Rappocini,+Kota+Makassar,+Sulawesi+Selatan+90222/@-5.1697821,119.4320095,17z/data=!4m5!3m4!1s0x2dbee28e3ddeef33:0x62a27f40728c37e!8m2!3d-5.1697821!4d119.4341982" style="text-decoration: none; color: grey;">Jalan AP. Pettarani No.4 Kota Makassar</a></p><br>
              </div>
              <div style="margin-top: -35px; color: white;">
                <i class="fas fa-phone-alt"></i><p class="lead" style="margin-top: -25px; padding-left: 26px; font-size: 17px;">0822-1838-7258</p><br>
              </div> 
              <div style="margin-top: -32px; color: white;">
                <i class="far fa-clock"></i><p class="lead" style="margin-top: -25px; padding-left: 25px; font-size: 17px;">Senin - Sabtu<br>08:00 - 16:00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <small><p class="footer-bottom-text">Copyright 2020 &copy; TK Telkom Makassar. All Right reserved</p></small>
      <small><p class="text-right">Created With <img src="hati.gif" style="width: 25px;"> By Me</p></small>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
