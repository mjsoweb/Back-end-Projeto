<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../_cdn/cboot.css" />
  <link rel="stylesheet" href="../_cdn/cadastroFor.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <title>Cadastro de Fornecedor</title>
</head>

<body>
  <main class="container">
    <div class="imagem">
      <img src="../img/cadfor.svg" alt="cadastro" />
    </div>
    <div class="form">
      <div class="back">
        <a href="../View/opcao.php">Voltar</a>
      </div>
      <header>
        <h1>Cadastrar Fornecedor</h1>
      </header>
      <form action="../Control/fornecedorController.php" method="POST" id="cadastrar"> 
    
        <div class="cont">
          <div class="form-align">
            <div class="form-name">
              <label for="nome">Nome Completo</label>
              <input id="nomeFor" name="nomeFor" type="text" placeholder="Digite seu nome" required />
              
              
              <div class="form-align">
                <div class="form-name">
                  <label for="email">E-mail</label>
                  <input id="emailFor" type="email" name="emailFor" placeholder="Digite seu e-mail" required maxlength="120"/>
                </div>
              </div>
              <div class="form-name">
                <label for="telefoneFor">Celular</label>
                <input id="telefoneFor" name="telefoneFor" type="tel"  maxlength="11" placeholder="(xx) xxxx-xxxx" required
               />
              </div>
              </div>
        <div class="botao">
          <input type="submit" value="Cadastrar">
        </div>
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.getElementById('cadastrar').addEventListener('submit', function(event) {
      event.preventDefault();

      const formData = new FormData(this);

      fetch("../Control/fornecedorController.php", {
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


    // // Função para formatar o campo de telefone
    // document.getElementById('telefoneFor').addEventListener('input', function(event) {
    //   let phone = event.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
    //   if (phone.length > 0) {
    //     if (phone.length <= 10) {
    //       phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 6) + '-' + phone.substring(6, 10);
    //     } else {
    //       phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 7) + '-' + phone.substring(7, 11);
    //     }
    //   }
    //   event.target.value = phone;
    // });
  </script>

  </script>

</body>

</html>
