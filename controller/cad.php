<?php

require_once '../model/usuarios.php';
	$u = new Usuario("projeto_login","localhost","root","");

if(isset($_POST['nome'])) {

	$nm = addslashes($_POST['nome']);
	$em = addslashes($_POST['email']);
	$se = addslashes($_POST['senha']);
	$cfS = addslashes($_POST['confSenha']);
	$dinheiro = 0;

		$nome = filter_var($nm, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$email = filter_var($em, FILTER_SANITIZE_EMAIL);
  		$senha = filter_var($se, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	      
		$confirmarSenha = filter_var($cfS, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	//verificar se todas as informações estão preenchidas.
	if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){
	  //nome do database, nome do local de acesso, o usuario ea senha.
	   	if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		 	if ($senha == $confirmarSenha) {
		 		if($u->cadastrar($nome,$email,$senha,$dinheiro)){
		 			session_start();
		 			$_SESSION['permissao'] = "pode passar";
		 			header("location:../model/inicio.php");
		 		}
		 		else{
		 			echo "<div class='msg-erro'>Email já cadastrado !</div>";
		 		}
		 	}
		 	else{
		 		echo "<div class='msg-erro'>Senha e confirmar senha não conrespondem !</div>"; 
		 	}
		}
		else{
			echo "<div class='msg-erro'>Email inválido !</div>";
		}
	}
	else{
		echo "<div class='msg-erro'>Preencha todos os campos !</div>";
		}
}

?> 
