<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];



// menginput data ke database
mysqli_query($koneksi, "insert into kategoribuku_relasi values('','$BukuID','$KategoriID')");

// mengalihkan halaman kembali ke index.php
header("location:koleksi.php?pesan=simpan");
