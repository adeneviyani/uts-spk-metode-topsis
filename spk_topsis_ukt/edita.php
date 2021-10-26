<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_alter   = $_POST['id_alternatif'];
$alternatif = $_POST['nama_alternatif'];

//Ini pnya lu sebelumnya
// $ubah = mysql_query("UPDATE tab_alternatif SET nama ='".$alternatif."' WHERE id_alternatif ='".$id."' ");
// echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
// echo "<script>window.location.href = \"alternatif.php\" </script>";

//Gw ubah jasdi begini, perhatiin jga kutipnya sal, gw dapet ini dr web crud pnya gw
//Perhatiin di querynya sal, lu SET nama . padahal di database lu harusnya nama_alternatif jadinya ga jalan
$query = "UPDATE tab_alternatif SET nama_alternatif ='$alternatif' WHERE id_alternatif = '$id_alter' ";
$result = mysqli_query($koneksi, $query);
if ($result) {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
}else {
  // code...
  echo "<script>alert Gagal </script>";
}


?>
