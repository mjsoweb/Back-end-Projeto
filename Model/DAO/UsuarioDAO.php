<?php

include "Conexao.php";
require_once "../Model/DTO/UsuarioDTO.php";

class UsuarioDAO
{

    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    // INSERT
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        //echo "{$usuarioDTO->getDtNascimentoUsu()}";

        try {
            $sql = "INSERT INTO usuario (nomeUsu,sobrenomeUsu,emailUsu,telefoneUsu,
            senhaUsu,perfilUsu,situacaoUsu) 
            VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeUsu = $usuarioDTO->getNomeUsu();
            $sobrenomeUsu = $usuarioDTO->getSobrenomeUsu();
            $emailUsu = $usuarioDTO->getEmailUsu();
            $telefoneUsu = $usuarioDTO->getTelefoneUsu();
            $senhaUsu = $usuarioDTO->getSenhaUsu();
            $perfilUsu = $usuarioDTO->getPerfilUsu();
            $situacaoUsu = $usuarioDTO->getSituacaoUsu();

            //var_dump($dtNascimentoUsu);

            $stmt->bindValue(1, $nomeUsu);
            $stmt->bindValue(2, $sobrenomeUsu);
            $stmt->bindValue(3, $emailUsu);
            $stmt->bindValue(4, $telefoneUsu);
            $stmt->bindValue(5, $senhaUsu);
            $stmt->bindValue(6, $perfilUsu);
            $stmt->bindValue(7, $situacaoUsu);

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    //LISTAR USUÁRIOS
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuario ";
            $stmt = $this->pdo->prepare($sql);


            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //excluir usuários
    public function excluirUsuario($idUsuario)
    {
        try {
            $sql = "DELETE FROM usuario
                WHERE idUsu = ?";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);


            $retorno = $stmt->execute();

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();

        }
    }


    public function alterarUsuario(UsuarioDTO $usuarioDTO)
    {

        try {
            $sql = "UPDATE usuario SET 
            nomeUsu = ?, 
            sobrenomeUsu = ?, 
            emailUsu = ?, 
            telefoneUsu = ?, 
            senhaUsu = ?, 
            perfilUsu = ?, 
            situacaoUsu = ?
            WHERE idUsu = ?";
            $stmt = $this->pdo->prepare($sql);

            $idUsu= $usuarioDTO->getIdUsu();
            $nomeUsu = $usuarioDTO->getNomeUsu();
            $sobrenomeUsu= $usuarioDTO->getSobrenomeUsu();
            $emailUsu= $usuarioDTO->getEmailUsu();
            $telefoneUsu= $usuarioDTO->getTelefoneUsu();
            $senhaUsu= $usuarioDTO->getsenhaUsu();
            $perfilUsu= $usuarioDTO->getPerfilUsu();
            $situacaoUsu= $usuarioDTO->getSituacaoUsu();

            
            $stmt->bindValue(1, $idUsu);
            $stmt->bindValue(2, $nomeUsu);
            $stmt->bindValue(3, $sobrenomeUsu);
            $stmt->bindValue(4, $emailUsu);
            $stmt->bindValue(5, $telefoneUsu);
            $stmt->bindValue(6, $senhaUsu);
            $stmt->bindValue(7, $perfilUsu);
            $stmt->bindValue(8, $situacaoUsu);
            

            $retorno = $stmt->execute();

            if ($retorno) {
              //  echo "\nSucesso\n";
            } else {
              //  echo "\nerro\n";
            }

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //PesquisarUsuarioPorId
    public function pesquisarUsuarioPorId($idUsu)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE idUsu = {$idUsu}; ";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //
// MD5('123')
    public function validarLogin($emailUsu, $senhaUsu)
    {
        echo "{$emailUsu}";
        echo "{$senhaUsu}";
        try {
            $sql = "SELECT * FROM usuario WHERE emailUsu = '{$emailUsu}' AND
         senhaUsu = '{$senhaUsu}'; ";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
