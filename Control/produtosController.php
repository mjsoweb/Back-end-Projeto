<?php
$page1 = array(
    array(
        'img' => 'img/blusa1.jpg',
        'alt' => 'Imagem Blusa',
        'title' => 'Blusa',
        'name' => 'Blusa Canelada Preta',
        'price' => 'R$ 39,99'
    ),
    array(
        'img' => 'img/blusa2.jpg',
        'alt' => 'Imagem Blusa Estampada',
        'title' => 'Blusa',
        'name' => 'Blusa Estampada',
        'price' => 'R$ 49,99'
    ),
    array(
        'img' => 'img/blusa3.jpg',
        'alt' => 'Imagem Blusa Branca',
        'title' => 'Blusa',
        'name' => 'Blusa Branca',
        'price' => 'R$ 69,99'
    ),
    array(
        'img' => 'img/blusa4.jpg',
        'alt' => 'Imagem Creme',
        'title' => 'Blusa',
        'name' => 'Blusa Creme',
        'price' => 'R$ 59,99'
    ),
    array(
        'img' => 'img/vest1.jpg',
        'alt' => 'Imagem Vestido',
        'title' => 'Vestido',
        'name' => 'Vestido Longo Amarelo',
        'price' => 'R$ 109,99'
    ),
    array(
        'img' => 'img/vest2.jpg',
        'alt' => 'Imagem Vestido',
        'title' => 'Vestido',
        'name' => 'Vestido Azul',
        'price' => 'R$ 99,99'
    ),
    array(
        'img' => 'img/vest3.jpg',
        'alt' => 'Imagem Vestido ',
        'title' => 'Vestido',
        'name' => 'Vestido Florido',
        'price' => 'R$ 99,99'
    ),
    array(
        'img' => 'img/vest4.jpg',
        'alt' => 'Imagem Vestido',
        'title' => 'Vestido',
        'name' => 'Vestido Vermelho',
        'price' => 'R$ 169,99'
    ),
    // adicione mais artigos conforme necessário
);


$page2 = array(
        array(
            'img' => 'img/c1.jpg',
            'alt' => 'Imagem Calça',
            'title' => 'Calça',
            'name' => 'Calça Preta',
            'price' => 'R$ 199,99'
        ),
        array(
            'img' => 'img/c2.jpg',
            'alt' => 'Imagem Calça',
            'title' => 'Calça',
            'name' => 'Calça Jeans',
            'price' => 'R$ 159,99'
        ),
        array(
            'img' => 'img/c3.jpg',
            'alt' => 'Imagem Calça',
            'title' => 'Calça',
            'name' => 'Calça Cargo',
            'price' => 'R$ 189,99'
        ),
        array(
            'img' => 'img/c4.jpg',
            'alt' => 'Imagem Calça',
            'title' => 'Calça',
            'name' => 'Calça Tactel',
            'price' => 'R$ 199,99'
        ),
        array(
            'img' => 'img/saia1.jpg',
            'alt' => 'Imagem Saia',
            'title' => 'Saia',
            'name' => 'Saia Xadez',
            'price' => 'R$ 89,99'
        ),
        array(
            'img' => 'img/saia2.jpg',
            'alt' => 'Imagem Saia',
            'title' => 'Saia',
            'name' => 'Saia Cáqui',
            'price' => 'R$ 99,99'
        ),
        array(
            'img' => 'img/saia3.jpg',
            'alt' => 'Imagem Saia ',
            'title' => 'Saia',
            'name' => 'Saia Preta',
            'price' => 'R$ 109,99'
        ),
        array(
            'img' => 'img/saia4.jpg',
            'alt' => 'Imagem Vestido',
            'title' => 'Saia',
            'name' => 'Saia',
            'price' => 'R$ 149,99'
        ),
        // adicione mais artigos conforme necessário
);
?>
<?php

// Definir o número de itens por página
$itemsPerPage = 8;

// Verificar se foi fornecido um parâmetro de página na URL
$page1 = isset($_GET['page']) ? $_GET['page'] : 1;

// Determinar qual array de página usar com base no número da página
$currentPage = $page1 == 1 ? $page1 : $page2;

// Calcular o índice inicial e final dos itens a serem exibidos
$start = ($page - 1) * $itemsPerPage;
$end = $start + $itemsPerPage;
$totalItems = count($currentPage);

// Limitar os itens ao intervalo calculado
$itemsToShow = array_slice($currentPage, $start, $itemsPerPage);

// Exibir os itens
foreach ($itemsToShow as $item) {
    echo '<div>';
    echo '<img src="' . $item['img'] . '" alt="' . $item['alt'] . '" title="' . $item['title'] . '">';
    echo '<h2>' . $item['name'] . '</h2>';
    echo '<p>' . $item['price'] . '</p>';
    echo '</div>';
}

// Exibir links de paginação
$totalPages = ceil($totalItems / $itemsPerPage);
echo '<div>';
for ($i = 1; $i <= $totalPages; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
echo '</div>';
?>
