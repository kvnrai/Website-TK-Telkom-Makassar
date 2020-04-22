<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/eb1adb8e65.js" crossorigin="anonymous"></script>

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
      section{
        min-height: 420px;
      }
      p {
        color: #999;
        line-height: 25px;
      }
      h2,h3 {
        color: #fff;
      }
      h2{
        font-size: 18px;
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

    <title>Formulir Pendaftaran</title>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black" href="#pembayaran" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PEMBAYARAN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="spp.php">SPP SEKOLAH</a>
              <a class="dropdown-item" href="buku.php">BUKU PELAJARAN</a>
              <a class="dropdown-item" href="seragam.php">SERAGAM</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-black" href="form.php">PPDB<span class="sr-only">(current)</span></a>
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

    <div class="container">
      <h2 class="alert alert-dark text-center mt-3" style="font-size: 32px;">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h2>

      <form>
        <h4 class="text-center mt-5"><b>Data Murid</b></h4>
        <hr class="mt-4">

        <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="teks" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama_lengkap">
          </div>
        </div>

        <div class="form-group row">
            <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Pangilan</label>
          <div class="col-sm-10">
            <input type="teks" name="nama_panggilan" class="form-control" placeholder="Masukkan Nama Pangilan" id="nama_panggilan">
          </div>
        </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
              <div class="col-sm-8">
                <input type="teks" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" id="tempat_lahir">
              </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
              </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="form-check-inline">
              <div class="col-sm-4 mr-10">
                <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio2" value="Laki-laki">
              </div>
              <label class="mt-1 ml-1">Laki-Laki</label>
              </div>

              <div class="form-check-inline">
              <div class="col-sm-4">
                <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio2" value="perempuan">
              </div>
              <label class="mt-1">Perempuan</label>
              </div>
          </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Budha</option>
            <option>Konghucu</option>
          </select>
        </div>
        </div>

        <div class="form-group row">
            <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke</label>
          <div class="col-sm-10">
            <input type="number" name="anak_ke" class="form-control" id="anak_ke">
          </div>
        </div>

        <div class="form-group row">
            <label for="jumlah_saudara" class="col-sm-2 col-form-label">Jumlah Saudara</label>
          <div class="col-sm-10">
            <input type="number" name="jumlah_saudara" class="form-control" id="jumlah_saudara">
          </div>
        </div>

<!-- Data orang tua -->
        <h4 class="text-center mt-5"><b>Data Orang Tua</b></h4>
        <hr class="mt-4">

        <div class="row">
            <div class="col-md-6">
        <div class="form-group row">
            <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
          <div class="col-sm-8">
            <input type="teks" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Masukkan Nama">
        </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row">
            <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
          <div class="col-sm-8">
            <input type="teks" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Masukkan Nama">
          </div>
        </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
        <div class="form-group row">
            <label for="pendidikan_terakhir_ayah" class="col-sm-4 col-form-label">Pendidikan Terakhir Ayah</label>
          <div class="col-sm-8">
            <input type="teks" name="pendidikan_terakhir_ayah" class="form-control mt-3" id="pendidikan_terakhir_ayah">
          </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row">
            <label for="pendidikan_terakhir_ibu" class="col-sm-4 col-form-label">Pendidikan Terakhir Ibu</label>
          <div class="col-sm-8">
            <input type="teks" name="pendidikan_terakhir_ibu" class="form-control mt-3" id="pendidikan_terakhir_ibu">
          </div>
        </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
        <div class="form-group row">
            <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
          <div class="col-sm-8">
            <input type="teks" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan Pekerjaan">
          </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row">
            <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
          <div class="col-sm-8">
            <input type="teks" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan">
        </div>
        </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Agama</label>
        <div class="col-sm-8">
          <select class="form-control">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Budha</option>
            <option>Konghucu</option>
          </select>
        </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Agama</label>
        <div class="col-sm-8">  
          <select class="form-control">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Budha</option>
            <option>Konghucu</option>
          </select>
        </div>
        </div>
        </div>
        </div>

        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat">
        </div>
        </div>

        <div class="form-group row">
          <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
        <div class="col-sm-10">
          <input type="tel" name="no_telp" placeholder="Masukkan No Telp" class="form-control" id="no_telp" pattern="[0-9]{3}">
        </div>        
        </div>

<!-- Data Wali -->
        <h4 class="text-center mt-5"><b>Data Wali</b></h4>
        <hr class="mt-4">

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="teks" name="nama" class="form-control" id="nama">
          </div>
        </div>

        <div class="form-group row">
            <label for="pendidikan_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
          <div class="col-sm-10">
            <input type="teks" name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir">
          </div>
        </div>

        <div class="form-group row">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
          <div class="col-sm-10">
            <input type="teks" name="pekerjaan" class="form-control" id="pekerjaan">
          </div>
        </div>

<!-- Keadaan Murid -->
        <h4 class="text-center mt-5"><b>Keadaan Murid</b></h4>
        <hr class="mt-4">

        <div class="row">
          <div class="col-md-6">
        <div class="form-group row">
            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan (CM)</label>
          <div class="col-sm-8">
            <input type="teks" name="tinggi_badan" class="form-control" id="tinggi_badan">
        </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row">
            <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan (KG)</label>
          <div class="col-sm-8">
            <input type="teks" name="berat_badan" class="form-control" id="berat_badan">
        </div>
        </div>
        </div>
        </div>

        <div class="form-group row">
            <label for="penyakit" class="col-sm-2 col-form-label">Penyakit Yang Pernah Di Derita</label>
          <div class="col-sm-10">
            <input type="teks" name="penyakit" class="form-control mt-3" id="penyakit">
          </div>
        </div>

        <div class="form-group row">
            <label for="kecelakaan" class="col-sm-2 col-form-label">Kecelakaan Yang Pernah Di Alami</label>
          <div class="col-sm-10">
            <input type="teks" name="kecelakaan" class="form-control mt-3" id="kecelakaan">
        </div>
        </div>

        <div class="form-group row">
            <label for="kelainan" class="col-sm-2 col-form-label">Kelainan Khusus Dalam Berprilaku</label>
          <div class="col-sm-10">
            <input type="teks" name="kelainan" class="form-control mt-3" id="kelainan">
        </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">KIRIM</button>
        <button type="reset" class="btn btn-danger mt-4">RESET</button>
        
        <hr>
          <p>Pastikan formulir terisi dengan benar.</p>
       </div>
      </form>
    </div>

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
              <a href="https://www.instagram.com/tktelkom_makassar/"><i class="fab fa-instagram"></i></a>
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
