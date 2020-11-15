<?php

Class Conta{

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
      //MOSTRA OS DADOS DA CONTA INDIVIUAL DAS PESSOAS
        public function MeusDados($id){
    	   $res = array();
    	   $cmd = $this->pdo->prepare("SELECT nome, email, dinheiro 
    	   							   FROM usuarios 
    	   							   WHERE id_usuario = :id");
    	   $cmd->bindValue(":id",$id);
    	   $cmd->execute();
    	   $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
    	   return $res;
        }

      //MOSTRA TODOS OS CONSERTOS QUE O USUÁRIO PEDIR
        public function Meu_conserto($id){
           $res = array();
           $cmd = $this->pdo->prepare("SELECT modelPerif, problePerif, valorCons
            							FROM conserto 
            							WHERE id_user = :id");
           $cmd->bindValue(":id",$id);
           $cmd->execute();
           $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
           return $res;
        }

        public function Minha_personalizacao($id){
           $res = array();
           $cmd = $this->pdo->prepare("SELECT nomeCust, valorCust 
           							   FROM costumiza 
           							   WHERE id_user = :id");
           $cmd->bindValue(":id",$id);
           $cmd->execute();
           $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
           return $res;
        }

}

?>