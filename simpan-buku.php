<?php

// include koneksi database
include('koneksi.php');

try {
    // get data dari form
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];
    $kategori_id = $_POST['kategori_id'];
    $harga = $_POST['harga'];

    // prepare statement for insert query
    $query = $conn ->prepare("INSERT INTO buku (judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES (:judul, :penerbit, :pengarang, :tahun, :kategori_id, :harga)");

    // bind parameters
    $query->bindParam(':judul', $judul);
    $query->bindParam(':penerbit', $penerbit);
    $query->bindParam(':pengarang', $pengarang);
    $query->bindParam(':tahun', $tahun);
    $query->bindParam(':kategori_id', $kategori_id);
    $query->bindParam(':harga', $harga);

    // execute the query
    if ($query->execute()) {
        // redirect ke halaman index.php 
        header("location: index4.php");
    } else {
        // pesan error gagal insert data
        echo "Data Gagal Disimpan!";
    }
} catch (PDOException $e) {
    // handle database connection errors
    echo "Error: " . $e->getMessage();
}

?>
