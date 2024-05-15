<?php
require_once '../Control/listarUsuariosController.php';
?>
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
  <link href="../_cdn/alterarUsuario.css" rel="stylesheet" />
  <title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="../_cdn/alterar.css">
</head>

<body>
  <main>
    <header class="main_header">
      <div class="main_header_content">
        <a href="#" class="logo">
          <img width="150" height="150" src="../img/logo.png" alt="Meraki Moda Feminina" title="Meraki Moda Feminina" />
        </a>
        <nav class="main_header_content_menu">
          <ul>
            <li>
              <a href="../View/listarUsuarios.php">Voltar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="list_container">
      <h1>Alteração de Cadastro de Usuário</h1>
    </div>
    <?php
    $usuario_selecionado = null;
    foreach ($todos as $t) { 
      if ($t["idUsu"] == $_GET["idUsu"]) {
        $usuario_selecionado = $t;
        break;
      }}?>

    <form name="alterarUsu" id="alterarUsu">
      <input type="hidden" name="idUsu" id="idUsu" value="<?php echo $_GET["idUsu"]; ?>">
      <table>
        <tr>
          <th><p>Nome:</p> <input type="text" name="nomeUsu" id="nomeUsu" value="<?php echo $usuario_selecionado['nomeUsu']; ?>" required></th>
          <th><p>Sobrenome:</p> <input type="text" name="sobrenomeUsu" id="sobrenomeUsu" value="<?php echo $usuario_selecionado["sobrenomeUsu"]; ?>" required></th>
          <th><p>Email:</p> <input type="email" name="emailUsu" id="emailUsu" value="<?php echo $usuario_selecionado["emailUsu"]; ?>" required></th>
          <th><p>Celular:</p> <input type="tel" name="telefoneUsu" id="telefoneUsu" maxlength="11" value="<?php echo $usuario_selecionado["telefoneUsu"]; ?>" required></th>
          <th><p>Perfil:</p> <input type="text" name="perfilUsu" id="perfilUsu" value="<?php echo $usuario_selecionado["perfilUsu"]; ?>" required></th>
          <th><p>Situação:</p> <input type="text" name="situacaoUsu" id="situacaoUsu" value="<?php echo $usuario_selecionado["situacaoUsu"]; ?>" required></th>
        </tr>
      </table>
      <button type="submit">Salvar Alteração</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
     document.getElementById("alterarUsu").addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(this);

  fetch("../Control/alterarUsuarioController.php", {
    method: "POST",
    body: formData
  })
    .then(response => {
      if (response.ok) {
        return response.text(); 
      } else {
        throw new Error('Falha ao salvar as alterações.'); 
      }
    })
    .then(data => {
      
      Swal.fire({
        icon: 'success',
        title: 'Usuário alterado com sucesso :)',
        text: data.message, 
      });
    })
    .catch(error => {
      
      Swal.fire({
        icon: 'error',
        title: 'Erro!',
        text: error.message, 
      });
    });
});
    </script>
  </main>
</body>

</html>
