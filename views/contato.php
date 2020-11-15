<?php

session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("location:../index.php");
	exit;
}

?>

<?php
require_once '../model/usuarios.php';
	$u = new Usuario("projeto_login","localhost","root","");

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Custom Ware - Contato</title>
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
						<li><a href="conserto.php">Conserto</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="somos.php">Quem Somos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Contato</h2>
			<div class="site-breadcrumb">
				<a href="">Início</a>  /
				<span>Contato</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29157.48755762499!2d-46.441261417858954!3d-24.00686475565324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c2b9117f9e7%3A0xde28918ce195e82e!2sETEC%20PRAIA%20GRANDE!5e0!3m2!1spt-BR!2sbr!4v1582036091413!5m2!1spt-BR!2sbr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form action="#" method="POST" class="contact-form">
						<input type="text" name="assunto" placeholder="Assunto" maxlength="50">
						<input type="text" name="nome" placeholder="Seu nome" maxlength="50">
						<textarea name="comenta" placeholder="Comentário" maxlength="200"></textarea>
						<button class="site-btn">Enviar Comentário<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Comente !!!</h3>
					<p>Caso tenha sugestões de como podemos melhorar sua visita ao nosso site, faça um comentário para possiveis atualizações em nosso sistema </p>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
						<div class="ci-text">Endereço: Rua Guadalajara, 941 - Guilhermina, Praia Grande - SP, 11702-210</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
						<div class="ci-text">+546 990221 123</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
						<div class="ci-text">customware@gmail.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->


	


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
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>-->
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
<?php

if (isset($_POST['nome'])) {

	$assunto = addslashes($_POST['assunto']);
	$nome = addslashes($_POST['nome']);
	$comentario = addslashes($_POST['comenta']);

		if (!empty($assunto) && !empty($nome) && !empty($comentario)) {
			$u->Comenta($assunto, $nome, $comentario);	
		}
		
		else{
			echo 'Preencha todos os campos';
		}

}

?>