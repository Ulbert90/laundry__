<?php include_once 'header.php'; ?>
<?php include_once '../koneksi.php'; ?>
<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px">SELAMAT DATANG DI <b>Mon€y laun</b></h4>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1><i class="glyphicon glyphicon-user"></i></h1>
                            <span class="pull-right">
                                <?php
                                $pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                                echo mysqli_num_rows($pelanggan);
                                ?>
                            </span>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1><i class="glyphicon glyphicon-retweet"></i></h1>
                            <span class="pull-right">
                                <?php
                                $proses = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_status='0'");
                                echo mysqli_num_rows($proses);
                                ?>
                            </span>
                            Jumlah Cucian Di Proses
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1><i class="glyphicon glyphicon-info-sign"></i></h1>
                            <span class="pull-right">
                                <?php
                                $siap_ambil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_status='1'");
                                echo mysqli_num_rows($siap_ambil);
                                ?>
                            </span>
                            Jumlah Cucian Siap Ambil
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1><i class="glyphicon glyphicon-ok-circle"></i></h1>
                            <span class="pull-right">
                                <?php
                                $selesai = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_status='2'");
                                echo mysqli_num_rows($selesai);
                                ?>
                            </span>
                            Jumlah Cucian Selesai
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <h4>Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
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
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi WHERE transaksi.transaksi_pelanggan=pelanggan.pelanggan_id ORDER BY transaksi.transaksi_id DESC LIMIT 7");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                    <td><?php echo $d['transaksi_tgl']; ?></td>
                    <td><?php echo $d['pelanggan_nama']; ?></td>
                    <td><?php echo $d['transaksi_berat']; ?></td>
                    <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                    <td><?php echo "Rp. " . number_format($d['transaksi_harga']); ?></td>
                    <td>
                        <?php
                        if ($d['transaksi_status'] == "0") {
                            echo "<div class='label label-warning'>PROSES</div>";
                        } elseif ($d['transaksi_status'] == "1") {
                            echo "<div class='label label-info'>DICUCI</div>";
                        } elseif ($d['transaksi_status'] == "2") {
                            echo "<div class='label label-success'>SELESAI</div>";
                        }
                        ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include_once '../admin/footer.php'; ?>
