<?php
 require_once '../Model/DTO/UsuarioDTO.php';
require_once '../Model/DAO/UsuarioDAO.php';
require_once '../Control/listarUsuariosController.php';

 $idUsu = $_GET["idUsu"];
var_dump($idUsu);

 $usuarioDAO = new UsuarioDAO();
 $retorno = $usuarioDAO->pesquisarUsuarioPorId($idUsu);

var_dump($retorno);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alteração de Cadastro</title>
</head>

<body>

  <h1>Alteração de Cadastro de Usuário</h1>
  <form name="alterarUsuario" id="alterarUsuario" action="../Control/alterarUsuarioController.php" method="POST">

    <input type="hidden" name="idUsuario" value="<?php echo $retorno["idUsu"]; ?>">
    <table width="1150px">
    <tr>
                    <th>Nome: <input type="text" name="nomeUsuario" id="sobrenomeUsu"
                            value="<?php echo $retorno["nomeUsu"]; ?>" required><br></th>
                    <th>
                        Sobrenome: <input type="text" name="sobrenomeUsu" id="sobrenomeUsu"
                            value="<?php echo $retorno["sobrenomeUsu"]; ?>" required><br></th>
                    <th> Email: <input type="email" name="emailUsu" id="emailUsu"
                            value="<?php echo $retorno["emailUsu"]; ?>" required><br></th>
                    <th>Perfil: <input type="text" name="PerfilUsu" id="perfilUsu"
                            value="<?php echo $retorno["perfilUsu"]; ?>"><br></th>
                    <th>Situação: <input type="text" name="situacaoUsu" id="senhaUsu" value="<?php echo $retorno["perfilUsu"]; ?>" ><br></th>
                    <th>Telefone: <input type="text" name="telefoneUsu" id="telefoneUsu" value="<?php echo $retorno["telefoneUsu"]; ?>" ><br></th>
                </tr>

                <input type="submit" value="Salvar Alteração">
  </form>
</table>
</body>

</html> 