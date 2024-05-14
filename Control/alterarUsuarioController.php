<?php
require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

$idUsu = $_POST["idUsu"];
$nomeUsu = $_POST["nomeUsu"];
$sobrenomeUsu = $_POST["sobrenomeUsu"];
$emailUsu = $_POST["emailUsu"];
$perfilUsu = $_POST["perfilUsu"];
$situacaoUsu = $_POST["situacaoUsu"];
// $telefoneUsu = $_POST["telefoneUsu"];

$usuarioDTO = new UsuarioDTO;
$usuarioDTO->setIdUsu($idUsu);
$usuarioDTO->setNomeUsu($nomeUsu);
$usuarioDTO->setSobrenomeUsu($sobrenomeUsu);
$usuarioDTO->setEmailUsu($emailUsu);
$usuarioDTO->setPerfilUsu($perfilUsu);
$usuarioDTO->setSituacaoUsu($situacaoUsu);
// $usuarioDTO->setTelefoneUsu($telefoneUsu);



// var_dump($usuarioDTO);

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

if ($sucesso) {
  $msg = "Usuário alterado com sucesso! <br>";
} else {
  $msg = "Aconteceu um problema na alteração de dados.<br>" . $sucesso;
}
// echo "{$msg}";

?>
