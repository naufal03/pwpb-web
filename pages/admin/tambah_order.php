<?php
include '../../koneksi.php';
$produk = $_POST['produk'];
$owner = $_POST['owner'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:admininput.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 999999999999999) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['image']['tmp_name'], '../../gambar/' . $rand . '_' . $filename);
		mysqli_query($koneksi, "INSERT INTO other VALUES('','$produk','$owner','$desc','$price','$xx')");
		header("location:../other.php?alert=berhasil");
	} else {
		header("location:admininiput.php?alert=gagal_ukuran");
	}
}