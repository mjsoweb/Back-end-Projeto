<?php
require_once '../Model/DTO/FornecedorDTO.php';
require_once '../Model/DAO/FornecedorDAO.php';

error_reporting(0);

$idUsu = $_GET['idFor'];

$fornecedorDAO = new FornecedorDAO();

$sucesso = $fornecedorDAO->excluirFornecedor($idFor);

if ($sucesso) {
    // Resposta JSON indicando sucesso
    json_encode(["success" => true, "message" => "Usuário excluído com sucesso!"]);

} else {
    // Resposta JSON indicando falha
   json_encode(["success" => false, "message" => "Aconteceu um problema ao excluir o usuário!"]);
}

?>
