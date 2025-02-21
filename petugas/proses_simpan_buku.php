<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];


// menginput data ke database
mysqli_query($koneksi, "insert into buku values('','$Judul','$Penulis','$Penerbit','$TahunTerbit')");

// mengalihkan halaman kembali ke index.php
header("location:buku.php?pesan=simpan");
