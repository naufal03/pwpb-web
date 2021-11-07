<?php
include '../../koneksi.php';
$produkname = $_POST['produkname'];
$owner = $_POST['owner'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename =$_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:admininput.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 100000000000000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO user VALUES('','$produkname','$owner','$desc','$price','$xx')");
		header("location:../fooddrink.php?alert=berhasil");
	}else{
		header("location:admininiput.php?alert=gagak_ukuran");
	}
}
