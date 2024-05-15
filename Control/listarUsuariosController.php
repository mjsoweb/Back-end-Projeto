<?php

require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

$usuarioDAO = new UsuarioDAO();

$todos = $usuarioDAO->listarUsuarios();

?>