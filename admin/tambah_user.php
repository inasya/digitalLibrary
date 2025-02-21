<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form method="post" action="proses_simpan_user.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="Password">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="Email">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="NamaLengkap">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="Alamat">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>

                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>