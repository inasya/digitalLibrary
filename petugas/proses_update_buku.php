<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];


//Update data
mysqli_query($koneksi, "update buku set Judul='$Judul',Penulis = '$Penulis',Penerbit = '$Penerbit',TahunTerbit = '$TahunTerbit' where BukuID =$BukuID");


// mengalihkan halaman kembali ke buku.php
header("location:buku.php?pesan=update");
