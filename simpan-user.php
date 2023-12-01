<?php
// include koneksi database
include('koneksi.php');

// get data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// query insert data ke dalam database
$query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($conn->query($query)) {
    // redirect ke halaman index.php 
    header("location: index3.php");
} else {
    // pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
?>
