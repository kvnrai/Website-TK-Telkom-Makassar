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
          <li class="nav-item">
            <a class="nav-link text-white" href="admin.php"><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Dosen</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i> Daftar Pegawai</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kuliah</a><hr class="bg-secondary">
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-paper-plane mr-2"></i> NILAI MAHASISWA</h3><hr>

        <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i> TAMBAH DATA NILAI MAHASISWA</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama Mahasiswa</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Kode MK</th>
              <th scope="col">Nilai Akhir</th>
              <th colspan="3" scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kevin</td>
              <td>Web Programing</td>
              <td>WP-031</td>
              <td>90</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>12341</td>
              <td>BEKASI, 31 JUNI 1998</td>
              <td>BEKASI - JAWA BARAT</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td>Mark</td>
              <td>12341</td>
              <td>BEKASI, 31 JUNI 1998</td>
              <td>BEKASI - JAWA BARAT</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>Mark</td>
              <td>12341</td>
              <td>BEKASI, 31 JUNI 1998</td>
              <td>BEKASI - JAWA BARAT</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
            </tr>

          </tbody>
        </table>

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
