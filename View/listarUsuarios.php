<?php
require_once '../Control/listarUsuariosController.php';
require_once '../Control/excluirUsuarioController.php';
require_once '../Control/alterarUsuarioController.php';
//echo '<pre>';
//var_dump($todos);
?>

</html>
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
    <link href="../_cdn/list_format.css" rel="stylesheet" />

    <title>Meraki Moda Feminina</title>
</head>

<body>
    <!-- INICIO CABEÇALHO -->
    <header class="main_header">
        <div class="main_header_content">
            <a href="cadastrarUsu.php" class="logo">
                <img width="150" height="150" src="../img/logo.png" alt="Meraki Moda Feminina"
                    title="Meraki Moda Feminina" />
            </a>
            <nav class="main_header_content_menu">
                <ul>
                    <li>
                        <a href="../index.php">Voltar</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- FIM CABEÇALHO -->
    <div class="list_container">
        <h1>Listagem de Dados</h1>
       
    </div>
    <?php
    foreach ($todos as $t) { ?>

        <!-- Exibir o nome do usuário -->
        Nome:
        <?php echo $t['nomeUsu']; ?>


        <!-- Link para editar o usuário -->
        <a href="alterarUsuario.php?idUsu=<?php echo $t['idUsu']; ?>">&#9998;</a>

        <!-- Link para excluir o usuário -->
        <a href="../Control/excluirUsuarioController.php?idUsu=<?php echo $t['idUsu']; ?>"> &#10008;</a>
        </br>
    <?php } ?>


    
</body>