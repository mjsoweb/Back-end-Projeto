<?php

require_once '../Model/DTO/FornecedorDTO.php';
require_once '../Model/DAO/FornecedorDAO.php';

$fornecedorDAO = new FornecedorDAO();

$todos = $fornecedorDAO->listarFornecedor();

?>