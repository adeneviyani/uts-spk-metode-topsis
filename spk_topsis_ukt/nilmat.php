<?php
//koneksi
session_start();
include("koneksi.php");

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

    <!--tabel-tabel dan form-->
    <div class="container"> <!--container-->
      <div class="row"> <!--row-->
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              <h5><b>Nilai Matriks</b></h5>
            </div>

            <div class="panel-body">
              <!--form pengisian-->
              <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                  <div class="panel panel-default">
                    <div class="panel-heading text-center">
                      Alternatif
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form class="form" action="tambahnilmat.php" method="post">
                            <div class="form-group">
                              <select class="form-control" name="alter">
                                <option >Nama Alternatif</option>
                                <?php
                                //ambil data dari database
                                $nama = $koneksi->query('SELECT * FROM tab_alternatif ORDER BY id_alternatif');
                                while ($datalter = $nama->fetch_array())
                                {
                                  echo "<option value=\"$datalter[id_alternatif]\">$datalter[nama_alternatif]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="krit">
                                <option>Nama Kriteria</option>
                                <?php
                                //ambil data dari database
                                $krit = $koneksi->query('SELECT * FROM tab_kriteria ORDER BY id_kriteria');
                                while ($datakrit = $krit->fetch_array())
                                {
                                  echo "<option value=\"$datakrit[id_kriteria]\">$datakrit[nama_kriteria]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="nilai">
                                <option>Nilai</option>3
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                            <div class="form-group" align="center">
                              <button type="submit" class="btn btn-success">Proses</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <!--tabel-tabel-->
              <div class="row">
                <!--tabel alternatif-->
                <div class="col-xs-6 col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading text-center">
                      Tabel Alternatif
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">

                          <?php
                           $sql = $koneksi->query('SELECT * FROM tab_alternatif');
                           ?>
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              while ($row = $sql->fetch_array()) {
                                echo ("<tr><td align=\"center\">".$row[0]."</td>");
                                echo ("<td align=\"left\">".$row[1]."</td>");
                                echo "</tr>";
                              }
                               ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!--tabel kriteria-->

                <div class="col-xs-6 col-md-4">
                  <div class="panel panel-default">
                    <div class="panel-heading text-center">
                      Tabel Kriteria
                    </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">

                          <?php
                          $sql = $koneksi->query('SELECT * FROM tab_kriteria');
                           ?>
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              while ($row = $sql->fetch_array()) {
                                echo ("<tr><td align=\"center\">".$row[0]."</td>");
                                echo ("<td align=\"left\">".$row[1]."</td>");
                                echo ("<td align=\"left\">".$row[2]."</td>");
                                echo "</tr>";
                              }
                               ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
        </div>
        </div> <!--row-->
        </div> <!--container-->

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Tabel Pemberian Nilai
                </div>

                <div class="panel-body">
                  <?php
                  //pemanggilan data, matra dan pangkat
                  $sql = $koneksi->query("SELECT * FROM tab_topsis
                  JOIN tab_alternatif ON tab_topsis.id_alternatif=tab_alternatif.id_alternatif
                  JOIN tab_kriteria ON tab_topsis.id_kriteria=tab_kriteria.id_kriteria") or die (mysql_error());
                   ?>
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>ALTERNATIF</th>
                        <th>KRITERIA</th>
                        <th>NILAI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      //menampilkan data
                      while ($row = $sql->fetch_array())
                      {
                        $nmkriteria   =$row['nama_kriteria'];
                        echo ("<tr><td align=\"center\">".$no."</td>");
                        echo ("<td align=\"left\">".$row[4]."</td>");
                        echo ("<td align=\"left\">".$nmkriteria."</td>");
                        echo ("<td align=\"left\">".$row[2]."</td>");
                        echo "</tr>";
                        $no++;
                      }
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> <!--row-->
        </div> <!--container-->
        

        <!--plugin-->
        <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
