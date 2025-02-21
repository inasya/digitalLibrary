<?php
include 'header.php';
include 'navbar.php';
?>
<?php
include '../koneksi.php';
$BukuID = $_GET['BukuID'];
$data = mysqli_query($koneksi, "select * from buku WHERE BukuID='$BukuID'");
while ($d = mysqli_fetch_array($data)) {
?>
    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="proses_update_buku.php">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" name="BukuID" value="<?php echo $d['BukuID']; ?>">
                        <input type="text" class="form-control" value="<?php echo $d['Judul']; ?> " name="Judul">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" value="<?php echo $d['Penulis']; ?> " name="Penulis">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" value="<?php echo $d['Penerbit']; ?> " name="Penerbit">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" class="form-control" value="<?php echo $d['TahunTerbit']; ?> " name="TahunTerbit">
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