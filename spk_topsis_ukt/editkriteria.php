<?php
//koneksi
session_start();
include ("koneksi.php");

//perintah untuk menampilkan hasil edit
$id_krit  = $_GET['id_kriteria'];
$kriteria = $koneksi->query("SELECT * FROM tab_kriteria WHERE id_kriteria = '$id_krit' ");

while ($row = $kriteria->fetch_row())
  {
    $nama_kriteria  = $row[1];
    $bobot = $row[2];
    $status = $row[3];
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    

    <title>SPK KERINGANAN PEMBAYARAN UKT</title>
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

        <div class="collapse navbar-collapse">

        </div>
      </div>
    </nav><br><br>

    <div class="container">

      <div class="row">
        <!--form kriteria-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              Edit Kriteria
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editk.php" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" name="id_kriteria" value= <?php echo $_GET['id_kriteria']; ?> readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nama_kriteria" value= <?php echo $nama_kriteria; ?> >
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="bobot" value= <?php echo $bobot; ?> >
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="status" value= <?php echo $status; ?> >
                    </div>
                    <div class="form-group">
                      <a href="kriteria.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form kriteria-->

      </div>
    </div>

    

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
