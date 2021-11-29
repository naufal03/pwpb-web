<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
	<title>Foods & Drinks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

	<div class="wrapper row1">
		<header id="header" class="hoc clear">
			<div id="logo" class="fl_left">

				<h1 class="logoname">Hayang<span>D</span>agang</h1>

			</div>
			<nav id="mainav" class="fl_right">

				<ul class="clear">
					<li><a href="../index.php">Home</a></li>
					<li class="active"><a class="drop" href="#">Category</a>
						<ul>
							<li class="active"><a href="fooddrink.php">Foods & Drinks</a></li>
							<li><a href="other.php">Others</a></li>
						</ul>
					</li>
					<li><a href="../index.php#ctdetails">About</a></li>
					<li><a href="../adminlogin.php">Admin</a></li>

				</ul>

			</nav>
		</header>
	</div>

	<div class="bgdedoverlay1" style="background-image: url(../images/fotojual/IMG-20211024-WA0015.jpg); opacity: 50%;">
		<div id="breadcrumb" class="hoc clear">

			<h1 class="food">Foods & Drinks</h1>

		</div>
	</div>

	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM admininput ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['produkname']; ?></td>
          <td><?php echo substr($row['owner'], 0, 20); ?>...</td>
          <td><?php echo substr($row['desc'], 0, 20); ?>...</td>
          <td><?php echo substr($row['price'], 0, 20); ?>...</td>
          <td style="text-align: center;"><img src="../gambar/<?php echo $row['image']; ?>" style="width: 120px;"></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>

			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>

	<div class="wrapper row2">
		<section id="ctdetails" class="hoc container clear">

		</section>
	</div>

	<div class="wrapper row5">
		<div id="copyright" class="hoc clear">

			<p class="fl_right">Kelompok <a target="_blank" title="Free Website Templates">7</a></p>

		</div>
	</div>

	<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
	<!-- JAVASCRIPTS -->
	<script src="../layout/scripts/jquery.min.js"></script>
	<script src="../layout/scripts/jquery.backtotop.js"></script>
	<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>