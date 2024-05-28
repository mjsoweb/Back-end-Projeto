<?php
require_once '../Model/DTO/ProdutoDTO.php';
require_once '../Model/DAO/ProdutoDAO.php';


$idPro = strip_tags($_POST["idPro"]);
$nomePro = strip_tags($_POST["nomePro"]);
$valorCompraPro= strip_tags($_POST["valorCompraPro"]);
$valorVendaPro = strip_tags($_POST["valorVendaPro"]);
$qtdEstoquePro= strip_tags($_POST["qtdEstoquePro"]);
// $imagemPro = strip_tags($_POST["imagemPro"]);
$qtdEstoqueMinimoPro = strip_tags($_POST["qtdEstoqueMinimoPro"]);
$codigoPro = strip_tags($_POST["codigoPro"]);

$produtoDTO = new ProdutoDTO;
$produtoDTO->setIdPro($idPro);
$produtoDTO->setNomePro($nomePro);
$produtoDTO->setValorCompraPro($valorCompraPro);
$produtoDTO->setValorVendaPro($valorVendaPro);
$produtoDTO->setQtdEstoquePro($qtdEstoquePro);
$produtoDTO->setQtdEstoqueMinimoPro($qtdEstoqueMinimoPro);
$produtoDTO->setCodigoPro($codigoPro);

$produtoDAO = new ProdutoDAO();

$sucesso = $produtoDAO->atualizarProduto($produtoDTO);

 if ($sucesso) {
  json_encode(["success" => true, "message" => "Usuário alterado com sucesso!"]);
} else {
  json_encode(["success" => false, "message" => "Aconteceu um problema ao alterar o usuário!"]);
}



?>