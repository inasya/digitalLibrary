<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];

//Update data
mysqli_query($koneksi, "insert into user values('','$Username','$Password','$Email','$NamaLengkap','$Alamat','2')");


// mengalihkan halaman kembali ke buku.php
header("location:user.php?pesan=simpan");
