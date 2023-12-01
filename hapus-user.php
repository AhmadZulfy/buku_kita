<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = '$id'";

if($conn->query($query)) {
    header("location: index3.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>