<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../_cdn/eboot.css" />
  <link rel="stylesheet" href="../_cdn/estyle.css" />

  <title>Login</title>
</head>

<body>
  <main class="container">
    <div class="imagem">
      <img src="../img/login.png" alt="login" />

    </div>
    <form action="../Control/loginController.php" method="POST">
      <div class="form">
        <header>
          <h1>Entrar</h1>
        </header>
        <div class="cont">
          <div class="form-name">
            <label for="email">E-mail</label>
            <input id="emailUsu" type="email" name="emailUsu" placeholder="Digite seu e-mail" required />
            <label class="senha" for="senha">Senha</label>
            <input id="senhaUsu" type="password" name="senhaUsu" placeholder="Digite sua senha" required />
            <a href="#">Esqueci minha senha</a>
          </div>
        </div>
        <div class="botao">
          <input type="submit" value="Entrar">
          <a href="../View/cadastrarUsu.php">É novo aqui? Cadastre-se agora</a>
        </div>
      </div>
  </main>
  </form>
</body>

</html>