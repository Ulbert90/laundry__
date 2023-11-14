<?php include_once '../admin/header.php'; ?>
<style>
body {
    background: url('https://img.freepik.com/free-photo/3d-background-with-white-cubes_23-2150472998.jpg?w=900&t=st=1699410796~exp=1699411396~hmac=c31decb44cc4364a1222c2517b466b0f17436eb782f59a9fcece47ca0c06890d') no-repeat center center fixed;
    background-size: cover;
    flex-direction: column;
    min-height: 100vh;
}
</style>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan Mon€y laun</h4>
        </div>
        <div class="panel-body">
            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right"><i class="fa-solid fa-plus"></i>Tambah</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                include_once '../koneksi.php';
                $data = mysqli_query($koneksi, "select * from pelanggan");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['pelanggan_hp']; ?></td>
                        <td><?php echo $d['pelanggan_alamat']; ?></td>
                        <!-- Corrected the index name in the line above -->
                        <td>
                            <a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
                            <a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i>  Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include_once '../admin/footer.php';
?>