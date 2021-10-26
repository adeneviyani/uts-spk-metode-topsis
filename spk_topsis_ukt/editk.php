<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_krit  = $_POST['id_kriteria'];
$nama_kriteria = $_POST['nama_kriteria'];
$bobot    = $_POST['bobot'];
$status   = $_POST['status'];

// $ubah = mysql_query("UPDATE tab_kriteria SET nama_kriteria ='".$nama_kriteria."',bobot ='".$bobot."',status ='".$status."' WHERE id_kriteria='".$id_krit."' ");

//Ini gw pake mysqli_query tadi elu pake mysql_query setau gw itu php5 gw coba pake yg mysqli bisa wkwkwk

$query = "UPDATE tab_kriteria SET nama_kriteria ='$nama_kriteria' , bobot ='$bobot' ,status ='$status' WHERE id_kriteria='$id_krit' ";
$result = mysqli_query($koneksi, $query);
if ($result) {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
  echo "<script>window.location.href = \"kriteria.php\" </script>";
}else {
  // code...
  echo "<script>alert Gagal </script>";
}


?>
