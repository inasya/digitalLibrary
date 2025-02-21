<?php
include 'header.php';
include 'navbar.php';


?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laporan Peminjaman</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="float-right">
        <a href="pinjam_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
        <br>
        <br>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="text-align: center;">Nomor</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT  * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['UserID'] ?></td>
                    <td><?php echo $d['BukuID'] ?></td>
                    <td><?php echo $d['TanggalPeminjaman'] ?></td>
                    <td><?php echo $d['TanggalPengembalian'] ?></td>
                    <td><?php echo $d['StatusPeminjaman'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>
<?php

include 'footer.php';

?>
<script type="text/javascript">
    $(document).ready(function(e) {
        $("#tglawal").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#tglakhir").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>