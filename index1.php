<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Membuat Login dengan PHP</h2>

<?php
 if(isset($_GET['pesan'])){
     if($_GET['pesan']=="gagal") {
         echo "login gagal! username dan password salah!";
     }else if($_GET['pesan']=="logout"){
         echo "anda telah berhasil logout";
     } else if($_GET['pesan']=="belum_login"){
         echo "Anda Harus Login untuk mengakses halaman admin";
     }
 }

?>

<br>
<br>

<form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" name="username" >
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="password" name="password" >
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" value="login">
            </td>
        </tr>
    </table>

</form>
</body>
</html>