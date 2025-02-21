<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$NamaKategori = $_POST['NamaKategori'];


// menginput data ke database
mysqli_query($koneksi, "insert into kategoribuku values('','$NamaKategori')");

// mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=simpan");
