<?php
require_once '../Control/listarUsuariosController.php';
require_once '../Control/excluirUsuarioController.php';
require_once '../Control/alterarUsuarioController.php';
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
    <link href="../_cdn/listarUsuarios.css" rel="stylesheet" />
    <title>Meraki Moda Feminina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.delete-user').click(function(e) {
            e.preventDefault();
            var userId = $(this).data('id');
            var tableRow = $(this).closest('tr');
            if (confirm('Tem certeza que deseja excluir este usuário?')) {
                $.ajax({
                    url: '../Control/excluirUsuarioController.php',
                    type: 'GET',
                    data: { idUsu: userId },
                    success: function(response) {
                        alert('Usuário excluído com sucesso!');
                        tableRow.remove();
                    },
                    error: function() {
                        alert('Erro ao excluir usuário.');
                    }
                });
            }
        });
    });
    </script>
</head>

<body>
    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img width="150" height="150" src="../img/logo.png" alt="Meraki Moda Feminina" title="Meraki Moda Feminina" />
            </a>
            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="opcao.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="list_container">
        <h1>Listagem de Usuários</h1>
    </div>

    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Perfil</th>
            <th>Situação</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php foreach ($todos as $t) : ?>
        <tr>
            <td><?= htmlspecialchars($t['nomeUsu']); ?></td>
            <td><?= htmlspecialchars($t['sobrenomeUsu']); ?></td>
            <td><?= htmlspecialchars($t['emailUsu']); ?></td>
            <td><?= htmlspecialchars($t['telefoneUsu']); ?></td>
            <td><?= htmlspecialchars($t['perfilUsu']); ?></td>
            <td><?= htmlspecialchars($t['situacaoUsu']); ?></td>
            <td><button onclick="window.location.href = 'alterarUsuario.php?idUsu=<?= $t['idUsu']; ?>';">&#9998;</button></td>
            <td><button><a href="#" class="delete-user" data-id="<?= $t['idUsu']; ?>">&#10008;</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
