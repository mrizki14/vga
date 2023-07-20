<?php 

include 'env.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];
$query = mysqli_query($conn, "UPDATE siswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',asal_sekolah='$asal_sekolah' WHERE id=$id");

if($query){
    $message = "siswa berhasil diupdate";
    }else{
     $message = "Data gagal diinput. Silakan coba lagi input.";
    }
 $message = urlencode($message);
 header("location:index.php?message=$message");