<?php
require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';

error_reporting(0);

$idUsu = $_GET['idUsu'];

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->excluirUsuario($idUsu);

if ($sucesso) {
    // Resposta JSON indicando sucesso
    json_encode(["success" => true, "message" => "Usuário excluído com sucesso!"]);

} else {
    // Resposta JSON indicando falha
   json_encode(["success" => false, "message" => "Aconteceu um problema ao excluir o usuário!"]);
}

?>
