<?php
//koneksi
session_start();
include("koneksi.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$poin       = $_POST['nilai'];

$tambah = $koneksi->query('SELECT * FROM tab_topsis');

if ($row = $tambah->fetch_row()) {

  $masuk = "INSERT INTO tab_topsis VALUES ('".$alternatif."','".$kriteria."','".$poin."')";
  $buat  = $koneksi->query($masuk);

  echo "<script>alert('Input Data Berhasil') </script>";
  echo "<script>window.location.href = \"nilmat.php\" </script>";
}

 ?>
