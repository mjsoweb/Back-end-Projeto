<!-- view/recuperar_senha.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
</head>

<body>
    <h2>Recuperar Senha</h2>
    <form action="../control/recuperar_senha_control.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
<!-- view/confirmacao_recuperacao.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Confirmação de Recuperação de Senha</title>
</head>

<body>
    <h2>Confirmação de Recuperação de Senha</h2>
    <p>Um e-mail com instruções para recuperar sua senha foi enviado para o seu endereço de e-mail.</p>
</body>

</html>