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
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Pengaturan Harga Laundry</h4>
            </div>
            <div class="panel-body">
                <?php
                include_once '../koneksi.php';
                $data = mysqli_query($koneksi, "select harga_per_kilo from harga");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <form method="post" action="harga_update.php">
                        <?php
                        if (isset($_GET['pesan']) && $_GET['pesan'] == "berhasil") {
                            echo "<div class='alert alert-info'>Berhasil Update</div>";
                        }
                        ?>
                        <div class="form-group">
                            <label>Harga per kilo</label>
                            <input type="number" class="form-control" name="harga" value="<?php echo $d['harga_per_kilo']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Ubah Harga">
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include_once '../admin/footer.php'; ?>
