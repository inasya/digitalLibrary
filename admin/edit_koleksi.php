<?php
include 'header.php';
include 'navbar.php';
?>
<?php
include '../koneksi.php';
$KategoriBukuID = $_GET['KategoriBukuID'];
$data = mysqli_query($koneksi, "select * from kategoribuku_relasi WHERE KategoriBukuID='$KategoriBukuID'");
while ($d_koleksi = mysqli_fetch_array($data)) {
?>
    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form method="post" action="proses_update_koleksi.php">
                    <div class="form-group">
                        <label>Pilih Buku</label>
                        <input type="hidden" name="KategoriBukuID" value=" <?php echo $d_koleksi['KategoriBukuID']; ?>">
                        <select class="form-control mt-2" name="BukuID">
                            <option>Silahkan Pilih</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "select * from buku");
                            while ($d_buku = mysqli_fetch_array($data)) { ?>
                                <option value="<?php echo $d_buku['BukuID']; ?>" <?php if ($d_buku['BukuID'] == $d_koleksi['BukuID']) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>><?php echo $d_buku['Judul']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Kategori</label>
                        <select class="form-control mt-2" name="KategoriID">
                            <option>Silahkan Pilih</option>
                            <?php
                            include '../koneksi.php';
                            $data = mysqli_query($koneksi, "select * from kategoribuku");
                            while ($d_kategoribuku = mysqli_fetch_array($data)) { ?>
                                <option value="<?php echo $d_kategoribuku['KategoriID']; ?>" <?php if ($d_kategoribuku['KategoriID'] == $d_koleksi['KategoriID']) {
                                                                                                    echo "selected";
                                                                                                } ?>><?php echo $d_kategoribuku['NamaKategori']; ?></option>
                            <?php } ?>
                        </select>
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