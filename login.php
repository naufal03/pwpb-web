<?php
include 'koneksi.php';
$username= $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from user where username= '$username' and password= '$password'");
$cek = mysqli_num_rows($data);
if ($cek>0){
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
	header("location:pages/admin/admininput.php");
} else{
	header("location:adminlogin.php");
}
?>