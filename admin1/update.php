<?php

include '../koneksi.php';

$id = $_POST['mahasiswapk'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update mahasiswa set nama = '$nama', npm= '$npm', alamat = '$alamat' where mahasiswapk='$id'");

header("location:index.php");
?>