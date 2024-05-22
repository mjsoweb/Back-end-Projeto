<?php
require_once '../Model/DTO/FornecedorDTO.php';
require_once '../Model/DAO/FornecedorDAO.php';

  $idFor = strip_tags($_POST["idFor"]);
  $nomeFor = strip_tags($_POST["nomeFor"]);
  $emailFor = strip_tags($_POST["emailFor"]);
  $telefoneFor = strip_tags($_POST["telefoneFor"]);
 

  $fornecedorDTO = new FornecedorDTO;
  $fornecedorDTO->setIdFor($idFor);
  $fornecedorDTO->setNomeFor($nomeFor);
  $fornecedorDTO->setEmailFor($emailFor);
  $fornecedorDTO->setTelefoneFor($telefoneFor);
 

  $fornecedorDAO = new FornecedorDAO();

  $sucesso = $fornecedorDAO->alterarFornecedor($fornecedorDTO);

  if ($sucesso) {
  // json_encode(["success" => true, "message" => "Fornecedor alterado com sucesso!"]);
 } else {
  // json_encode(["success" => false, "message" => "Aconteceu um problema ao alterar o usuário!"]);
 }
  ?>

  

