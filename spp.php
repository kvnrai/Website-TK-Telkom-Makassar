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
    </style>

    <title>SPP</title>
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
              <a class="dropdown-item active" href="spp.php" style="background-color: red; color: white;">SPP SEKOLAH</a>
              <a class="dropdown-item" href="buku.php">BUKU PELAJARAN</a>
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

    <div class="container">
      <h2 class="alert alert-dark text-center mt-3" style=" font-size: 32px;">FORMULIR PEMBAYARAN SPP</h2>

      <form>
        <h4 class="text-center mt-5"><b>Pembayaran SPP</b></h4>
        <hr class="mt-4">

        <div class="form-group row">
          <label for="nomor_induk" class="col-sm-2 col-form-label">Nomor Induk</label>
          <div class="col-sm-10">
            <input type="number" name="nomor_induk" class="form-control" placeholder="Masukkan Nomor Induk" id="nomor_induk">
          </div>
        </div>

        <div class="form-group row">
          <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
          <div class="col-sm-10">
            <input type="teks" name="nama_siswa" class="form-control" placeholder="Masukkan Nama Siswa" id="nama_siswa">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-4">
          <select class="form-control">
            <option>Kelas A</option>
            <option>Kelas B</option>
            <option>Kelas C</option>
            <option>Kelas D</option>
            <option>Kelas E</option>
          </select>
        </div>

          <label class="col-sm-2 col-form-label">Bulan</label>
        <div class="col-sm-4">
          <select class="form-control">
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>
          </select>
        </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
            </div>
          <input type="number" name="bayar" id="bayar" class="form-control" placeholder="Masukkan Nominal">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">BAYAR</button>
        <button type="reset" class="btn btn-danger mt-4">RESET</button>

        <hr class="mt-4">
        <p style="color: #999;">Pastikan data yang diisi benar.</p>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> 
