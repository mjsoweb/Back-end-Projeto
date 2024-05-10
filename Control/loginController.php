<?php
session_start();
require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

//Valida se o usuário passou pela tela de login
if (!isset($_POST["emailUsu"])) {
  header("location:../view/loginUsu.php?msg=Acesso indevido!");
}
$emailUsu = strip_tags($_POST["emailUsu"]);
$senhaUsu = MD5($_POST["senhaUsu"]);
$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->validarLogin($emailUsu, $senhaUsu);
if ($sucesso) {
  $msg = "Legal!! Você está Logado!!";
  //Grava os principais dados de login do usuário
  $_SESSION["idUsu"] = $sucesso["idUsu"];
  $_SESSION["nomeUsu"] = $sucesso["nomeUsu"];
  // $_SESSION["fotoUsu"] = $sucesso["fotoUsu"];
  $_SESSION["emailUsu"] = $sucesso["emailUsu"];
  $_SESSION["situacaoUsu"] = $sucesso["situacaoUsu"];
  $_SESSION["perfilUsu"] = $sucesso["perfilUsu"];

} else {
  $msg = "Usuário ou senha inválido!";
}
header("location:../index.php?msg=$msg");

?>