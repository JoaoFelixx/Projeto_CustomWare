<?php

Class perifericos{

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
    //FUNÇÃO PARA INSERIR NA TABELA DE CONSERTO.
    public function Conserto($id,$model,$problem){

        $cmd = $this->pdo->prepare("INSERT INTO conserto(id_user,
                                                         modelPerif,
                                                         problePerif)
                                    VALUES (:id,:m,:p)");

        $cmd->bindValue(":id",$id);
        $cmd->bindValue(":m",$model);
        $cmd->bindValue(":p",$problem);
        $cmd->execute();
        return true; 
        
    }

    public function Saldo($id){
        $saldo = array();
        $cmd = $this->pdo->prepare("SELECT dinheiro 
        							FROM usuarios 
        							WHERE id_usuario = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
        $saldo = $cmd->fetch(PDO::FETCH_ASSOC);
        return $saldo;
            
    }
    
    public function Compra_efetuada($id,$dinheiro){
                
        $cmd = $this->pdo->prepare("UPDATE usuarios 
        							SET dinheiro = :d 
        							WHERE id_usuario = :id");
        $cmd->bindValue(":id",$id);
        $cmd->bindValue(":d",$dinheiro);
        $cmd->execute();
        return true;
    }

    public function Personalizar($id,$nome,$valor){
        $cmd = $this->pdo->prepare("INSERT INTO costumiza(id_user,
                                                         nomeCust,
                                                         valorCust)
                                    VALUES (:id,:n,:v)");

        $cmd->bindValue(":id",$id);
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":v",$valor);
        $cmd->execute();
        return true; 
        
    }
}

?>