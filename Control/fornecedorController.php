 <?php

require_once '../Model/DTO/FornecedorDTO.php';
require_once '../Model/DAO/FornecedorDAO.php';

$idFor = strip_tags($_POST["idFor"]);
$nomeFor = strip_tags($_POST["nomeFor"]);
$emailFor = strip_tags($_POST["emailFor"]);
$telefoneFor = strip_tags($_POST["telefoneFor"]);


$fornecedorDTO = new FornecedorDTO();

$fornecedorDTO->setNomeFor($nomeFor);
$fornecedorDTO->setEmailFor($emailFor);
$fornecedorDTO->setTelefoneFor($telefoneFor);

$fornecedorDAO = new FornecedorDAO();

$sucesso = $fornecedorDAO->salvarFornecedor($fornecedorDTO);

if ($sucesso === "E-mail já cadastrado!") {
  echo json_encode(["success" => false, "message" => $sucesso]);
} else if ($sucesso) {
  echo json_encode(["success" => true, "message" => "Usuário cadastrado com sucesso!"]);
} else {
  echo json_encode(["success" => false, "message" => "Aconteceu um problema no cadastramento"]);
}


?> 