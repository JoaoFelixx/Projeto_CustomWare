<?php

session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("location:../index.php");
	exit;
}

?>
<?php
//LINK PARA A CLASSE PARA PODER ACESSAR AS FUNÇÕES
require_once '../model/perifericos.php';
$p = new perifericos("projeto_login","localhost","root","");
		
			$_SESSION['id_usuario'];
			global $id;
			$id = addslashes($_SESSION['id_usuario']);
			global $saldo;
			$saldo = array();
			$saldo = $p->Saldo($id);
			
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Custom Ware-PlayStation </title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
	<link rel="stylesheet" href="css/style2.css">


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
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/play.jpg">
		<div class="page-info">
			<h2>PlayStation</h2>
			<div class="site-breadcrumb">
				<a href="plat.html">Personalização</a>  /
				<span>PlayStation</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<header>
		<ul>
		  <i class='fa fa-shopping-cart'>
			<span class='counter'></span>
		  </i>
		</ul>
	  </header>
<form action="#" method="POST">
	  <div class='row'>
		<div class='product--blue'>
		  <div class='product_inner'>
			<img src='img/dourado.png' width='300'>
			<p>Controle Ps4 Dourado</p>
			<p>Preço R$ 200,00</p>
			<button  type="submit" name="control" value="1">Comprar</button>
		  </div>
		  <div class='product_overlay'>
			<h2>Adicionado ao Carinho</h2>
			<i class='fa fa-check'></i>
		  </div>
		</div>
		<div class='product--orange'>
		  <div class='product_inner'>
			<img src='img/dg.png' width='300'>
			<p>Controle Ps4 (Days gone)</p>
			<p>Preço R$ 220,00</p>
			<button  type="submit" name="control" value="2">Comprar</button>
		  </div>
		  <div class='product_overlay'>
			<h2>Adicionado ao Carinho</h2>
			<i class='fa fa-check'></i>
		  </div>
		</div>
		<div class='product--red'>
		  <div class='product_inner'>
			<img src='img/egito.png' width='300'>
			<p>Controle Ps4 (Egito)</p>
			<p>Preço R$ 230,00</p>
			<button  type="submit" name="control" value="3">Comprar</button>
		  </div>
		  <div class='product_overlay'>
			<h2>Adicionado ao Carinho</h2>
			<i class='fa fa-check'></i>
		  </div>
		</div>
		<div class='product--green'>
		  <div class='product_inner'>
			<img src='img/FIFA.png' width='300'>
			<p>Controle Ps4 (FIFA)</p>
			<p>Preço R$ 210,00</p>
			<button  type="submit" name="control" value="4">Comprar</button>
		  </div>
		  <div class='product_overlay'>
			<h2>Adicionado ao Carinho</h2>
			<i class='fa fa-check'></i>
		  </div>
		</div>
		<div class='product--yellow'>
		  <div class='product_inner'>
			<img src='img/godwar.png' width='300'>
			<p>Controle Ps4 (God Of War)</p>
			<p>Preço R$ 240,00</p>
			<button  type="submit" name="control" value="5">Comprar</button>
		  </div>
		  <div class='product_overlay'>
			<h2>Adicionado ao Carinho</h2>
		  </div>
			
	  </div>
	</div>
</form>
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src="js/index.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

	</body>
</html>
<?php

if (isset($_POST['control'])) {
	$valor = $_POST['control'];

		
		switch ($valor) {

					case 1:
						$compra = $saldo['dinheiro'];
						$nome = "Controle Ps4 Dourado";
						$preco = 200;
						$troco = $compra - $preco;
					if ($troco <= 0) {
						echo "<script>alert('Sem saldo para efetuar o pagamanto');</script>";
					}
					else{
						$p->Compra_efetuada($id,$troco);
						$p->Personalizar($id,$nome,$preco);
						
					}
						break;
			
					case 2:
						$compra = $saldo['dinheiro'];
						$nome = "Controle Ps4 (Days gone)";
						$preco = 220;
						$troco = $compra - $preco;
					if ($troco <= 0) {
						echo "<script>alert('Sem saldo para efetuar o pagamanto');</script>";
					}
					else{
						$p->Compra_efetuada($id,$troco);
						$p->Personalizar($id,$nome,$preco);
						
					}					
						break;
			
					case 3:
						$compra = $saldo['dinheiro'];
						$nome = "Controle Ps4 (Egito)";
						$preco = 230;
						$troco = $compra - $preco;
					if ($troco <= 0) {
						echo "<script>alert('Sem saldo para efetuar o pagamanto');</script>";
					}
					else{
						$p->Compra_efetuada($id,$troco);
						$p->Personalizar($id,$nome,$preco);
						
					}
						break;
			
					case 4:
						$compra = $saldo['dinheiro'];
						$nome = "Controle Ps4 (FIFA)";
						$preco = 210;
						$troco = $compra - $preco;
					if ($troco <= 0) {
						echo "<script>alert('Sem saldo para efetuar o pagamanto');</script>";
					}
					else{
						$p->Compra_efetuada($id,$troco);
						$p->Personalizar($id,$nome,$preco);
						
					}
						break;
				
					case 5:
						$compra = $saldo['dinheiro'];
						$nome = "Controle Ps4 (God Of War)";
						$preco = 240;
						$troco = $compra - $preco;
					if ($troco <= 0) {
						echo "<script>alert('Sem saldo para efetuar o pagamanto');</script>";
					}
					else{
						$p->Compra_efetuada($id,$troco);
						$p->Personalizar($id,$nome,$preco);
						
					}
						break;
				
					default:
						echo 'Erro de Analise';
						break;
				}		


}
?>