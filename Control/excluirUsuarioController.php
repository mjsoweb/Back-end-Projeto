<?php

    require_once '../Model/DTO/UsuarioDTO.php';
    require_once '../Model/DAO/UsuarioDAO.php';

    error_reporting(0);

      $idUsu = $_GET['idUsu'];

      $usuarioDAO = new UsuarioDAO();
      
      $sucesso = $usuarioDAO->excluirUsuario($idUsu);


?>