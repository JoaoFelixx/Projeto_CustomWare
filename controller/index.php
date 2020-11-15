<?php

require_once '../model/usuarios.php';
$u = new Usuario("projeto_login","localhost","root","");

if(isset($_POST['email'])) {
// Limpeza primaria
$em = addslashes($_POST['email']);
$se = addslashes($_POST['senha']);
// Limpeza secudária 
  	$email = filter_var($em, FILTER_SANITIZE_EMAIL);
	$senha = filter_var($se, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	  // Validação para login 
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
 			
 			if(!empty($email) && !empty($senha)) {

 				if ($email == "CustomWareTCC157@hotmail.com" && $senha == "playstation>xbox") {
 						$_SESSION['administrador'] = 1;
 							header("location:../model/admin.php");
 					}

 	   		   //função logar para entrar na página
 					elseif($u->logar($email, $senha)){
 						header("location:../views/inicio.php");
 					}
 						else{
 			 				echo "<div class='msg-erro'>email e/ou estão incorretos</div>";
 						}
 			}
 				else{
 					echo "<div class='msg-erro'>preencha todos os campos !</div>";
 				}
 		}
 		else{
 			echo "<div class='msg-erro'>Email inválido !</div>";
 		}
}
?>