<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/PMB/css/bootstrap.min.css'); ?>">

  <!-- my fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/PMB/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">


  <title>PMB STTC | Selamat Datang </title>
</head>

<body>
  <header>
    <!-- As a link -->
    <div class="container">
      <article>
        <h3>PMP ONLINE | STTC</h3><img src="<?php echo base_url('/PMB/image.web/logo.id.png'); ?>" alt="..." width="180">
        <h5>Sekolah Tinggi Teknik Cendekia</h5> <br>
        <hr>
        </hr>
        <style type="text/css">
          h3 {
            color: #000000;
            margin-right: -180px;
            margin-left: 180px;
            margin-top: 20px;

          }

          img {

            margin-top: -50px;

          }

          h5 {
            color: #d73249;
            margin-top: -60px;
            margin-left: 180px;
          }
        </style>
      </article>


  </header>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light py-3">

      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <!-- Link-->
              <p class="nav-link active" href="dafar.php"><ins><b> A. Data Akun Dan informasi < </b></ins></p>
            </li>
            <!-- Link-->
            <p class="nav-link active" href="data.calon "><b>B. Data Calon Mahasiswa Baru < </b>
            </p>
            </li>
            </li>
            <!-- Link-->
            <p class="nav-link active" href="index.html"><b>C. Data Keluarga < </b>
            </p>
            </li>
            <!-- Link-->
            <p class="nav-link active" href="index.html"><b>D. Data Program Studi < </b>
            </p>
            </li>
            <!-- Link-->
            <p class="nav-link active" href="index.html"><b>E. Upload Berkas < </b>
            </p>
            </li>
          </ul>

          <style type="text/css">
            p {
              font-family: Cambria, Times New Roman, Arial;
              color: #000000;

            }
          </style>
        </div>
      </div>
      </div>

      </div>
  </header>
  <!-- Daftar Sekarang -->
  <header>

    <!-- register -->

    <div class="container">
      <div class="row">
        <div class="col-xl-6">

          <form class="user" method="POST" action="<?= base_url("auth/registration"); ?>">
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="masukan nama lengkap ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan email ">
              <small id="emailHelp" class="form-text text-muted">Catatan:Email Akan Digunakan Saat Login.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="masukan password ">
              <small id="emailHelp" class="form-text text-muted">Catatan:Password Akan Digunakan Saat Login.</small>
            </div>
            <button type="submit" class="btn btn-secondary btn-sm">Lanjut</button>
          </form>

        </div>
      </div>
    </div>
  </header>
  <!-- register -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url('/js/jquery-3.5.1.slim.min.js'); ?>"></script>
  <script src="<?= base_url('/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('/js/script.js'); ?>"></script>
</body>

</html>