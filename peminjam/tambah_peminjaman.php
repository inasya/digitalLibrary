<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form method="post" action="proses_simpan_peminjaman.php">
                <div class="form-group">
                    <label>Pilih Buku</label>
                    <select class="form-control mt-2" name="BukuID">
                        <option>Silahkan Pilih</option>
                        <?php
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi, "select * from buku");
                        while ($d_buku = mysqli_fetch_array($data)) { ?>
                            <option value="<?php echo $d_buku['BukuID']; ?>"><?php echo $d_buku['Judul']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <select class="form-control" name="TanggalPeminjaman">
                        <option>Silahkan Pilih</option>
                        <?php
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi, "select * from kategoribuku");
                        while ($d_kategoribuku = mysqli_fetch_array($data)) { ?>
                            <option value="<?php echo $d_kategoribuku['KategoriID']; ?>"><?php echo $d_kategoribuku['NamaKategori']; ?></option>
                        <?php } ?>
                    </select>
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