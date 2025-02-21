<?php
include 'header.php';
include 'navbar.php';
?>
<?php
$UserID = $_GET['UserID'];
include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from user WHERE UserID='$UserID'");
while ($d = mysqli_fetch_array($data)) { ?>
    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="proses_update_user.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="hidden" name="UserID" value="<?php echo $d['UserID']; ?>">
                        <input type="text" class="form-control" name="Username" value="<?php echo $d['Username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="Password">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="Email" value="<?php echo $d['Email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="NamaLengkap" value="<?php echo $d['NamaLengkap']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="Alamat" value="<?php echo $d['Alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<?php
include 'footer.php';
?>