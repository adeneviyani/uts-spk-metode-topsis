<?php
//koneksi
session_start();
include ("koneksi.php");

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

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="styles/slider.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body class="font">
    <!--menu-->
    <nav class="active">
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
              <a href="nilmat.php" class="text-dark"> Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php" class="text-dark" >Hasil Topsis</a>
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
                    Alternatif
                </div>

                <ul class="nav nav-tabs">
                    <li class="active">
                      <a href="alternatif.php" data-toggle="tab">Tabel Alternatif</a>
                    </li>
                    <li>
                      <a href="alternatiftambah.php" data-toggle="tab">Tambah Alternatif</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--tabel alternatif-->
                        <table class="table table-striped table-bordered table-hover">
                          <thead >
                            <tr>
                              <th>ID Alternatif</th>
                              <th>Nama Alternatif</th>
                              <th colspan="2">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql = $koneksi->query('SELECT * FROM tab_alternatif order by id_alternatif ASC');
                            while ($row = $sql->fetch_array()) {
                            ?>
                            <tr>
                              <td><?php echo $row[0] ?></td>
                              <td><?php echo $row[1] ?></td>
                              <td align="center"><a href="editalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-edit fa-fw"></i> </td>
                              <td align="center"><a href="hapusalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-trash fa-fw"></i> </td>
                            </tr>

                            <?php } ?>
                          </tbody>
                        </table>
                        <!--tabel alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
        </div>
      </div>

    </div>

    

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
