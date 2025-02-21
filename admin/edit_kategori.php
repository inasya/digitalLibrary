<?php
include 'header.php';
include 'navbar.php';
?>
<?php
include '../koneksi.php';
$KategoriID = $_GET['KategoriID'];
$data = mysqli_query($koneksi, "select * from kategoribuku WHERE KategoriID='$KategoriID'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="proses_update_kategori.php">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="hidden" name="KategoriID" value="<?php echo $d['KategoriID']; ?>">
                        <input type="text" class="form-control" value="<?php echo $d['NamaKategori']; ?> " name="NamaKategori">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Update</button>

                    </div>
                </form>



            </div>
        </div>
    </div>
<?php } ?>
<?php
include 'footer.php';
?>