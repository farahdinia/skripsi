<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/PMB/css/bootstrap.min.css">

    <!-- my fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/PMB/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">


    <title>PMB STTC | Selamat Datang  </title>
    </head>
    <body>
      








 <header>
        <!-- As a link -->
       <header>
        <!-- As a link -->
        <div class="container">
<article>
  <h3>PMP ONLINE | STTC</h3><img src="<?php echo base_url();?>/PMB/image.web/logo.id.png" alt="..." width="180"><h5>Sekolah Tinggi Teknik Cendekia</h5> <br><hr></hr>
     <style type="text/css">
            h3{
              color: #000000;
              margin-right: -180px; 
              margin-left: 180px;
              margin-top: 20px;

            }

            img {
              
               margin-top: -50px;

            }
            h5{
              color:  #d73249;
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
                <!-- Link--><p class="nav-link active" href="dafar.php"><b> A. Data Akun Dan informasi < </b></p>
              </li>
              <!-- Link--><p class="nav-link active" href="data.calon "><b>B. Data Calon Mahasiswa Baru < </b></p>
              </li>
              </li>
              <!-- Link--><p class="nav-link active" href="index.html"><b>C. Data Keluarga</b></p>
              </li>
              <!-- Link--><p class="nav-link active" href="index.html"><b>D. Data Program Studi</b></p>
              </li>
               <!-- Link--><p class="nav-link active" href="index.html"><ins><b>E. Upload Berkas < </ins></b></p>
              </li>
            </ul>

             <style type="text/css">
            
            p{
              font-family: Cambria,Times New Roman,Arial; 
              color: #000000;
              
            }
            
          </style>
          </div>
        </div>
        </div>

      </nav>
</header>
<!-- data calon mahasiswa-->


<?php echo form_open_multipart('Dataupload/create') ?>
<div class="container">
          <div class="row">
          <div class="col-xl-6">
            <div class="form-group">
            <label for="upload1">Scan dan Upload.Fc Ijasah/Skl Terlegalisir</label>
            <input type="file" class="form-control" name="fc_upload_ijazah" id="upload1" aria-describedby="emailHelp" placeholder="masukan email" size="20" value="<?php echo set_value('fc_upload_ijazah');?>">
            <small class="form-text text-muted">Catatan:File Harus Dalam Bentuk Format (.jpg.jpeg.png)</small>
            </div>
             <div class="form-group">
            <label for="upload2">Scan dan Upload.Fc Akte Kelahiran</label>
            <input type="file" class="form-control"name="upload_fc_akte" id="upload2" placeholder="masukan password " value="<?php echo set_value('upload_fc_akte');?>">
            <small class="form-text text-muted">Catatan:File Harus Dalam Bentuk Format (.jpg.jpeg.png)</small>
             </div>
          </div>
          <!-- register -->
          <div class="col-xl-6">
            <div class="form-group">
            <label for="upload3">Scan dan Upload.Fc Kartu Keluarga</label>
               <input type="file" class="form-control" name="upload_fc_kk" id="upload3" aria-describedby="emailHelp" placeholder="masukan email "value="<?php echo set_value('upload_fc_kk');?>">
             <small class="form-text text-muted">Catatan:File Harus Dalam Bentuk Format (.jpg.jpeg.png)</small>
            </div>

           <div class="form-group">
            <label for="upload4">Upload.Pas Foto</label>
            <input type="file" class="form-control" name="upload_fc_pas_foto" id="upload4" placeholder="Isi Nama Orang Yang Merecomendasikan"value="<?php echo set_value('upload_fc_pas_foto');?>">
            <small class="form-text text-muted">Catatan:Ukuran Foto 3x4 (.jpg.jpeg.png)</small><br><br>
            <br>
           <button type="submit"  name="submit"class="btn btn-secondary btn-sm float-right">Simpan></button>
            <a href="<?php echo base_url();?>/DataPS/index/dataps" class="btn btn-danger btn-sm float-right" tabindex="-1" role="button" aria-disabled="true">>>Back</a>

             </div>   
            </div>
            <div class="col-sm-12 float-right">
              <i><p>"harap isi semua form isian YA DAN SILAHAN KLIK TOMBOL LANJUT UNTUK Ke Tahap Selanjutnya...</i></p>
              </div>
   
     </div>         
<?php echo form_close() ?>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>/PMB/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="<?php echo base_url();?>/PMB/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/PMB/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/PMB/js/script.js"></script>
  </body>
</html>