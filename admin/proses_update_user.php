<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];

if (!$Password) {
    mysqli_query($koneksi, "update user set Username='$Username',Email = '$Email',NamaLengkap = '$NamaLengkap',Alamat = '$Alamat' where UserID =$UserID");
    header("location:user.php?pesan=update");
} else {
    mysqli_query($koneksi, "update user set Username='$Username',Password = '$Password',Email = '$Email',NamaLengkap = '$NamaLengkap',Alamat = '$Alamat' where UserID =$UserID");
    header("location:user.php?pesan=update");
}
