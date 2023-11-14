<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <script src="https://kit.fontawesome.com/13c062a83b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-pzjw8f+ua8R3FqzYXhXn2aUr5IhLYgK2UfZl4/q6iUZCrqDj2Kk5FOzuzdcj2hcb" crossorigin="anonymous">
    
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <?php
    include_once '../koneksi.php';
    ?>
    <div class="container">

        <center><h2>FAMILY LAUNDRY</h2></center>
        <br/>
        <br/>
        <?php
        if(isset($_GET['dari']) && isset($_GET['sampai'])){

            $dari = $_GET['dari'];
            $sampai = $_GET['sampai'];
            ?>
            <h4>Data Laporan Laundry dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>

                <?php
                $data = mysqli_query($koneksi,"select * from pelanggan,transaksi where transaksi_pelanggan=pelanggan_id and date(transaksi_tgl) >= '$dari' and date(transaksi_tgl) <= '$sampai' order by transaksi_id desc");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                        <td><?php echo $d['transaksi_tgl']; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['transaksi_berat']; ?></td>
                        <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                        <td><?php echo "Rp. ".number_format($d['transaksi_harga']) ." ,-"; ?></td>
                        <td>
                            <?php
                            if($d['transaksi_status']=="0"){
                                echo "<div class='label label-warning'>PROSES</div>";
                            }elseif($d['transaksi_status']=="1"){
                                echo "<div class='label label-info'>DICUCI</div>";
                            }elseif($d['transaksi_status']=="2"){
                                echo "<div class='label label-success'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php } ?>
        </div>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
    </html>