<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h4>CRUD DATA </h4>

    <a href="tambah.php">++ TAMBAH MAHASISWA</a>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
            include '../koneksi.php';

            $no = 1;
            $data = mysqli_query($koneksi,"select * from mahasiswa");
            while ($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['npm']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $d['mahasiswapk']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $d['mahasiswapk']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
            }

        ?>




    </table>

    <div class="card mb-4">
    <div class="card-header">
        <button type="button" id="btn-tambah-kategori" class="btn btn-primary"><span class="text"><i class="fas fa-car fa-sm"></i> Tambah Kategori</span></button>
    </div>
    <div class="card-body">
        <div class="card-columns">
            <?php         
            // include database
            include '../koneksi.php';
            // perintah sql untuk menampilkan daftar kategori
            $sql="select * from mahasiswa";
            $hasil=mysqli_query($koneksi,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
            ?>
            <div class="row">
                <div class="col-md-6">
                <div class="card">
                    <a href="index.php?halaman=artikel&kategori=<?php echo $data['id_kategori'];?>"><img class="card-img-top" src="artikel/gambar_kategori/<?php echo $data['gambar_kategori'];?>" alt="Card image cap"></a>
                    <div class="col-md-6">
                        <div class="card-body text-center">
                             <?php echo $data['alamat'] ?>   
                            <!-- <a href="index.php?halaman=artikel&kategori=<?php echo $data['id_kategori'];?>"><h5 class="card-title"><?php echo $data['nama'];?></h5></a> -->
                            
                            <!-- <a href="#" class="hapus_kategori" id_kategori="<?php echo $data['id_kategori']; ?>" gambar="<?php echo $data['gambar_kategori']; ?>"><h6 class="text-danger">Hapus</h6></a> -->
                 
                        </div>
                    

                    </div>    
                </div>
            </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

</body>
</html>