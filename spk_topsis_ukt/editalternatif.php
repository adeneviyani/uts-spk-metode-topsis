<?php
//koneksi
session_start();
include ("koneksi.php");

$id_alter   = $_GET['id_alternatif'];
$alternatif = $koneksi->query("SELECT * FROM tab_alternatif WHERE id_alternatif = '".$id_alter."'");

while ($row = $alternatif->fetch_row())
  {
    $nama  = $row[1];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK MAHASISWA KERINGANAN PEMBAYARAN UKT</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/slider.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body class="font">
    <!--menu-->
    <nav class="active ">
      <div class="container">
        <div class="navbar-header ">
          <a class="navbar-brand" href="index.php">SPK METODE TOPSIS</a>
        </div>


        </div>
      </div>
    </nav><br><br>

    <div class="container">

      <div class="row">
        <!--form alternatif-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              Edit Alternatif
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="edita.php" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" name="id_alternatif" value= <?php echo $_GET['id_alternatif']; ?> readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nama_alternatif" value= <?php echo $nama; ?> >
                    </div>
                    <div class="form-group">
                      <a href="alternatif.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form alternatif-->

      </div>
    </div>

    

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
