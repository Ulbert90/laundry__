<?php include_once '../admin/header.php'; ?>
<style>
    body {
        background: url('https://img.freepik.com/free-photo/3d-background-with-white-cubes_23-2150472998.jpg?w=900&t=st=1699410796~exp=1699411396~hmac=c31decb44cc4364a1222c2517b466b0f17436eb782f59a9fcece47ca0c06890d') no-repeat center center fixed;
        background-size: cover;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .panel {
        border: 1px solid #ccc;
        padding: 15px;
        width: 100%;
        border-radius: 5px;

    }
</style>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi Mon€y laun</h4>
        </div>
        <div class="panel-body">
            <a href="transaksi_tambah.php" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>
            <br />
            <br />
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
                    <th width="20%">OPSI</th>
                </tr>
                <?php
                include_once '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi WHERE transaksi_pelanggan=pelanggan_id ORDER by transaksi_id desc");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>INVOICE-
                            <?php echo $d['transaksi_id']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_tgl']; ?>
                        </td>
                        <td>
                            <?php echo $d['pelanggan_nama']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_berat']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_tgl_selesai']; ?>
                        </td>
                        <td>
                            <?php echo "Rp. " . number_format($d['transaksi_harga']); ?>
                        </td>
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
                        <td>
                            <a href="transaksi_invoice.php?id=<?php echo $d['transaksi_id']; ?>" target="_blank"
                                class="btn btn-sm btn-warning"><i class="fa-solid fa-file-invoice"></i>  Invoice</a>
                            <a href="transaksi_edit.php?id=<?php echo $d['transaksi_id']; ?>"
                                class="btn btn-sm btn-info"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
                            <a href="transaksi_hapus.php?id=<?php echo $d['transaksi_id']; ?>"
                                class="btn btn-sm btn-danger"><i class="fa-solid fa-xmark"></i>  Cancle</a>
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