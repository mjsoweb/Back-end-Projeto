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
    <form id="recuperarSenhaForm" method="POST">
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
                    <button type="button" onclick="verificarEmail()">Enviar</button>
                    <a href="../View/cadastrarUsu.php">É novo aqui? Cadastre-se agora</a>
                </div>
            </div>
        </div>
    </form>
</main>
 <!-- <script>
function verificarEmail() {
    const email = document.getElementById('emailUsu').value;
    fetch('../Control/recuperarSenhaUsuarioController.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `emailUsu=${encodeURIComponent(email)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.exists) {
            Swal.fire({
                icon: 'success',
                title: 'Email enviado!',
                text: 'Um e-mail com instruções para recuperar sua senha foi enviado para o seu endereço de e-mail.'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('recuperarSenhaForm').submit();
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Este email não está cadastrado.',
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Ocorreu um erro ao verificar o email. Tente novamente mais tarde.',
        });
    });
}
</script>  -->
</body>
</html>
