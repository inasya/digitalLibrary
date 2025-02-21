<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$KategoriBukuID = $_GET['KategoriBukuID'];


// menghapus data dari database
mysqli_query($koneksi, "delete from kategoribuku_relasi where KategoriBukuID='$KategoriBukuID'");

// mengalihkan halaman kembali ke kategori.php
header("location:koleksi.php?pesan=hapus");
