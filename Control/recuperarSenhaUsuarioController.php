<?php

require_once '../Model/DAO/UsuarioDAO.php';
// require_once 'databaseConnection.php';

$emailUsu = strip_tags($_POST["emailUsu"]);

$usuarioDAO = new UsuarioDAO();

if (empty($emailUsu)) {
    echo json_encode(["success" => false, "message" => "Email não fornecido"]);
    exit;
}

$usuarioDTO = $usuarioDAO->buscarUsuarioPorEmail($emailUsu);

if ($usuarioDTO) {
    // Aqui você pode adicionar o código para enviar o email de recuperação de senha
    $message = "Um email foi enviado para $emailUsu com instruções para recuperar sua senha.";
    echo json_encode(["success" => true, "message" => $message]);

    // Exemplo de envio de email (substitua pela sua função real)
    // mail($emailUsu, "Recuperação de Senha", "Clique no link para redefinir sua senha.");

} else {
    echo json_encode(["success" => false, "message" => "Este email não está cadastrado."]);
}

?>
