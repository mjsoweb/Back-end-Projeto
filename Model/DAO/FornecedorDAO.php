
<?php

include "Conexao.php";
require_once "../Model/DTO/FornecedorDTO.php";
class FornecedorDAO{

    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    // INSERT

    public function emailExists($emailUsu) {
        try {
            $sql = "SELECT COUNT(*) FROM fornecedor WHERE emailUsu = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $emailUsu);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            return $count > 0;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }



    public function salvarFornecedor(FornecedorDTO $fornecedorDTO)
    {

        if ($this->emailExists($fornecedorDTO->getEmailFor())){
            return "E-mail já cadastrado!";
        }

        try {
            $sql = "INSERT INTO usuario (nomeUsu,sobrenomeUsu,emailUsu,telefoneUsu,
            senhaUsu,perfilUsu,situacaoUsu) 
            VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeFor = $fornecedorDTO->getNomeFor();
            $telefoneFor = $fornecedorDTO->getTelefoneFor();
            $emailFor = $fornecedorDTO->getEmailFor();
           
          

            $stmt->bindValue(1, $nomeFor);
            $stmt->bindValue(2, $telefoneFor);
            $stmt->bindValue(3, $emailFor);
     

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


 //LISTAR USUÁRIOS
 public function listarFornecedor()
 {
     try {
         $sql = "SELECT * FROM fornecedor ";
         $stmt = $this->pdo->prepare($sql);


         $stmt->execute();

         $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $retorno;
     } catch (PDOException $exc) {
         echo $exc->getMessage();
     }
 }
 //excluir usuários
 public function excluirFornecedor($idFor)
 {
     try {
         $sql = "DELETE FROM fornecedor
             WHERE idFor = ?";

         $stmt = $this->pdo->prepare($sql);
         $stmt->bindValue(1, $idFor);


         $retorno = $stmt->execute();

         return $retorno;
     } catch (PDOException $exc) {
         echo $exc->getMessage();

     }
 }


    public function alterarFornecedor(FornecedorDTO $fornecedorDTO)
    {
        try {
            $sql = "UPDATE fornecedor SET 
            nomeFor = ?, 
            emailFor = ?, 
            telefoneFor = ?, 
           
            WHERE idFor = ?";
            $stmt = $this->pdo->prepare($sql);
    
            $idFor = $fornecedorDTO->getIdFor();
            $nomeFor = $fornecedorDTO->getNomeFor();
            $emailFor = $fornecedorDTO->getEmailFor();
            $telefoneFor = $fornecedorDTO->getTelefoneFor();
          
    
            $stmt->bindValue(1, $idFor);
            $stmt->bindValue(2, $nomeFor);
            $stmt->bindValue(3, $emailFor);
            $stmt->bindValue(4, $telefoneFor);
          
    
            $retorno = $stmt->execute();
    
            // Verifica se a atualização foi bem-sucedida
           return $retorno;
    }catch (PDOException $exc) {
        echo $exc->getMessage();

    }
}


    //PesquisarUsuarioPorId
    public function pesquisarUsuarioPorId($idFor)
    {
        try {
            $sql = "SELECT * FROM fornecedor WHERE idFor = {$idFor}; ";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
?>





