
<?php
require_once '../V.php';
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o email foi enviado
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        
        // Aqui você pode adicionar a lógica para verificar se o e-mail existe no banco de dados

        // Gere um token para o usuário (pode ser um hash aleatório)
        $token = md5(uniqid(rand(), true));

        // Armazene o token e o e-mail em algum lugar seguro, como no banco de dados

        // Agora você pode enviar um e-mail para o usuário com um link contendo o token para redefinir a senha
        $assunto = "Recuperação de Senha";
        $mensagem = "Olá,\n\nPara recuperar sua senha, clique no link a seguir:\n\n";
        $mensagem .= "http://seusite.com/resetar_senha.php?token=" . $token;
        $mensagem .= "\n\nSe você não solicitou a recuperação da senha, ignore este e-mail.";
        // Você também pode adicionar o código para enviar o e-mail aqui

        // Redirecionar o usuário para uma página de confirmação
        header("Location: ../view/confirmacao_recuperacao.php");
        exit();
    }
}
