<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>DATA MAHASISWA </h3>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>

    <h3>EDIT DATA MAHASIWA</h3>
    
    <?php
        include '../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from mahasiswa where mahasiswapk='$id'");
        while ($d= mysqli_fetch_array($data)){
            ?>
            <form action="update.php" method="POST">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="mahasiswapk" value="<?php echo $d['mahasiswapk']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>NPM</td>
                        <td>
                            <input type="text" name="npm" value="<?php echo $d['npm']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="SIMPAN">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
    ?>
</body>
</html>