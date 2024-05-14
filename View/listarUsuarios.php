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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
                        <a href="../View/indexAdm.php">Voltar</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- FIM CABEÇALHO -->
    <div class="list_container">
        <h1>Listagem de Dados</h1>
       
    </div>
    <table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($todos as $t): ?>
        <tr>
            <td><?php echo $t['nomeUsu']; ?></td>
            <td><?php echo $t['sobrenomeUsu']; ?></td>
            <td><?php echo $t['emailUsu']; ?></td>
            <td><?php echo $t['telefoneUsu']; ?></td>
            <td>
                <!-- Link para editar o usuário -->
               
                <button onclick="confirmEdit(<?php echo $t['idUsu']; ?>)">&#9998; Editar</button>
<button onclick="confirmDelete(<?php echo $t['idUsu']; ?>)">&#10008; Excluir</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmEdit(idUsu) {
        Swal.fire({
            title: "Editar Usuário",
            text: "Deseja realmente editar este usuário?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Sim",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "alterarUsuario.php?idUsu=" + idUsu;
            }
        });
    }

    function confirmDelete(idUsu) {
        Swal.fire({
            title: "Excluir Usuário",
            text: "Deseja realmente excluir este usuário?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sim, Excluir"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../Control/excluirUsuarioController.php?idUsu=" + idUsu;
            }
        });
    }
</script>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


    
</body>