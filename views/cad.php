<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Custom Ware - Cadastre-se</title>
	<!-- Stylesheets -->
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	
<style>
	
	*{
		margin: 0px;
    	background-image: url(img/wal.jpg);
   		color: white;
	}
	input{
		height: 55px;
		width: 325px;
		margin: 10px; 
		position: relative;
		left: 15px;
		border-radius:30px;
		border: 1px solid black;
		font-size: 16pt;
		padding: 10px 20px;
		background: rgb(255,255,255,0.01);
		

	}
	#corpo-form{
		width: 420px;
		padding: 4px;
		border: 2px solid black;
		position:flex;
		top: 50px;
		left: 30%;
	}
	a{
		color:white;
		text-decoration: none;
		display: block;
		font-size: 18px;
	}
	input[type=submit]{
		background:red;
		border:none;
		color:white;
		position: relative;
		left: 17px;
		cursor: pointer;
	}
div.msg-sucesso{
	width: 400px;
	margin: 10px auto;
	padding:10px;
	color: rgba(253, 254, 254);
	border: 1px solid  rgba(50, 243, 15);;
}
div.msg-erro{
	width: 400px;
	margin: 80px auto;
	padding:10px;
	color: rgba(253, 254, 254);
	border: 1px solid rgb(165,42,42);
} 

</style>
</head>
<body>

<center>
<div id="corpo-form">
<form action="../controller/cad.php" method="POST">
	<center><h1>Cadastre-se</h1></center>
	<!-- PEGANDO OS VALORES PARA O BANCO DE DADOS-->
	<input type="text" name="nome" placeholder="Nome completo" maxlength="40">
	<input type="email" name="email" placeholder="Email" maxlength="50">
	<input type="password" name="senha" placeholder="Senha" maxlength="32">
	<input type="password" name="confSenha" placeholder="Confirme a senha">
	<br>
	<input type="submit" placeholder="Cadastrar">
	<br>
</form>
</div>
</center>
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