<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$UserID = $_GET['UserID'];


// menghapus data dari database
mysqli_query($koneksi, "delete from user where UserID='$UserID'");

// mengalihkan halaman kembali ke kategori.php
header("location:user.php?pesan=hapus");
