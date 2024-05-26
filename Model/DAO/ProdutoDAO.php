<?php

include "Conexao.php";
require_once "../Model/DTO/ProdutoDTO.php";
class ProdutoDAO{
    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function inserirProduto(ProdutoDTO $produto) {
        try {
            $sql = "INSERT INTO produto (nomePro, valorCompraPro, valorVendaPro, qtdEstoquePro, imagemPro, qtdEstoqueMinimoPro, codigoPro) 
                    VALUES (:nomePro, :valorCompraPro, :valorVendaPro, :qtdEstoquePro, :imagemPro, :qtdEstoqueMinimoPro, :codigoPro)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nomePro', $produto->getNomePro());
            $stmt->bindParam(':valorCompraPro', $produto->getValorCompraPro());
            $stmt->bindParam(':valorVendaPro', $produto->getValorVendaPro());
            $stmt->bindParam(':qtdEstoquePro', $produto->getQtdEstoquePro());
            $stmt->bindParam(':imagemPro', $produto->getImagemPro());
            $stmt->bindParam(':qtdEstoqueMinimoPro', $produto->getQtdEstoqueMinimoPro());
            $stmt->bindParam(':codigoPro', $produto->getCodigoPro());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function atualizarProduto(ProdutoDTO $produto) {
        try {
            $sql = "UPDATE produto SET nomePro = :nomePro, valorCompraPro = :valorCompraPro, valorVendaPro = :valorVendaPro, 
                    qtdEstoquePro = :qtdEstoquePro, imagemPro = :imagemPro, qtdEstoqueMinimoPro = :qtdEstoqueMinimoPro, 
                    codigoPro = :codigoPro WHERE idPro = :idPro";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':idPro', $produto->getIdPro());
            $stmt->bindParam(':nomePro', $produto->getNomePro());
            $stmt->bindParam(':valorCompraPro', $produto->getValorCompraPro());
            $stmt->bindParam(':valorVendaPro', $produto->getValorVendaPro());
            $stmt->bindParam(':qtdEstoquePro', $produto->getQtdEstoquePro());
            $stmt->bindParam(':imagemPro', $produto->getImagemPro());
            $stmt->bindParam(':qtdEstoqueMinimoPro', $produto->getQtdEstoqueMinimoPro());
            $stmt->bindParam(':codigoPro', $produto->getCodigoPro());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function deletarProduto($idPro) {
        try {
            $sql = "DELETE FROM produto WHERE idPro = :idPro";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':idPro', $idPro);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function buscarProdutoPorId($idPro) {
        try {
            $sql = "SELECT * FROM produto WHERE idPro = :idPro";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':idPro', $idPro);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function listarProdutos() {
        try {
            $sql = "SELECT * FROM produto";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
}
?>
    
}

?>