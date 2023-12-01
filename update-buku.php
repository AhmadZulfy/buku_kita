<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$judul           = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$pengarang       = $_POST['pengarang'];
$tahun       = $_POST['tahun'];
$kategori_id       = $_POST['kategori_id'];
$harga       = $_POST['harga'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET judul, penerbit, pengarang, tahun, kategori_id, harga  = '$judul', '$penerbit', '$pengarang', '$tahun', '$kategori_id', '$harga'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>