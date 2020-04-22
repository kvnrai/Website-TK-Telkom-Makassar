<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/eb1adb8e65.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <style>
      .nav-link:hover {
        background-color: grey;
      }
      .display-4 {
        font-weight: bold;
      }
      .card-body-icon {
        position: absolute;
        z-index: 0;
        top: 25px;
        right: 4px;
        opacity: 0.4;
        font-size: 90px;
      }
      .row .card:hover{
        box-shadow: 2px 2px 7px rgba(0,0,0,0,4);
        transform: scale(1.03);
      }
      ul li a{
        text-decoration: none;
        color: white;
        padding: 5px 20px;
        border: 1px solid transparent;
        transition: 0.6s;
      }
      ul li a:hover{
        background-color: grey;
        color: black;
      }
      ul li.active a{
        background-color: grey;
        color: black;
      }
      h5 a i:hover{
        text-decoration: none;
        color: white;
        transition: 0.6s;
      }
    </style>

    <title>Admin</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN | <b>TK TELKOM MAKASSAR</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
          <h5>
            <a href="#"><i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i></a>
            <a href="#"><i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i></a>
            <a href="proses_logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a>
          </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-danger mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item active">
            <a class="nav-link text-white" href="admin.php"><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i> Data Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_produk.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Data Produk</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data_pembelian.php"><i class="fas fa-user-edit mr-2"></i> Data Pembelian</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kuliah</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

        <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-graduate mr-2"></i>
              </div>
              <a href="mahasiswa.php" style="text-decoration: none; color: white;">
              <h5 class="card-title">JUMLAH SISWA</h5>
              <div class="display-4">1.200</div>
              <p class="card-text text-white">
              <p class="card-text text-white">Klik Untuk Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
              </a>
            </div>
          </div>

          <div class="card bg-success ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chalkboard-teacher mr-2"></i>
              </div>
              <a href="data_produk.php"  style="text-decoration: none; color: white;">
              <h5 class="card-title">DATA PRODUK</h5>
              <div class="display-4">58</div>
              <p class="card-text text-white">
              <p class="card-text text-white">Klik Untuk Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
              </a>
            </div>
          </div>

          <div class="card bg-danger ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-edit mr-2"></i>
              </div>
              <a href="data_pembelian.php" style="text-decoration: none; color: white;">
              <h5 class="card-title">DATA PEMBELIAN</h5>
              <div class="display-4">21</div>
              <a href="pegawai.php" style="text-decoration: none; color: white;">
              <p class="card-text text-white">
              <p class="card-text text-white">Klik Untuk Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
              </a>
            </div>
          </div>
        </div>

        <a href="https://www.instagram.com/tktelkom_makassar/" style="text-decoration: none;">
        <div class="row mt-4">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header display-4 pt-4 pb-4" style="background-image: url(instagram.jpg); background-size: cover;">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-danger">INSTAGRAM</h5>
            </div>
          </div>
          </a>

          <a href="https://www.facebook.com/TKTelkomMakassar/" class="text-primary" style="text-decoration: none;">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header display-4 pt-4 pb-4" style="background-image: url(facebook.jpg); background-size: cover;">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-primary">FACEBOOK</h5>
            </div>
          </div>
          </a>

          <a href="#" class="text-info" style="text-decoration: none;">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header display-4 pt-4 pb-4" style="background-image: url(twitter.jpg); background-size: cover;">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-info">TWITTER</h5>
            </div>
          </div>
          </a>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>
