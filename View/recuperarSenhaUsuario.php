<!-- view/recuperar_senha.php -->
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="../_cdn/recuperarsenha.css">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
</head>
<body>
<main class="container">
    <div class="imagem">
      <img src="../img/login.svg" alt="login"  height="600px"/>
    </div>
    <form action="../Control/loginController.php" method="POST">
      <div class="form">
        <header>
        <h1>Recuperar Senha</h1>
        </header>
        <div class="cont">
          <div class="form-name">
    <form action="../Control/recuperarSenhaUsuarioController.php" method="POST">
        <label for="emailUsu">Email:</label>
        <input type="email" id="emailUsu" name="emailUsu" required>
        </div>
        <div class="botao">
          <input type="submit" value="Enviar">
          <a href="../View/cadastrarUsu.php">É novo aqui? Cadastre-se agora</a>
        </div>
            <!-- <h6>Confirmação de Recuperação de Senha</h6>
        <p>Um e-mail com instruções para recuperar sua senha foi enviado para o seu endereço de e-mail.</p> -->
      </div>
  </main>
  </form>
</body>

</html>


   
    
 
  </form>