<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if ($cek>0){
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    header("location:admin1/index.php");
}else {
    echo "login gagal";
}

?>