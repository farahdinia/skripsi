    
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
       
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Ujian Oline Pilihan Ganda</h1>
    <p class="lead">ujian online masuk ke perguruan tingii teknik cendekia(STTC) </p>
  </div>
</div>

   <div class="container">
   <table class="table" >

  <thead>
    <tr>
      <th scope="col">nomor</th>
      <th scope="col">pertanyaan</th>
      <th scope="col">jawab a</th>
      <th scope="col">jawab b</th>
      <th scope="col">jawab c</th>
      <th scope="col">jawab d</th>
      <th scope="col">jawab e</th>
      <th scope="col">jawaban</th>
    </tr>
    
     <?php foreach ($soall as $soal) :?> 

      
      <tr>
        <td><?php echo $soal['nomor'];?></td>
        <td><?php echo $soal['pertanyaan'];?></td>
         <td><?php echo $soal['jawab_a'];?></td>
         <td><?php echo $soal['jawab_b'];?></td>
         <td><?php echo $soal['jawab_c'];?></td>
         <td><?php echo $soal['jawab_d'];?></td>
         <td><?php echo $soal['jawab_e'];?></td>
         <td><?php echo $soal['jawaban'];?></td>
      </tr>
      <?php endforeach; ?>

  </table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>/PMB/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="<?php echo base_url();?>/PMB/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/PMB/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/PMB/js/script.js"></script>
  </body>
</html>
      
