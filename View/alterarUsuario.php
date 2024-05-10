<!-- <?php
// require_once '../Model/DTO/UsuarioDTO.php';
// require_once '../Model/DAO/UsuarioDAO.php';
// require_once '../Control/listarUsuariosController.php';

// $idUsuario = $_GET["idUsu"];
//var_dump($idUsuario);

// $usuarioDAO = new UsuarioDAO();
// $retorno = $usuarioDAO->pesquisarUsuarioPorId($idUsu);

//var_dump($retorno);


//?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Alteração de Cadastro de Usuário</h1>
  <form name="alterarUsuario" id="alterarUsuario" action="../Control/alterarUsuarioController.php" method="POST">

    <input type="hidden" name="idUsuario" value="<?php echo $retorno["idUsu"]; ?>">

    Nome: <input type="text" name="nomeUsuario" value="<?php echo $retorno["nomeUsu"]; ?>" required><br>
    Data Nasc: <input type="date" name="dtNascimento" value="<?php echo $retorno["dtNascimentoUsu"]; ?>" required><br>

    <input type="submit" value="Salvar Alteração">
  </form>

</body>

</html> -->