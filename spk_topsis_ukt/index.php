<?php
//koneksi
session_start();
include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
     <title>SPK KERINGANAN PEMBAYARAN UKT</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/slider.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body>
<!--navbar navbar-default navbar-custom-->
    <!--menu-->
    <nav class="active ">
      <div class="container ">
        <div class="navbar-header ">
          <a class="navbar-brand" href="#">SPK METODE TOPSIS</a>
        </div>
        <div class="">
          <ul class="nav navbar-nav navbar-right" >
            <li>
              <a href="kriteria.php" class="text-dark">Kriteria</a>
            </li>
            <li>
              <a href="alternatif.php" class="text-dark">Alternatif</a>
            </li>
            <li>
              <a href="nilmat.php" class="text-dark">Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php" class="text-dark">Hasil Topsis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  

    <div  align="center ">
    <br><br><br><br><br><br>
    </div> 
    <br><br>
    <div align="center" class="font">
      <h3><b>SISTEM PENDUKUNG KEPUTUSAN KERINGANAN PEMBAYARAN UKT MAHASISWA LAMA</b></h3><br>
    </div>
    

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
