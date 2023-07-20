<?php

include 'env.php';
 

$id = $_GET['id'];
$agama = $_GET['agama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
 

$query = mysqli_query($conn, "DELETE FROM siswa WHERE id=$id");
 

if($query){
    $message = "siswa berhasil dihapus";
    }else{
     $message = "Data gagal dihapus. Silakan coba lagi.";
    }
 $message = urlencode($message);
 header("location:index.php?message=$message");
?>