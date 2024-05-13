<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../_cdn/cboot.css" />
  <link rel="stylesheet" href="../_cdn/cstyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <title>Cadastre-se agora</title>
</head>

<body>
  <main class="container">
    <div class="imagem">
      <img src="../img/cad.svg" alt="cadastro" />
      <div class="login">
        <a href="../View/loginUsu.php">Login</a>
      </div>
    </div>

    <div class="form">
      <header>
        <h1>Cadastre-se</h1>

      </header>
      <form action="../Control/cadastrarUsuarioController.php" method="post">
        <div class="cont">
          <div class="form-align">
            <div class="form-name">
              <label for="nome">Nome</label>
              <input id="nomeUsu" name="nomeUsu" type="text" placeholder="Digite seu nome" required />
            </div>

            <div class="form-name">
              <label for="sobrenome">Sobrenome</label>
              <input id="sobrenomeUsu" name="sobrenomeUsu" type="text" placeholder="Digite seu sobrenome" required />
            </div>
          </div>

          <div class="form-align">
            <div class="form-name">
              <label for="email">E-mail</label>
              <input id="emailUsu" type="email" name="emailUsu" placeholder="Digite seu e-mail" required />
            </div>

            <div class="form-name">
              <label for="telefoneUsu"> Celular</label>
              <input id="telefoneUsu" name="telefoneUsu" type="tel" placeholder="(xx) xxxxx-xxxx" required
                maxlength="11" />
            </div>
          </div>

          <div class="form-align">
            <div class="form-name">
              <label for="senhaUsu">Senha</label>
              <input id="senhaUsu" type="password" name="senhaUsu" placeholder="Digite sua senha" required />
            </div>

            <div class="form-name">
              <label for="confirmarSenhaUsu">Confirmar Senha</label>
              <input id="confirmarSenhaUsu" name="confirmarSenhaUsu" type="password"
                placeholder="Digite sua senha novamente" required />
            </div>
          </div>
        </div>
        <div class="botao">
          <input type="submit" value="Cadastrar" onclick="simpleAlert()">
        </div>
        <input type="hidden" name="perfilUsu" value="Cliente">
        <input type="hidden" name="situacaoUsu" value="Ativo">
      </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function simpleAlert() {
  Swal.fire('Cadastro realizado com sucesso :)');
}
</script>

  </main>
</body>


</html>