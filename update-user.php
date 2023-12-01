<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama        = $_POST['nama'];
$username    = $_POST['username'];
$password       = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama, username, password  = '$nama', '$username', '$password'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: index3.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>