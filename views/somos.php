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
	<title>Custom Ware - Quem Somos !</title>
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
	<section class="page-top-section set-bg" data-setbg="img/cw.png">
		<div class="page-info">
			<h2>Quem Somos !</h2>
			<div class="site-breadcrumb">
				<a href="">Início</a>  /
				<span>Quem Somos !</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->
<!-- Hero section -->

	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.png"></div>
		
		<div style="font-size: 20px;" class="featured-box">
			Somos uma empresa que visa espandir o entretenimento gamer, visto que essa demanda é de muita alta, e as pessoas cada vez mais querem fazer as suas jogadas, suas idéias e seus talentos sejam reconhecidos. Então a Custom Ware pensou em não só  ajudar essas pessoas como também crescer. Consertando periféricos e personalizando-os (sempre com ferramentas de qualidade)
			<div class="text-box">
				<h3>Quem Somos !</h3>
				<p style="font-size: 24px;"> 
				</p>
				<!--<a href="#" class="read-more">  <img src="img/icons/double-arrow.png" alt="#"/></a> -->
			</div>
		</div>
	</section>

	

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
				$u->conectar("projeto_login","localhost","root","");
					$u->Comenta($assunto, $nome, $comentario);	
			}
		else{
			echo 'Preencha todos os campos';
		}


}


?>