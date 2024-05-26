<?php

include "Conexao.php";
require_once "../Model/DTO/PedidoDTO.php";

class PedidoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // Função dentro do PedidoDAO
    public function novoPedido($idUsu) {
        try {
            $usuario_idUsu = $idUsu;
            $dataHoraPed = date('Y-m-d H:i:s');
            $valorTotalPed = '0.00';
            $situacaoPed = 'Aberto';
            $formapagamentoPed = 'Não informado';
            
            $sql = "INSERT INTO `pedido` (`dataHoraPed`, `valorTotalPed`, `situacaoPed`, `formapagamentoPed`, `usuario_idUsu`) 
                    VALUES (:dataHoraPed, :valorTotalPed, :situacaoPed, :formapagamentoPed, :usuario_idUsu)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':dataHoraPed', $dataHoraPed);
            $stmt->bindParam(':valorTotalPed', $valorTotalPed);
            $stmt->bindParam(':situacaoPed', $situacaoPed);
            $stmt->bindParam(':formapagamentoPed', $formapagamentoPed);
            $stmt->bindParam(':usuario_idUsu', $usuario_idUsu);

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function contarItensCarrinho($idPed) {
        try {
            $sql = "SELECT COUNT(*) as pedido FROM `pedido_item_produto` 
                    WHERE `pedido_idPed` = :idPed";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':idPed', $idPed);
            $stmt->execute();
            
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
?>
