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
    <link href="../_cdn/listarUsuarios.css" rel="stylesheet" />
    <title>Meraki Moda Feminina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.delete-user').click(function(e) {
            e.preventDefault();
            var userId = $(this).data('id');
            var tableRow = $(this).closest('tr'); // Encontre a linha da tabela onde o botão foi clicado
            if(confirm('Tem certeza que deseja excluir este usuário?')) {
                $.ajax({
                    url: '../Control/excluirForController.php',
                    type: 'GET',
                    data: { idFor: userId },
                    success: function(response) {
                        alert('Usuário excluído com sucesso!');
                        tableRow.remove(); // Remova a linha da tabela após excluir o usuário
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
        <h1>Listagem de Dados</h1>
    </div>

    <table>
        <tr>
            <th>Nome</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php foreach ($todos as $t) : ?>
        <tr>
            <td><?= htmlspecialchars($t['nomeFor']); ?></td>
            <td><?= htmlspecialchars($t['emailFor']); ?></td>
            <td><?= htmlspecialchars($t['telefoneFor']); ?></td>
            <td><button onclick="window.location.href = 'alterarFornecedor.php?idFor=<?= $t['idFor']; ?>';">&#9998;</button></td>
            <td><button><a href="#" class="delete-user" data-id="<?= $t['idFor']; ?>">&#10008;</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
