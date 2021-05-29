<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('PMB/css/bootstrap.min.css'); ?>">

  <!-- my fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('PMB/css/index.css'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">


  <title>PMB STTC | Selamat Datang </title>
</head>

<body>

  <!-- NAVBAR-->
  <!-- NAVBAR-->
  <nav class="navbar navbar-expand-lg text-dark bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= base_url('PMB/image.web/logo.id.png'); ?>" alt="..." width="80"></a>
      <a class="navbar-brand " href="#page-top">PMB ONLINE | STTC</br>Sekolah Tinggi Teknik Cendekia </a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <!-- Link--><a class="nav-link active" href="#home" class="page-scroll">Home</a>
          </li>
          <!-- Link--><a class="nav-link active" href="#biayapendaftaran" class="page-scroll">Biaya Pendaftaran</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#Profil" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#programstudi" class="page-scroll"> Program Studi</a>
              <a class="dropdown-item" href="#galery">Galery</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Testimoni</a>
            </div>
          </li>
          <!-- Link--><a class="nav-link " href="#FAQ">FAQ</a>
          </li>
          <li class="nav-item mr-2">
            <!-- Link--><a class="nav-link" href="#kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a href=" <?= base_url('auth/registration'); ?>" class="nav-link btn-primary btn-sm btn-lg active" role="button" aria-pressed="true">Daftar Sekarang</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>



  <!-- akhir Navbar</a> -->

  <!-- Home-->
  <header>
    <section class="home" id="home">
      <div class=" py-5 mt-5 with-pattern d-flex align-items-center py-5 background">
        <div class="container">
          <div class="row  jumbotron">
            <div class="col-md-6 mb-5 mb-md-0 ">
              <a>
                <image src="<?php echo base_url('PMB/image.web/bb7.png'); ?>" alt="..." width="100px">
              </a>
              <h1 class="mb-3 PMB">PMB <span class="text-primary">|ONLINE </br>Penerimaan Mahasiswa Baru </br>"Sekolah Tinggi Teknik Cendekia</h1>
              <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
            <div class="col-md-5 ml-auto">
              <div class="img-gradient img-gradient-right "><img class="img-fluid shadow " src="<?php echo base_url(); ?>/PMB/image.web/foto1.id.jpg " alt="..." weight=400px height=150px style="margin-top: -35px"></div>
              <a href="<?php echo base_url(); ?>login" class="btn btn-primary my-2 my-sm-0" type="button" tabindex="-1" role="button" aria-disabled="true">LOGIN</a>

            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </header>

  <!-- biayapendaftaran -->
  <header>
    <div class="biayapendaftaran" id="biayapendaftaran">

      <h1 class="display-4 text-center"><br>Biaya dan syarat pendaftaran </h1>
      <p class="lead text-center">Adapun rincian biaya dan syarat pendaftaran terbagi dalam 4 gelombang dibawah ini. </p>
    </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-xl-3">
          <div class="card-body text-center ">
            <h2 class="card-title">Gelombang 1</h2>
            <h3 class="card-text ">Rp.100.000</h3>
            <p class="card-text"><small class="text-muted">8 januari 2021 - 4 maret 2021</small></p>
          </div>
          <h6 class="card-text container"> persyaratan </h6>
          <p class="card-text container"> scan dan upload FC.ijasah/SKL legalisir <br> scan dan upload FC akte kelahiran <br>scan dan upload FC kartu keluarga <br> upload pas foto ukuran 3x4 cm </p>
          <div class="container card text-white bg-success mb-3" style="max-width: 15rem; max-height: 10rem;">
            <div class="card-body">
              <p class="card-title text-center">Semua Berkas Yang diUpload Harap diBawa Setelah Pengumuman Kelulusan </p>
              <p class="card-text text-center">Bebas TES Masuk.</p>
            </div>
          </div>

        </div>
        <div class="col-xl-3">
          <div class="card-body text-center ">
            <h2 class="card-title">Gelombang 2</h2>
            <h3 class="card-text ">Rp.100.000</h3>
            <p class="card-text"><small class="text-muted">8 januari 2021 - 4 maret 2021</small></p>
          </div>
          <h6 class="card-text container"> persyaratan </h6>
          <p class="card-text container"> scan dan upload FC.ijasah/SKL legalisir <br> scan dan upload FC akte kelahiran <br>scan dan upload FC kartu keluarga <br> upload pas foto ukuran 3x4 cm </p>
          <div class="container card text-white bg-secondary mb-5" style="max-width: 15rem; max-height: 10rem;">
            <div class="card-body">
              <p class="card-title text-center">Semua Berkas Yang diUpload Harap diBawa Setelah Pengumuman Kelulusan </p>
              <p class="card-text text-center">Mengikuti TES Masuk.</p>
            </div>
          </div>
        </div>

        <div class="col-xl-3">
          <div class="card-body text-center ">
            <h2 class="card-title">Gelombang 3</h2>
            <h3 class="card-text ">Rp.100.000</h3>
            <p class="card-text"><small class="text-muted">8 januari 2021 - 4 maret 2021</small></p>
          </div>
          <h6 class="card-text container"> persyaratan </h6>
          <p class="card-text  container"> scan dan upload FC.ijasah/SKL legalisir <br> scan dan upload FC akte kelahiran <br>scan dan upload FC kartu keluarga <br> upload pas foto ukuran 3x4 cm </p>
          <div class="container card text-white bg-danger mb-5" style="max-width: 15rem; max-height: 10rem;">
            <div class="card-body">
              <p class="card-title text-center ">Semua Berkas Yang diUpload Harap diBawa Setelah Pengumuman Kelulusan </p>
              <p class="card-text text-center">Mengikuti TES Masuk </p>
            </div>
          </div>
        </div>

        <div class="col-xl-3">
          <div class="card-body text-center ">
            <h2 class="card-title">Gelombang 4</h2>
            <h3 class="card-text ">Rp.100.000</h3>
            <p class="card-text"><small class="text-muted">8 januari 2021 - 4 maret 2021</small></p>
          </div>
          <h6 class="card-text container"> persyaratan </h6>
          <p class="card-text container"> scan dan upload FC.ijasah/SKL legalisir <br> scan dan upload FC akte kelahiran <br>scan dan upload FC kartu keluarga <br> upload pas foto ukuran 3x4 cm </p>
          <div class=" container card text-white bg-primary mb-5 " style="max-width: 15rem; max-height: 10rem;">
            <div class="card-body">
              <p class="card-title text-center">Semua Berkas Yang diUpload Harap diBawa Setelah Pengumuman Kelulusan </p>
              <p class="card-text text-center"> Mengikuti TES Masuk </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>
    </div>
  </header>
  <!-- biayapendaftaran-->
  <header>
    <section class="galery" id="galery">
      <div class="container ">
        <div class="row">
          <div class="col md-12">
            <h3 class="title-galery-feed"> our galery</h3>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-4 col-sm-6 col-xs-6 item zoom-on-hover">
            <a class="lightbox" href="#gambar1"><img src="<?php echo base_url(); ?>/PMB/image.web/foto2.id.png " weight=400px height="400px"></a>
            <dir class="overlay" id="gambar1">
              <img src="<?php echo base_url(); ?>/PMB/image.web/foto2.id.png" alt="... "></img>

            </dir>

          </div>

          <div class="col-md-4 col-sm-6 col-xs-6 item zoom-on-hover">
            <a class="lightbox" href="#"><img src="<?php echo base_url(); ?>/PMB/image.web/foto2.id.png " weight=400px height="400px"></a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 item zoom-on-hover">
            <a class="lightbox" href="#"><img src="<?php echo base_url(); ?>/PMB/image.web/foto2.id.png " weight=400px height="400px"></a>
          </div>

          <div class="button ml-auto">
            <a href="<?php echo base_url(); ?>/Galery/index/galery" class="more-galery-feed " class="btn btn-primary my-2 my-sm-0" type="button"> Check Our Galery </a>
          </div>
        </div>
      </div>
    </section>
  </header>




  <!-- programstudy</a> -->



  <header>
    <div class="programstudi" id="programstudi">
      <div class="jumbotron1 jumbotron-fluid  ">
        <div class="container">
          <h1 class="display-4 text-center">program Study </h1>
          <h2 class="lead"> Sekolah Tinggi Teknik Cendekia (SSTC) merupakah Salah satu perguruan tinggi swasta yang berada dikawasan islamic village kota Tangerang.

        </div>
      </div>

      <div class="container py-5 mt-5">
        <div class="row align-items-center ">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="img-gradient img-gradient-right"><img class="img-fluid shadow rounded" src="<?php echo base_url(); ?>/PMB/image.web/foto2.id.png" alt=".."></div>
          </div>
          <div class="col-md-5 ">
            <div class="media-body ml-3">
              <h2 class="card-title">Fakultas Teknik</h2>

              <p class="card-text"><small class="text-muted">prodi: S1 Teknik Informatika, S1 Teknik Industri</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <header>

    <section class="py-5" id="kontak">
      <div class="container py-5">
        <div class="row">
          <div class="col-sm-7 mx-auto text-center mb-5">
            <h2>Kontak Kami</h2>
            <p class="text-muted">Kami Menyediakan Beberapa Kontak Untuk Dapata Menghubungi Kami, Baik melalui Kampus,nomor telefon,email. dan Form kontak kami di bawah ini </p><a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <form action="#">
              <div class="row">
                <div class="col-md-4 col-xs-4 text-center">
                  <div>
                    <img src="<?php echo base_url(); ?>/PMB/image.web/lo3.png" class="card-img-top " alt="..." width="200">
                    <div class="card-body py-6 col-sm-5 col-md-12">
                      <h3 class=" card-text h4">Lokasi Kampus</h3>
                      <ul class="list-unstyled sm-12">
                        <li class="text-muted"><a class="reset-anchor" href="mailto:iso@company.com">Jl. Qadr Raya No.12, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15810</a></li>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-3 text-center">
                  <div>
                    <img src="<?php echo base_url(); ?>/PMB/image.web/email1.jpg" class="card-img-top" alt="..." width="80">
                    <div class="card-body py-4 col-sm-5 col-md-4">
                      <h3 class=" card-text h4">Email </h3>
                      <ul class="list-unstyled mb-0">
                        <li class="text-muted text-center"><a class="reset-anchor" href="mailto:iso@company.com">sttc@company.com</li>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-3 text-center">
                  <div>
                    <img src="<?php echo base_url(); ?>/PMB/image.web/38.png" class="card-img-top" alt="..." width="200">
                    <div class="card-body py-4 col-sm-5 col-md-3">
                      <h3 class=" card-text h4">Whatsapp</h3>
                      <ul class="list-unstyled mb-0">
                        <li class="text-muted"><a class="reset-anchor" href="mailto:iso@company.com">09876542123<br>0983567899o</a></li>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-sm-5 mx-auto">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-4 col-sm-6">
                  <input class="form-control py-4" type="text" placeholder="Full name">
                </div>
                <div class="form-group col-lg-4 col-sm-6">
                  <input class="form-control py-4" type="email" placeholder="Email address">
                </div>
                <div class="form-group col-lg-4">
                  <input class="form-control py-4" type="text" placeholder="Subject">
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" rows="5" placeholder="How can we help you"></textarea>
                </div>
                <div class="form-group col-12 text-sm-center mb-0">
                  <button class="btn btn-primary" type="submit"> <i class="fas fa-paper-plane mr-2"></i>Send message</button>
                </div>
              </div>
            </form>
          </div>


        </div>
    </section>
  </header>
















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>/PMB/js/jquery-3.5.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/PMB/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/PMB/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/PMB/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo base_url(); ?>/PMB/js/script.js"></script>

</body>

</html>