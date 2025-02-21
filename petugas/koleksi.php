<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
    <div class="card">
        <div class="card-body">

            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "simpan") {
                    echo "<div class='alert alert-success'>Data berhasil disimpan !</div>";
                }
            }
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "update") {
                    echo "<div class='alert alert-success'>Data berhasil di update !!!</div>";
                }
            }
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "hapus") {
                    echo "<div class='alert alert-success'>Data berhasil diHapus !!!</div>";
                }
            }
            ?>
            <a href="tambah_koleksi.php" class="btn btn-primary btn-sm mt-2">Tambah Koleksi</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA BUKU</th>
                        <th>KATEGORI BUKU</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from kategoribuku_relasi INNER JOIN buku ON 
                    kategoribuku_relasi.BukuID=buku.BukuID INNER JOIN kategoribuku ON kategoribuku_relasi.KategoriID=kategoribuku.KategoriID");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['Judul'] ?></td>
                            <td><?php echo $d['NamaKategori'] ?></td>


                            <td>

                                <a href="edit_koleksi.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                <a href="proses_hapus_koleksi.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>