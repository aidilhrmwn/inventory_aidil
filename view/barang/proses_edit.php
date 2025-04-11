<?php

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis_ = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET
    id_barang='$id_barang',
    nama_barang='$nama_barang'
    id_jenis='$id_jenis',
    harga='$harga',
    stok='$stok'");

if ($query) {
    echo "<script>alert('Data Berhasil Diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data Gagal Diedit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>