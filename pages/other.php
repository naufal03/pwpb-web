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
	<title>Others</title>
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
	
	<div class="bgded overlay" style="background-image: url(../images/fotojual/IMG-20211024-WA0014.jpg);opacity: 60%;">
		<div id="breadcrumb" class="hoc clear">
			
			<h1>Others</h1>
			
		</div>
	</div>
	
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			
			<table  border="1" cellspacing="0" cellpadding="10">
			<tr style="text-align: center;">
				<th width="300px">Produk</th>
				<th width="300px">Owner</th>
				<th width="500px">Deskripsi</th>
				<th width="300px">Price</th>
				<th width="500px">Foto</th>
			</tr>
			<?php 
			$data = mysqli_query($koneksi, "select * from other");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['produk']; ?></td>
					<td><?php echo $d['owner']; ?></td>
					<td><?php echo $d['desc']; ?></td>
					<td><?php echo $d['price']; ?></td>
					<td><img src="../gambar/<?php echo $d['image'] ?>" width="35" height="40"></td>
				</tr>
				<?php
			}

			?>
		</table>
			
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