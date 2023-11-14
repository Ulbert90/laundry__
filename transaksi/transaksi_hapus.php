<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM transaksi WHERE transaksi_id='$id'");
mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_transaksi='$id'");

header("location: transaksi.php");
?>
