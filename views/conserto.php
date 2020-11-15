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

?>
<!DOCTYPE html>
<html>
<head>
<link href="img/favicon.ico" rel="shortcut icon"/>
<meta charset="UTF-8">	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<title>Custom Ware - Conserto</title>

	<style >
		body {
    background: url(img/12.png) no-repeat center top fixed;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
	background-size: cover;
	
}
		h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: white;
	font-weight: 500;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}
			
		
	</style>
</head>
<body>
	<!-- Header section -->
<header class="header-section">
		<div class="">
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
<div class="container">


<br><br><br>




<font color="white">
<center>
<b><h2>Mouse/Teclado</h2>
<form action="#" method="POST">
Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model"  placeholder="Modelo">
<br>
Problema apresentado:<input type="text" name="proble" placeholder="Problema apresentado">
<br>
<center><input type="submit" name="" value="Enviar"></center>

</form>












<b><h2>Playstation</h2>
<form action="#" method="POST">
Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model"  placeholder="Modelo">
<br>
Problema apresentado:<input type="text" name="proble" placeholder="Problema apresentado">
<br>
<center><input type="submit" name="" value="Enviar"></center>

</form>








<b><h2>Xbox</h2>
<form action="#" method="POST">
Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model"  placeholder="Modelo">
<br>
Problema apresentado:<input type="text" name="proble" placeholder="Problema apresentado">
<br>
<center><input type="submit" name="" value="Enviar"></center>

</form>






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

if (isset($_POST['model'])) {

	$id = $_SESSION['id_usuario'];
	$model = addslashes($_POST['model']);
	$problem = addslashes($_POST['proble']);
	
	if (!empty($id) && !empty($model) && !empty($problem)){
		$p->Conserto($id,$model,$problem);
		header("location:lugarconserto.php");	
	}
	else{
		echo 'Preencha todos os campos';
	}
	
}




?>
</center>
</div></font>
	</header>