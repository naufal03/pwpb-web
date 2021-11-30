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
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

	<div class="wrapper row1">
		<header id="header" class="hoc clear">
			<div id="logo" class="fl_left">

				<h1 class="logoname">Hayang<span>D</span>agang</h1>

			</div>
			<nav id="mainav" class="fl_right">

				<ul class="clear">
					<li><a href="../../index.php">Home</a></li>
					<li class=""><a class="drop" href="#">Category</a>
						<ul>
							<li><a href="../fooddrink.php">Foods & Drinks</a></li>
							<li class=""><a href="../other.php">Others</a></li>
						</ul>
					</li>
					<li><a href="../../index.php#ctdetails">About</a>
					<li class="active"><a href="/pages/admin/adminlogin.php">Admin</a></li>

				</ul>

			</nav>
		</header>
	</div>


	<div class="bgded overlay" style="background-image:url(../../images/fotojual/IMG-20211024-WA0016.jpg); opacity: 60%;">
		<div id="breadcrumb" class="hoc clear">

			<ul>
				<h1 class="judultoko">
					Foods & Drinks Input
				</h1>
			</ul>

		</div>
	</div>
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->

			<h3 style="text-align: center; font-size: 35px;">Halaman Input Foods & Drinks</h3>
			<form action="tambah_produk.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama Produk</td>
						<td>
							<input type="text" name="produk">
						</td>
					</tr>
					<tr>
						<td>Owner</td>
						<td>
							<input type="text" name="owner">
						</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>
							<input type="text" name="desc">
						</td>
					</tr>
					<tr>
						<td>Price</td>
						<td>
							<input type="number" name="price">
						</td>
					</tr>
					<tr>
						<td>Upload Foto</td>
						<td>
							<input type="file" name="image">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Kirim">
						</td>
					</tr>
				</table>
			</form>

			<!-- ini untk other -->
			<h3 style="text-align: center; font-size: 35px;">Halaman Input Other</h3>
			<form action="tambah_order.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nama Produk</td>
						<td>
							<input type="text" name="produk">
						</td>
					</tr>
					<tr>
						<td>Owner</td>
						<td>
							<input type="text" name="owner">
						</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>
							<input type="text" name="desc">
						</td>
					</tr>
					<tr>
						<td>Price</td>
						<td>
							<input type="number" name="price">
						</td>
					</tr>
					<tr>
						<td>Upload Foto</td>
						<td>
							<input type="file" name="image">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Kirim">
						</td>
					</tr>
				</table>
			</form>
		</main>
	</div>
	<div class="wrapper row5">
		<div id="copyright" class="hoc clear">
			<p class="fl_right">Kelompok <a title="Free Website Templates">7</a></p>
		</div>
	</div>

	<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
	<!-- JAVASCRIPTS -->
	<script src="../layout/scripts/jquery.min.js"></script>
	<script src="../layout/scripts/jquery.backtotop.js"></script>
	<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>