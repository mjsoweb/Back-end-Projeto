<?php
require_once '../Control/listarForController.php';
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
              <a href="../View/listarFor.php">Voltar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="list_container">
      <h1>Alteração de Cadastro de Fornecedor</h1>
    </div>
    <?php
    $usuario_selecionado = null;
    foreach ($todos as $t) { 
      if ($t["idFor"] == $_GET["idFor"]) {
        $usuario_selecionado = $t;
        break;
      }}?>

<form name="alterarFor" id="alterarFor">
      <input type="hidden" name="idFor" id="idFor" value="<?php echo $_GET["idFor"]; ?>">
      <table>
        <tr>
          <th><p>Nome:</p> <input type="text" name="nomeFor" id="nomeFor" value="<?php echo $usuario_selecionado['nomeFor']; ?>" required></th>
          <th><p>Email:</p> <input type="email" name="emailFor" id="emailFor" value="<?php echo $usuario_selecionado["emailFor"]; ?>" required></th>
          <th><p>Celular:</p> <input type="tel" name="telefoneFor" id="telefoneFor" maxlength="15"   pattern="\([0-9]{2}\)\s[0-9]{4,5}-[0-9]{4}" title="Formato: (xx) xxxxx-xxxx" value="<?php echo $usuario_selecionado["telefoneFor"]; ?>" required></th>
        </tr>
      </table>
      <button type="submit">Salvar Alteração</button>
    </form>
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      
      document.getElementById("alterarFor").addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(this);

  fetch("../Control/alterarFornecedorController.php", {
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



    // Função para formatar o campo de telefone
    document.getElementById('telefoneFor').addEventListener('input', function(event) {
      let phone = event.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos
      if (phone.length > 0) {
        if (phone.length <= 10) {
          phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 6) + '-' + phone.substring(6, 10);
        } else {
          phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 7) + '-' + phone.substring(7, 11);
        }
      }
      event.target.value = phone;
    });
    </script>

  
  </main>
</body>

</html>
