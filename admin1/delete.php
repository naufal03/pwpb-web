<?php
include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from mahasiswa where mahasiswapk='$id'");

header("location:index.php");

?>