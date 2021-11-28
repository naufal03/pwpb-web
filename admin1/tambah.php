<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form action="tambah_aksi.php" method="POST" enctype="multipart/form-data" >
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>
                    <input type="text" name="npm">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <input type="file" name="image" id="">
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
</body>
</html>