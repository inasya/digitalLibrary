<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$KategoriBukuID = $_POST['KategoriBukuID'];
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];


//Update data
mysqli_query($koneksi, "update kategoribuku_relasi set BukuID='$BukuID', KategoriID ='$KategoriID' where KategoriBukuID =$KategoriBukuID");


// mengalihkan halaman kembali ke kategori.php
header("location:koleksi.php?pesan=update");
