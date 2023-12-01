<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id =$_POST['id'];
$kategori        = $_POST['nama_kategori'];


//query insert data ke dalam database
$query = "INSERT INTO kategori (id, nama_kategori) VALUES ('$id', '$kategori')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: index2.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>