<?php include '../koneksi.php' ?>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

	<div class="bgdedoverlay1">
		<div class="overlay1">
			<p>Foods & Drinks</p>
		</div>
	</div>

	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<table border="1" width="600px" cellpadding>
				<?php
				$data = mysqli_query($koneksi, "select * from input");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td rowspan="5" width="400px" ><img src="../gambar/<?php echo $d['image'] ?>"></td>
						<td colspan="2" style="text-align: center;"><b>Deskripsi</b></td>
					</tr>
					<tr>
						<td>Produk :</td>
						<td><?php echo $d['produk']; ?></td>
					</tr>
					<tr>
						<td>Owner :</td>
						<td><?php echo $d['owner']; ?></td>
					</tr>
					<tr>
						<td>Price :</td>
						<td><?php echo $d['price']; ?></td>
					</tr>
					<tr>
						<td>Kontak :</td>
						<td><?php echo $d['kontak']; ?></td>
					</tr>
				<?php
				}

				?>
			</table>
			
	<div class="clear"></div>

	</div>
	<!-- / main body -->

	
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