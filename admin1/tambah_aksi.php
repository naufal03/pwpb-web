<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];


$rand = rand();
$ekstensi =  array('png','PNG','jpg','jpeg','gif');
$filename = $_FILES['images']['name'];
$ukuran = $_FILES['images']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

    if($ukuran <1044070){
        $xx = $rand.''.$filename;
        move_uploaded_file($_FILES['images']['tmp_name'],'gambar/'.$rand.'_'.$filename);
        mysqli_query($koneksi,"insert into mahasiswa values ('','$nama','$npm','$alamat','$xx')");
        header("location:index.php?alert=berhasil");

    }else {
        header("location:index.php?alert=gagal_ukuran");
    }
?>