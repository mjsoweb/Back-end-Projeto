<?php

require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

// $idUsu = strip_tags($_POST["idUsu"]);
// $cpfUsu = strip_tags($_POST["cpfUsu"]);
$nomeUsu = strip_tags($_POST["nomeUsu"]);
$sobrenomeUsu = ($_POST["sobrenomeUsu"]);
$emailUsu = strip_tags($_POST["emailUsu"]);
$telefoneUsu = strip_tags($_POST["telefoneUsu"]);
$senhaUsu = MD5($_POST["senhaUsu"]);
$perfilUsu = strip_tags($_POST["perfilUsu"]);
$situacaoUsu = strip_tags($_POST["situacaoUsu"]);

// echo "{$dtFinal}";

$usuarioDTO = new UsuarioDTO();
// $usuarioDTO->setIdUsu($idUsu);
// $usuarioDTO->setCpfUsu($cpfUsu);
$usuarioDTO->setNomeUsu($nomeUsu);
$usuarioDTO->setSobrenomeUsu($sobrenomeUsu);
$usuarioDTO->setEmailUsu($emailUsu);
$usuarioDTO->setTelefoneUsu($telefoneUsu);
$usuarioDTO->setSenhaUsu($senhaUsu);
$usuarioDTO->setPerfilUsu($perfilUsu);
$usuarioDTO->setSituacaoUsu($situacaoUsu);


//echo "{$usuarioDTO->getDtNascimentoUsu()}";
$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);
if ($sucesso === "E-mail já cadastrado!") {
  echo json_encode(["success" => false, "message" => $sucesso]);
} else if ($sucesso) {
  echo json_encode(["success" => true, "message" => "Usuário cadastrado com sucesso!"]);
} else {
  echo json_encode(["success" => false, "message" => "Aconteceu um problema no cadastramento"]);
}


?>