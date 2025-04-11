<?php 

$id_jenis=$_GET['id_jenis'];

include "../../config/koneksi.php";

$query = mysqli_query($conn,"DELETE FROM jenis WHERE id_jenis = '$id_jenis'");

//javascript

if($query){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Data tidak berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}



?>