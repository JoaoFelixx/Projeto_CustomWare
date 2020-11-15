<?php

session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("location:../index.php");
	exit;
}

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Custom Ware</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

					
				

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="inicio.php" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						 <a href="conta.php">Minha Conta</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="inicio.php">Início</a></li>
						<li><a href="plat.html">Personalização</a></li>
						<li><a href="conserto.php">Conserto</a>
						</li>
						</li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="somos.php">Quem Somos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex">
				<img style="width: 100%;" src="img/banner.jpg">
		</div>
	</section>

	
	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.png"></div>
		<div class="featured-box">
			<div class="text-box">
				<h3>Sobre a Custom Ware !</h3>
				<p style="font-size: 20px;"> A Custom Ware busca ajudar essas pessoas, modificando e customizando seus produtos, para fazer cada vez mais este mercado que tem investimento de bilhões. Além para aqueles que possuíram um periférico porem, foi quebrado, nós oferecemos o serviço de conserto desses produtos.
				</p>
				<!--<a href="#" class="read-more">  <img src="img/icons/double-arrow.png" alt="#"/></a> -->
			</div>
		</div>
	</section>
	</div>
	 <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->
		

  <!-- that’s all folks! -->
	<!-- Featured section end-->
	<!-- Hero section end-->
				

	<!-- Talvez usar -->
	<!--<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
						<h3>Top 5 best games in november</h3>
						<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Get this game at a promo price</h3>
						<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Intro section end -->


	
	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.png">
		<a href="img/C40.mp4" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Video Customização de Controle !</h2>
				<p>Mostramos como funciona toda a parte de design dos controles.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	



	<!-- Newsletter section -->
	
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			
			<a href="#" class="footer-logo">
				<img src="./img/logo.png" alt="">
			</a>
			<!--<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul> -->
			
			<div class="copyright"><a href="">Custom Ware</a> 2020 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->
	
					
				
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
