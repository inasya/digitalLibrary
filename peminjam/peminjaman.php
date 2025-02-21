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
            <a href="tambah_peminjaman.php" class="btn btn-primary btn-sm mt-2">Tambah Peminjaman</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>USER ID</th>
                        <th>BUKU ID</th>
                        <th>TANGGAL PEMINJAMAN</th>
                        <th>TANGGAL PENGEMBALIAN</th>
                        <th>STATUS PEMINJAMAN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from peminjaman INNER JOIN user ON peminjaman.UserID=user.UserID INNER JOIN buku ON peminjaman.BukuID=buku.BukuID");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['UserID'] ?></td>
                            <td><?php echo $d['BukuID'] ?></td>
                            <td><?php echo $d['TanggalPeminjaman'] ?></td>
                            <td><?php echo $d['TanggalPengembalian'] ?></td>
                            <td><?php echo $d['StatusPeminjaman'] ?></td>


                            <td>

                                <a href="edit_pinjam.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                <a href="proses_hapus_pinjam.php?KategoriBukuID=<?php echo $d['KategoriBukuID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>

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