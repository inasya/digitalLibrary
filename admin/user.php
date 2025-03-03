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
            <a href="tambah_user.php" class="btn btn-primary btn-sm mt-2">Tambah user</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from user");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <?php
                        if ($d['level'] == '3') {
                        } else { ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['Username'] ?></td>
                                <td><?php echo $d['Email']; ?></td>
                                <td><?php echo $d['NamaLengkap'] ?></td>
                                <td><?php echo $d['Alamat']; ?></td>
                                <td>
                                    <?php if ($d['level'] == '1') { ?>
                                        Admin
                                    <?php  } else { ?>
                                        Petugas
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($_SESSION['level'] == $d['level']) { ?>
                                        <a href="edit_user.php?UserID=<?php echo $d['UserID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                    <?php  } else { ?>
                                        <a href="edit_user.php?UserID=<?php echo $d['UserID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                        <a href="proses_hapus_user.php?UserID=<?php echo $d['UserID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>

                                    <?php } ?>
                                </td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>