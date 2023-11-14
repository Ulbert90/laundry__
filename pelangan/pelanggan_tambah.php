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
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Pelanggan Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama..">
                    </div>
                    <div class="form-group">
                        <label>HP</label>
                        <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp ..">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat ..">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once '../admin/footer.php'; ?>