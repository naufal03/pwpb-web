<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = $mysqli->query("select * from users where username='$username' and password='$password'");

echo "test ",$result->num_rows;



?>