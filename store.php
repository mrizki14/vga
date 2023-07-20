<?php 

include 'env.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];
$query = mysqli_query($conn, "INSERT INTO siswa(nama,alamat,jenis_kelamin,agama,asal_sekolah) VALUES('$nama','$alamat','$jenis_kelamin','$agama','$asal_sekolah')");

if($query){
    $message = "siswa berhasil ditambahkan";
    }else{
     $message = "Data gagal diinput. Silakan coba lagi input.";
    }
 $message = urlencode($message);
 header("location:index.php?message=$message");