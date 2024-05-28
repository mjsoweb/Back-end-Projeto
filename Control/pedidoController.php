<?php
require_once '../Model/DTO/PedidoDTO.php';
require_once '../Model/DAO/PedidoDAO.php';



$idPed = strip_tags($_POST["idPed"]);
$dataHoraPed = strip_tags($_POST["dataHoraPed"]);
$valorTotalPed = strip_tags($_POST["valorTotalPed"]);
$situacaoPed = strip_tags($_POST["situacaoPed"]);
$formapagamentoPed = strip_tags($_POST["formapagamentoPed"]);


$pedidoDTO = new PedidoDTO;
$pedidoDTO->setIdPed($idPed);
$pedidoDTO->setDataHoraPed($dataHoraPed);
$pedidoDTO->setValorTotalPed($valorTotalPed);
$pedidoDTO->setSituacaoPed($ituacaoPed);
$pedidoDTO->setFormapagamentoPed($formapagamentoPed);


$pedidoDAO = new PedidoDAO();

$sucesso = $pedidoDAO->novoPedido($pedidoDTO);

 if ($sucesso) {
  json_encode(["success" => true, "message" => "Usuário alterado com sucesso!"]);
} else {
  json_encode(["success" => false, "message" => "Aconteceu um problema ao alterar o usuário!"]);
}

?>