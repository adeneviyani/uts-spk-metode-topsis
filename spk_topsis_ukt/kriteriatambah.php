<?php
//koneksi
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = $koneksi->query("SELECT id_kriteria FROM tab_kriteria") or die(mysqli_error());
$datakode = $carikode->fetch_array();
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = str_pad($kode, 0, STR_PAD_LEFT);
} else {
  $kode_otomatis = "1";
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK KERINGANAN PEMBAYARAN UKT</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="styles/slider.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body class="font">
    <!--menu-->
    <nav class="active ">
      <div class="container">
        <div class="navbar-header ">
          
          <a class="navbar-brand" href="index.php">SPK METODE TOPSIS</a>
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
    </nav><br><br>

    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Kriteria
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a href="kriteria.php" data-toggle="tab">Tabel Kriteria</a>
                    </li>
                    <li class="active">
                      <a href="kriteriatambah.php" data-toggle="tab">Tambah Kriteria</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!--form kriteria-->
                      <form class="form" action="tambahkriteria.php" method="post">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_krit" value="<?php echo $kode_otomatis; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="nm_krit" placeholder="Nama Kriteria">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="bobot" placeholder="Bobot">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="status" placeholder="Status">
                        </div>
                        <div class="form-group">
                          <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                        </div>
                      </form>
                      <!--form kriteria-->
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    

 

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
