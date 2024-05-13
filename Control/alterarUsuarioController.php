<?php
require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

$idUsu = $_POST["idUsu"];
$cpfUsu = $_POST["cpfUsu"];
$nomeUsu = $_POST["nomeUsu"];
$sobrenomeUsu = $_POST["sobrenomeUsu"];
$emailUsu = $_POST["emailUsu"];
$senhaUsu = $_POST["senhaUsu"];
$perfilUsu = $_POST["perfilUsu"];
$situacaoUsu = $_POST["situacaoUsu"];

$usuarioDTO = new UsuarioDTO;
$usuarioDTO->setIdUsu($idUsu);
$usuarioDTO->setCpfUsu($cpfUsu);
$usuarioDTO->setNomeUsu($nomeUsu);
$usuarioDTO->setSobrenomeUsu($sobrenomeUsu);
$usuarioDTO->setEmailUsu($emailUsu);
$usuarioDTO->setSenhaUsu($senhaUsu);
$usuarioDTO->setPerfilUsu($perfilUsu);
$usuarioDTO->setSituacaoUsu($situacaoUsu);


// var_dump($usuarioDTO);

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

if ($sucesso) {
  $msg = "Usuário alterado com sucesso! <br>";
} else {
  $msg = "Aconteceu um problema na alteração de dados.<br>" . $sucesso;
}
echo "{$msg}";

?>