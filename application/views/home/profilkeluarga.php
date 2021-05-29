 
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>PMB/css/bootstrap.min.css">

    <!-- my fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>PMB/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">


    <title>PMB STTC | Selamat Datang  </title>
    </head>
    <body>
      








 <header>
        <!-- As a link -->
        <div class="container">
<article>
  <h3>PMP ONLINE | STTC</h3><img src="<?php echo base_url();?>PMB/image.web/logo.id.png" alt="..." width="180"><h5>Sekolah Tinggi Teknik Cendekia</h5> <br><hr></hr>
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
              <!-- Link--><p class="nav-link active" href="index.html"><ins><b>C. Data Keluarga < </ins></b></p>
              </li>
              <!-- Link--><p class="nav-link active" href="index.html"><b>D. Data Program Studi < </b></p>
              </li>
               <!-- Link--><p class="nav-link active" href="index.html"><b>E. Upload Berkas < </b></p>
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
<header>
    <form class="form-group" method="POST" action="<?php echo site_url("Profilkeluarga/proses_index");?>">
      <div class="container">
          <div class="row">
       <div class="col-sm-6">
      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">Nama Ayah </label>
        <div class="col-sm-8">
          <input type="text" class="form-control"name="nama_ayah" id="inputPassword" placeholder="Masukkan nama orang/wali">
        </div>
      </div>

      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">Pendidikan ayah </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Pendidikan_ayah" id="inputPassword" placeholder="Masukkan Pendidikan terakhir ">
        </div>
      </div>
         </div>
  
    <div class="col-sm-6">
      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">Nama Ibu</label>
        <div class="col-sm-8">
          <input type="text" class="form-control"name="nama_ibu" id="inputPassword" placeholder="Masukkan nama orang/wali">
        </div>
      </div>

      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Pendidikan_ibu" id="inputPassword" placeholder="Masukkan Pendidikan terakhir ">
        </div>
      </div>
         </div>

           <div class="col-sm-6">
      <div class="form-group row">
            <label for="exampleInputinformasi1" class="col-sm-4 col-form-label">Pekerjaan ayah </label>
            <div class="col-sm-8">
                <select class ="form-control" name="pekerjaan_ayah"id="exampleInputinformasi1">
                  <option> Pilih Pekerjaan</option>
              <option>Pegawai Negri Sipil</option>
              <option> Pegawai Swasta</option>
               <option> Pilih Pekerjaan Lain</option>

            </select>
            </div>
             </div>


<div class="form-group row">
            <label for="exampleInputinformasi1" class="col-sm-4 col-form-label">Pengasilan</label>
            <div class="col-sm-8">
                <select class ="form-control"name="Pengasilan" id="exampleInputinformasi1">
              <option> Pilih Pengasilan</option>
              <option>1juta - 2juta</option>
              <option> 2juta - 4juta</option>
               <option> < 5 juta</option>
               <option> Pilih Pengasilan Lain</option>

            </select>
            </div>
             </div>
             </div>

            
        
          <div class="col-sm-6">
          <div class="form-group row">
            <label for="exampleInputinformasi1" class="col-sm-4 col-form-label">Pekerjaan ibu</label>
            <div class="col-sm-8">
                <select class ="form-control" name="Pekerjaa_ibu" id="exampleInputinformasi1">
                  <option> Pilih Pekerjaan</option>
                  <option>Ibu Rumah Tangga</option>
              <option>Pegawai Negri Sipil</option>
              <option> Pegawai Swasta</option>
               <option> Pilih Pekerjaan Lain</option>

            </select>
            </div>
             </div>

             <div class="form-group row">
            <label for="exampleInputinformasi1" class="col-sm-4 col-form-label">Pengasilan</label>
            <div class="col-sm-8">
                <select class ="form-control" name="Pengasilan_" id="exampleInputinformasi1">
              <option> Pilih Pengasilan</option>
              <option>1juta - 2juta</option>
              <option> 2juta - 4juta</option>
               <option> < 5 juta</option>
               <option> Pilih Pengasilan Lain</option>

            </select>
            </div>
             </div>
             </div>

<div class="col-sm-6">
      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">No HP </label>
        <div class="col-sm-8">
          <input type="text" class="form-control"name="hp" id="inputPassword" placeholder="Masukkan nomor handphone">
        </div>
      </div>
      </div>

      <div class="col-sm-6">
      <div class="form-group row">
         <label for="inputPassword" class="col-sm-4 col-form-label">No TLP</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="tlp" id="inputPassword" placeholder="Masukkan nomor telephon">
        </div>
      </div>
      </div>
        

         


        <div class="col-sm-12">
      <div class="form-group row">
         <label for="inputPassword" class="col-sm-2 col-form-label">Alasan Memilih Sekolah Tinggi Teknik Cendekia </label>
        <div class="col-sm-10 ">
          <textarea class=" form-control"name="alasan" rows="2">
         </textarea><br>
          <button type="submit"  class="btn btn-secondary btn-sm float-right">Lanjut></button>
           <a href=" <?php echo base_url();?>Profilcalon_mahasiswa/index/profilmaba" class="btn btn-danger btn-sm float-right" tabindex="-1" role="button" aria-disabled="true">>>Back</a>
        </div>
        </div>
        <div class="col-sm-8 float-right">
        <i><p>"harap isi semua form isian YA DAN SILAHAN KLIK TOMBOL LANJUT UNTUK Ke Tahap Selanjutnya...</i></p>
        </div>
        </div>
           
     
  

     </div>   
     </div>

      </form>
    </header>
    
         
         
            


    <!-- akhir data calon mahasiswa-->

<!-- DAFTARTAR SEKARANG  -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>PMB/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="<?php echo base_url();?>PMB/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>PMB/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>PMB/js/script.js"></script>
  </body>
</html>
