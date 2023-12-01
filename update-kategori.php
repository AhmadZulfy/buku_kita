<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id     = $_POST['id'];
$nama_kategori        = $_POST['nama_kategori'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE kategori SET nama_kategori = '$nama_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: index2.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>