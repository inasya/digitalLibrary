<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$KategoriID = $_GET['KategoriID'];


// menghapus data dari database
mysqli_query($koneksi, "delete from kategoribuku where KategoriID='$KategoriID'");

// mengalihkan halaman kembali ke kategori.php
header("location:kategori.php?pesan=hapus");
