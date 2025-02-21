<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];


//Update data
mysqli_query($koneksi, "update kategoribuku set NamaKategori='$NamaKategori' where KategoriID =$KategoriID");


// mengalihkan halaman kembali ke kategori.php
header("location:kategori.php?pesan=update");
