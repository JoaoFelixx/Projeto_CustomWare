<!DOCTYPE ht0ml>
<html lang="pt-br">
<head>
<title>Custom Ware - Login</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="views/css/bootstrap.min.css"/>
	<link href="views/img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<style>
* {
	margin:0px;
    background-image: url(views/img/wal.jpg);
   	color: white;
}

input {
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
	
#corpo-form {
	margin-top: 100px;
	width: 420px;
	padding: 4px;
	border: 2px solid black;
	position:flex;
	top: 50px;
	left: 34%;
}

a {
	color:white;
	text-decoration: none;
	display: block;
	font-size: 18px;
}
	
input[type=submit] {
	background:red;
	border:none;
	color:white;
	position: relative;
	left: 17px;
	cursor: pointer;

}
div.msg-sucesso {
	width: 420px;
	padding: 4px;
	border: 2px solid green;
	position:flex;
	top: 60px;
	left: 34%;
		
}
	
div.msg-erro {
	width: 400px;
	margin: 10px auto;
	padding:10px;
	position: flex;
	top: 50px;
	left: -35px;
	text-align: center;
	background-color: rgba(250,128,114,.3);
	border: 1px solid rgb(165,42,42);
} 
</style>
</head>
<body>
<center>
		
<div id="corpo-form">	
	<form  action="controller/index.php" method="POST">
		<center><h1>Entrar</h1></center>
		  <!-- PEGANDO OS VALORES PARA ENTRAR NA AREA PPRIVADA -->
			<input type="email" placeholder="Usuario" name="email" value="">
			<input type="password" placeholder="Senha" name="senha">
			<input type="submit" placeholder="Acessar" name="">
			<a href="views/cad.php">Ainda não é cadastrado ?<strong>  Cadastre-se</strong></a>
	</form>
</div>

</center>
</body>
</html>