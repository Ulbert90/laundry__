<?php include_once 'header.php'; ?>
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
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "oke") {
                echo "<div class='alert alert- success'>Password telah diganti!</div>";
            }
        }
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Password</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="ganti_password_aksi.php">
                    <div class="form-group">
                        <label>Masukkan Password Baru</label>
                        <input type="password" class="form-control" name="password_baru"
                            placeholder="Masukkan Password Baru Anda ...">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>