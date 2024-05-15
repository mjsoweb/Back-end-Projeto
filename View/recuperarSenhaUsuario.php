<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="../_cdn/cboot.css">
    <link rel="stylesheet" href="../_cdn/recuperarsenha.css">
    <!-- Adicione o SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<main class="container">
    <div class="imagem">
        <img src="../img/login.svg" alt="login"  height="600px"/>
    </div>
    <form id="recuperarSenhaForm" action="../Control/recuperarSenhaUsuarioController.php" method="POST">
        <div class="back">
            <a href="../View/loginUsu.php">Voltar</a>
        </div>
        <div class="form">
            <header>
                <h1>Recuperar Senha</h1>
            </header>
            <div class="cont">
                <div class="form-name">
                    <label for="emailUsu">Email:</label>
                    <input type="email" id="emailUsu" name="emailUsu" required>
                </div>
                <div class="botao">
                    <!-- Modificado de "submit" para "button" -->
                    <button type="button" onclick="enviarFormulario()">Enviar</button>
                    <a href="../View/cadastrarUsu.php">É novo aqui? Cadastre-se agora</a>
                </div>
            </div>
        </div>
    </form>
</main>

<script>
    function enviarFormulario() {
        // Você pode adicionar aqui qualquer validação adicional antes do envio do formulário
        
        // Exibir o SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Email enviado!',
            text: 'Um e-mail com instruções para recuperar sua senha foi enviado para o seu endereço de e-mail.'
        }).then((result) => {
            // Após o usuário clicar em "OK", enviar o formulário
            if (result.isConfirmed) {
                document.getElementById('recuperarSenhaForm').submit();
            }
        });
    }
</script>

</body>
</html>
