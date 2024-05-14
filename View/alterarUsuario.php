<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet" />
    <link href="../_cdn/boot.css" rel="stylesheet" />
    <link href="../_cdn/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="../_cdn/list_format.css" rel="stylesheet" />
  <title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="../_cdn/alterar.css">
</head>

<body>
<!-- INICIO CABEÇALHO -->
<main>
        <header class="main_header">
                <div class="main_header_content">
                    <a href="cadastrarUsu.php" class="logo">
                        <img width="150" height="150" src="../img/logo.png" alt="Meraki Moda Feminina"
                            title="Meraki Moda Feminina" />
                    </a>
                    <nav class="main_header_content_menu">
                        <ul>
                            <li>
                                <a href="../View/opcao.php">Voltar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- FIM CABEÇALHO -->
            <div class="list_container">
                <h1>Alteração de Cadastro de Usuário</h1>
            </div>
          <form name="alterarUsu" id="alterarUsu" action="../Control/alterarUsuarioController.php" method="POST">
        
            <input type="hidden" name="idUsu" value="<?php echo $retorno["idUsu"]; ?>">
            <table>
              <tr>
                <th>Nome: <input type="text" name="nomeUsu" id="nomeUsu"
                    value="<?php echo $retorno["nomeUsu"]; ?>" required></th>
                <th>Sobrenome: <input type="text" name="sobrenomeUsu" id="sobrenomeUsu" value="<?php echo $retorno["sobrenomeUsu"]; ?>" required></th>
                <th>Email: <input type="email" name="emailUsu" id="emailUsu"
                    value="<?php echo $retorno["emailUsu"]; ?>" required></th>
                <th>Perfil: <input type="text" name="perfilUsu" id="perfilUsu"
                    value="<?php echo $retorno["perfilUsu"]; ?>"></th>
                <th>Situação: <input type="text" name="situacaoUsu" id="situacaoUsu"
                    value="<?php echo $retorno["perfilUsu"]; ?>"></th> 
              </tr>
            </table>  
            <button type="submit" onclick="simpleAlert()">Salvar Alteração</button>
</form>

<!-- Script do SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function simpleAlert() {
    Swal.fire('Alteração realizada com sucesso!');
  }
</script>
</main>

</body>

</html>
