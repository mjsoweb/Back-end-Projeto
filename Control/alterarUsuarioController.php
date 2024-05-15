<?php
require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

  $idUsu = strip_tags($_POST["idUsu"]);
  $nomeUsu = strip_tags($_POST["nomeUsu"]);
  $sobrenomeUsu = strip_tags($_POST["sobrenomeUsu"]);
  $emailUsu = strip_tags($_POST["emailUsu"]);
  $telefoneUsu = strip_tags($_POST["telefoneUsu"]);
  $perfilUsu = strip_tags($_POST["perfilUsu"]);
  $situacaoUsu = strip_tags($_POST["situacaoUsu"]);

  $usuarioDTO = new UsuarioDTO;
  $usuarioDTO->setIdUsu($idUsu);
  $usuarioDTO->setNomeUsu($nomeUsu);
  $usuarioDTO->setSobrenomeUsu($sobrenomeUsu);
  $usuarioDTO->setEmailUsu($emailUsu);
  $usuarioDTO->setTelefoneUsu($telefoneUsu);
  $usuarioDTO->setPerfilUsu($perfilUsu);
  $usuarioDTO->setSituacaoUsu($situacaoUsu);

  $usuarioDAO = new UsuarioDAO();

  $sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

   if ($sucesso) {
    json_encode(["success" => true, "message" => "Usuário alterado com sucesso!"]);
  } else {
    json_encode(["success" => false, "message" => "Aconteceu um problema ao alterar o usuário!"]);
  }
// }
?>
