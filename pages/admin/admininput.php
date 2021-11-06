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
	<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

	<div class="wrapper row1">
		<header id="header" class="hoc clear">
			<div id="logo" class="fl_left">

				<h1 class="logoname">Hayang<span>D</span>agang</h1>

			</div>
			<nav id="mainav" class="fl_right">
				<!-- ################################################################################################ -->
				<ul class="clear">
					<li><a href="/index.html">Home</a></li>
					<li class="active"><a class="drop" href="#">Category</a>
						<ul>
							<li><a href="/pages/fooddrink.html">Foods & Drinks</a></li>
							<li class="active"><a href="/pages/other.html">Others</a></li>
						</ul>
					</li>
					<li><a href="/pages/about.html">About</a>
					<li><a href="/pages/admin/adminlogin.html">Admin</a></li>

				</ul>
				<!-- ################################################################################################ -->
			</nav>
		</header>
	</div>

	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url(/images/fotojual/bghome.jpg); opacity: 60%;">
		<div id="breadcrumb" class="hoc clear">
			<!-- ################################################################################################ -->
			<ul>
				<h1 class="judultoko">
					Foods & Drinks Input
				</h1>
			</ul>
			<!-- ################################################################################################ -->
		</div>
	</div>
	<!-- ################################################################################################ -->

	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<!-- ################################################################################################ -->
			<h3 style="text-align: center; font-size: 35px;">Halaman Input Foods & Drinks</h3>
			<form method="POST">
				Nama Produk: <input type="text"name="name" size="40%" rows="5">
				Owner: <input type="text"name="name">
				Description: <textarea name="Description" rows="8" cols="40%"></textarea>
				Price: <input type="text"name="name">
				Foto: <input type=file name=foto size=30 accept="image/*"/>
				
					<input type=submit value=kirim name=b1 > 
					<input type=reset value=batal name=b2>
				
			</form>
		</main>
	</div>
	<!-- ################################################################################################ -->



	<!-- ################################################################################################ -->
	<div class="wrapper row5">
		<div id="copyright" class="hoc clear">
			<!-- ################################################################################################ -->

			<p class="fl_right">Kelompok <a title="Free Website Templates">7</a></p>
			<!-- ################################################################################################ -->
		</div>
	</div>
	<!-- ################################################################################################ -->

	<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
	<!-- JAVASCRIPTS -->
	<script src="../layout/scripts/jquery.min.js"></script>
	<script src="../layout/scripts/jquery.backtotop.js"></script>
	<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>