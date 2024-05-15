<?php

// require_once '../Model/DTO/UsuarioDTO.php';
// require_once '../Model/DAO/UsuarioDAO.php';

// // $idUsu = strip_tags($_POST["idUsu"]);
// // $cpfUsu = strip_tags($_POST["cpfUsu"]);
// $nomeFor = strip_tags($_POST["nomeFor"]);
// $emailUsu = strip_tags($_POST["emailUsu"]);
// $telefoneUsu = strip_tags($_POST["telefoneUsu"]);

// // echo "{$dtFinal}";

// $usuarioDTO = new UsuarioDTO();
// // $usuarioDTO->setIdUsu($idUsu);
// // $usuarioDTO->setCpfUsu($cpfUsu);
// $usuarioDTO->setNomeFor($nomeFor);
// $usuarioDTO->setEmailFor($emailFor);
// $usuarioDTO->setTelefoneFor($telefoneFor);



// //echo "{$usuarioDTO->getDtNascimentoUsu()}";
// $usuarioDAO = new UsuarioDAO();

// $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);
// if ($sucesso === "E-mail já cadastrado!") {
//   echo json_encode(["success" => false, "message" => $sucesso]);
// } else if ($sucesso) {
//   echo json_encode(["success" => true, "message" => "Usuário cadastrado com sucesso!"]);
// } else {
//   echo json_encode(["success" => false, "message" => "Aconteceu um problema no cadastramento"]);
// }


// ?>