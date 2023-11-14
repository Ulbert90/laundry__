<?php
session_start();
include_once '../koneksi.php';

$harga = $_POST['harga'];
mysqli_query($koneksi, "UPDATE harga SET harga_per_kilo='$harga'");
header("location: harga.php?pesan=berhasil");
?>
