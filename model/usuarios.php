<?php

class Usuario{

	private $pdo;
	// conexão com o banco de dados
    public function __construct($dbname,$host,$user,$senha){
    	// Tratamento de erro com try catch
    	try {
   			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
    		
    	}
    	
    	catch (PDOException $e) {
    		echo 'erro com banco de dados: '.$e->getMessage();
    		exit();
    	}
    	catch (Exception $e) {
    		echo 'erro generico: '.$e->getMessage();
    		exit();
    	}
    	
    }

    public function cadastrar($nome,$email,$senha,$dinheiro){
        
        $sql = $this->pdo->prepare("SELECT id_usuario 
            				        FROM usuarios 
            				  		WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
            if ($sql->rowCount() > 0) {
                return false;
            }
                //Se não estiver cadastradada, será cadastada agora mesmo.
            else {
                $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,
                                                 		   email,
                                                 		   senha,
                                                 		   dinheiro)
                                      VALUES(?, ?, ?, ?)");
                $sql->bindParam(1,$nome);
                $sql->bindParam(2,$email);
                $sql->bindParam(3,password_hash($senha, PASSWORD_DEFAULT));
                $sql->bindParam(4,$dinheiro);
                $sql->execute();
                return true;
            } 
    }

    //---------- função para autentificar o login de algum usuario
    public function logar($email,$senha){

        $dados = array();
            // pegando os dados e Validando para maior segurança
        $sql = $this->pdo->prepare("SELECT id_usuario, senha 
                			  		FROM usuarios 
                			 	    WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute(); 
      // Verificando o HASH da senha para confirmação.
        $dados = $sql->fetch();
        $hash = $dados['senha'];
      // se senha for igual a hash, retorna verdadeiro
            if (password_verify($senha, $hash)) {
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dados['id_usuario'];
                return true; // logado com sucesso
            } 
            
            else{
                return false; // voçe não conseguiu se logar
            }
    }
        
    //FUNÇÃO PARA INSERIR COMENTÁRIOS NA TABELA DE COMENTÁIOS
    public function Comenta($assunto, $nome, $comentario){
      
        $sql = $this->pdo->prepare("INSERT INTO contato(
                                                  		assunto,
                                                  		nome,
                                                  		comentario)
                              		VALUES(?, ?, ?)");
        $sql->bindParam(1,$assunto);
        $sql->bindParam(2,$nome);
        $sql->bindParam(3,$comentario);
        $sql->execute();
        return true;
    }

}
?>