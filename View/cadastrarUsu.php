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
      <img src="../img/cad.svg" alt="voltar" />
    </div>
    
    <div class="form">
      
      <div class="back">
        <a href="../index.php">Voltar</a>
      </div>
      <header>
        <h1>Cadastre-se</h1>
        
        <a href="../index.php"></a>
      </header>
      <form id="cadastro">
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
              <input id="telefoneUsu" name="telefoneUsu" type="tel"  maxlength="11" minlength="11" placeholder="(xx) xxxx-xxxx" required />
            </div>
          </div>

          <div class="form-align">
            <div class="form-name">
              <label for="senhaUsu">Senha</label>
              <input id="senhaUsu" type="password" name="senhaUsu" placeholder="Digite sua senha"  required />
            </div>

            <div class="form-name">
              <label for="confirmarSenhaUsu">Confirmar Senha</label>
              <input id="confirmarSenhaUsu" name="confirmarSenhaUsu" type="password"
                placeholder="Digite sua senha novamente" required />
            </div>
          </div>
        </div>
        <div class="botao">
          <input type="submit" value="Cadastrar">
        </div>
        <div class="entrar">
            <a href="../View/loginUsu.php">Já tem uma conta? Entrar agora</a>
          </div>
        <input type="hidden" name="perfilUsu" value="Cliente">
        <input type="hidden" name="situacaoUsu" value="Ativo">
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.getElementById("cadastro").addEventListener("submit", function (event) {
      event.preventDefault();

      const senha = document.getElementById("senhaUsu").value;
      const confirmarSenha = document.getElementById("confirmarSenhaUsu").value;

      if (senha !== confirmarSenha) {
        Swal.fire({
          icon: 'error',
          title: 'Erro!',
          text: "As senhas não coincidem!",
        });
        return;
      }

      const formData = new FormData(this);

      fetch("../Control/cadastrarUsuarioController.php", {
        method: "POST",
        body: formData
      })
        .then(response => {
          if (!response.ok) {
            throw new Error(response.statusText);
          }
          return response.json(); 
        })
        .then(data => {
          if (data.success) {
            Swal.fire({
              icon: 'success',
              title: 'Sucesso!',
              text: data.message,
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Erro!',
              text: data.message,
            });
          }
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Ocorreu um erro ao processar o cadastro. Tente novamente mais tarde.',
          });
          console.error('Error:', error);
        });
    });

  </script>
</body>

</html>
