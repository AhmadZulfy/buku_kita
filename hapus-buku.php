<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id = '$id'";

if($conn->query($query)) {
    header("location: index4.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>