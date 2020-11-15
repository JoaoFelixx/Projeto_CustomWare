<?php

session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("location:../index.php");
	exit;
}

?>
<?php
//LINK PARA A CLASSE PARA PODER ACESSAR AS FUNÇÕES
require_once '../model/conta.php';
$p = new Conta("projeto_login","localhost","root","");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="img/favicon.ico" rel="shortcut icon"/>

<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<title>Custom Ware - Minha conta</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
*{
	font-size: 20px;
	font-family: arial;
			
}

}

}
</style>
</head>
<body>

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
		<br><br><br>
<div class="container">
<?php


$_SESSION['id_usuario'];
$id = addslashes($_SESSION['id_usuario']);

$dados = $p->MeusDados($id);
$conserto = $p->Meu_conserto($id);
$personaliza = $p->Minha_personalizacao($id);
	
	for ($i = 0; $i < count($dados); $i++){
		echo "Minha conta é: ".$dados[$i]['email'];
		echo "<br>";
		echo 'Meu saldo: R$ '.number_format($dados[$i]['dinheiro'],2,",",".");
		echo '<br>';
		echo '<hr>';
	}
if (count($conserto) > 0) {
 	echo '<h1>Consertos</h1>';
	for ($i = 0; $i < count($conserto); $i++){
		echo "<b><br><br>Modelo: </b> ".$conserto[$i]['modelPerif'];
		echo "<br>";
		echo "<b>Problema apresentado: </b> ".$conserto[$i]['problePerif'];
		echo "<br>";
		if (!empty($conserto[$i]['valorCons'])) {
					echo "<b>R$ </b>".number_format($conserto[$i]['valorCons'],2,",",".");
					echo "<hr>";
		}
		else{
			echo 'Espere por um tempo de 3 dias úteis após a entrega do periférico para receber o preço do conserto';
		}

	}
}
else{
	echo 'Nenhum conserto registrado';
	echo "<hr>";
}
if (count($personaliza) > 0) {
 		echo "<h1>Costumizações</h1>";
	for ($i = 0; $i < count($personaliza); $i++){
		
		echo "<b>Periférico: </b>".$personaliza[$i]['nomeCust'];
		echo "<br>";
		echo "<b>R$ </b>".number_format($personaliza[$i]['valorCust'],2,",",".");
		echo "<br>";
	}
}

else{
	echo '<br><br>Nenhuma personalização registrada<br><br>';
}
?>
<br><br>
<a href="sair.php">Sair da conta</a>
</div>
</header>
	<!-- Header section end -->

	<div>

	</div>
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