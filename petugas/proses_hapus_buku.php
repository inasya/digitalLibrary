<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$BukuID = $_GET['BukuID'];


// menghapus data dari database
mysqli_query($koneksi, "delete from buku where BukuID='$BukuID'");

// mengalihkan halaman kembali ke kategori.php
header("location:buku.php?pesan=hapus");
