
<?php
session_start();
?>
<?php
// Array com os dados das imagens
$imagens = [
    ['src' => 'img/blusa1.jpg', 'category' => 'Blusa', 'title' => 'Blusa Canelada', 'price' => 'R$ 39,99'],
    ['src' => 'img/blusa2.jpg', 'category' => 'Blusa', 'title' => 'Blusa Estampada', 'price' => 'R$ 49,99'],
    ['src' => 'img/blusa3.jpg', 'category' => 'Blusa', 'title' => 'Blusa Branca', 'price' => 'R$ 69,99'],
    ['src' => 'img/blusa4.jpg', 'category' => 'Blusa', 'title' => 'Blusa Creme', 'price' => 'R$ 59,99'],
    ['src' => 'img/vest2.jpg', 'category' => 'Vestido', 'title' => 'Vestido Azul', 'price' => 'R$ 99,99'],
    ['src' => 'img/vest1.jpg', 'category' => 'Vestido', 'title' => 'Vestido Longo Amarelo', 'price' => 'R$ 109,99'],
    ['src' => 'img/vest3.jpg', 'category' => 'Vestido', 'title' => 'Vestido Florido', 'price' => 'R$ 99,99'],
    ['src' => 'img/vest4.jpg', 'category' => 'Vestido', 'title' => 'Vestido Vermelho', 'price' => 'R$ 169,99'],
    ['src' => 'img/c1.jpg', 'category' => 'Calça', 'title' => 'Calça Preta', 'price' => 'R$ 199,99'],
    ['src' => 'img/c2.jpg', 'category' => 'Calça', 'title' => 'Calça Jeans', 'price' => 'R$ 159,99'],
    ['src' => 'img/c3.jpg', 'category' => 'Calça', 'title' => 'Calça Cargo', 'price' => 'R$ 189,99'],
    ['src' => 'img/c4.jpg', 'category' => 'Calça', 'title' => 'Calça Tactel', 'price' => 'R$ 199,99'],
    ['src' => 'img/saia1.jpg', 'category' => 'Saia', 'title' => 'Saia Xadrez', 'price' => 'R$ 89,99'],
    ['src' => 'img/saia2.jpg', 'category' => 'Saia', 'title' => 'Saia Cáqui', 'price' => 'R$ 99,99'],
    ['src' => 'img/saia3.jpg', 'category' => 'Saia', 'title' => 'Saia Preta', 'price' => 'R$ 109,99'],
    ['src' => 'img/saia4.jpg', 'category' => 'Saia', 'title' => 'Saia Mid', 'price' => 'R$ 149,99']
];


// Inicializa a variável de busca
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$category = isset($_GET['category']) ? trim($_GET['category']) : '';

// Filtrando as imagens com base na busca e na categoria
$imagens_filtradas = $imagens;

if ($search !== '') {
    $imagens_filtradas = array_filter($imagens_filtradas, function($img) use ($search) {
        return stripos($img['title'], $search) !== false || stripos($img['category'], $search) !== false;
    });
}

if ($category !== '') {
    $imagens_filtradas = array_filter($imagens_filtradas, function($img) use ($category) {
        return stripos($img['category'], $category) !== false;
    });
}

// Determinar a página atual
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$imagens_por_pagina = 8;
$offset = ($pagina_atual - 1) * $imagens_por_pagina;

// Selecionando as imagens para a página atual
$imagens_pagina_atual = array_slice($imagens_filtradas, $offset, $imagens_por_pagina);

// Total de páginas
$total_paginas = ceil(count($imagens_filtradas) / $imagens_por_pagina);
?>

<!-- // Filtrando as imagens com base na busca
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
if ($search !== '') {
    $imagens = array_filter($imagens, function($img) use ($search) {
        return stripos($img['title'], $search) !== false || stripos($img['category'], $search) !== false;
    });
}

// Separando as imagens por categoria
$vestidos_e_blusas = array_filter($imagens, function($img) {
    return in_array($img['category'], ['Vestido', 'Blusa']);
});

$calcas_e_saias = array_filter($imagens, function($img) {
    return in_array($img['category'], ['Calça', 'Saia']);
});

// Determinar a página atual
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$imagens_por_pagina = 8;
$offset = ($pagina_atual - 1) * $imagens_por_pagina;

// Selecionando as imagens de acordo com a categoria
if ($pagina_atual == 1) {
    $imagens_pagina_atual = array_slice($vestidos_e_blusas, $offset, $imagens_por_pagina);
} else if ($pagina_atual == 2) {
    $imagens_pagina_atual = array_slice($calcas_e_saias, $offset - count($vestidos_e_blusas), $imagens_por_pagina);
} else {
    // Se estiver em uma página além da primeira e segunda, mostra todas as imagens de acordo com a página
    $imagens_pagina_atual = array_slice($imagens, $offset, $imagens_por_pagina);
}

// Total de páginas
$total_paginas = ceil(count($imagens) / $imagens_por_pagina);

?> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="_cdn/boot.css">
  <link rel="stylesheet" href="_cdn/style.css">
  <link rel="stylesheet" href="_cdn/fonticon.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
  <link rel="icon" href="img/logo.png" type="image/icon type">
  <title>Meraki Moda Feminina</title>
</head>

<body>
  <!--DOBRA CABEÇALHO-->
  <header class="main_header">
    <div class="main_header_content">
      <a href="#" class="logo">
        <img src="img/logo.png" alt="Bem vindo(a) ao E-commerce Meraki" width="150px" title="Bem vindo(a) ao E-commerce Meraki">
      </a>
      <nav class="main_header_content_menu">
        <ul>
          <li><a href="#categorias">Categorias</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <?php if (isset($_SESSION['nomeUsu'])): ?>
            <li><span>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['nomeUsu']); ?>!</span></li>
            <li><a href="View/logout.php">Logout</a></li>
            <?php if ($_SESSION['perfilUsu'] == "Administrador"): ?>
              <li><a href="View/opcao.php">Painel ADM</a></li>
            <?php endif; ?>
            <li><a href="View/carrinho.php" class="icon-cart"></a></li>
          <?php else: ?>
            <li><a href="View/cadastrarUsu.php">Cadastre-se</a></li>
            <li><a href="View/loginUsu.php">Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>
</body>

  <!--FIM DOBRA CABEÇALHO-->

  <!--DOBRA PALCO PRINCIPAL-->
  <!--1ª DOBRA-->
  <main>
    <div class="main_cta">
      <article class="main_cta_content">
        <div class="main_cta_content_spacer">
          <header>
            <h1>Aqui você encontra tudo o que é necessário<br> para se vestir bem!</h1>
          </header>
          <!-- <p>Elegância em Cada Costura, Feminilidade em Cada Detalhe!</p> -->
          <p><a href="#optin" class="btn">Saiba Mais</a></p>
        </div>
      </article>
    </div>
    
    <!--FIM 1ª DOBRA-->
     <!-- INICIO CATEGORIAS   -->
     <div class="categories">
    <div class="category">
        <h2><a href="?category=Vestido">Vestidos</a></h2>
        <div class="main_content_image">
            <img src="img/cvestido.png" alt="Vestido" />
        </div>
    </div>
    <div class="category">
        <h2><a href="?category=Saia">Saias</a></h2>
        <div class="main_content_image">
            <img src="img/csaia.png" alt="Saia" />
        </div>
    </div>
    <div class="category">
        <h2><a href="?category=Blusa">Blusas</a></h2>
        <div class="main_content_image">
            <img src="img/cblusa.png" alt="Blusa" />
        </div>
    </div>
    <div class="category">
        <h2><a href="?category=Calça">Calças</a></h2>
        <div class="main_content_image">
            <img src="img/ccalca.png" alt="Calça" />
        </div>
    </div>
</div>
<!-- FIM CATEGORIAS  -->
    <!--INICIO SESSÃO SESSÃO DE ARTIGOS-->
    <section class="main_blog" id="categorias">
      <header class="main_blog_header">
        <h1>
          <span class="material-icons">shopping_cart
          </span>Nossas Últimas Promoções
        </h1>
        <p>Aqui você encontra as peças de moda essenciais para realçar seu estilo em sua jornada.</p>
      </header>
<div class="main_content_cart">
        <!-- Formulário de busca -->
  <div class="search_form">
    <form method="GET" action="">
      <input type="text" name="search" placeholder="Buscar produtos..." value="<?= htmlspecialchars($search, ENT_QUOTES); ?>">
      <button type="submit">Buscar</button>
    </form>
  </div>

<!-- Exibição dos produtos -->
<div class="main_content_cart">
    <?php foreach ($imagens_pagina_atual as $imagem) : ?>
        <article>
            <a href="#">
                <img src="<?= $imagem['src']; ?>" width="320" height="320" alt="Imagem <?= $imagem['category']; ?>" title="<?= $imagem['category']; ?>">
            </a>
            <p><a href="" class="category"><?= $imagem['category']; ?></a></p>
            <h2><a href="#"><?= $imagem['title']; ?></a></h2>
            <p class="price"><?= $imagem['price']; ?></p>
            <div class="actions">
                <button class="icon-cart"></button>
                <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
            </div>
        </article>
    <?php endforeach; ?>
</div>
    </section>

    <!--FIM SESSÃO SESSÃO DE ARTIGOS-->

<!-- INICIO ALTERNAR PAGINAS-->
<!-- Paginação -->
<nav aria-label="pageNavigation">
    <ul class="pagination">
        <?php if ($pagina_atual > 1): ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?= $pagina_atual - 1; ?>&search=<?= urlencode($search); ?>">Página Anterior</a></li>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
            <li class="page-item <?= ($i == $pagina_atual) ? 'active' : ''; ?>"><a class="page-link" href="?pagina=<?= $i; ?>&search=<?= urlencode($search); ?>"><?= $i; ?></a></li>
        <?php endfor; ?>
        
        <?php if ($pagina_atual < $total_paginas): ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?= $pagina_atual + 1; ?>&search=<?= urlencode($search); ?>">Próxima</a></li>
        <?php endif; ?>
    </ul>
</nav>
        <!--FIM ALTERNAR PÁGINAS -->

    

    <!--INICIO SESSÃO NAVIGATION-->
    <article class="opt_in">

      <div class="opt_in_content" id="vip">
        
          <header>
            <h1>Quer receber todas as novidades em seu e-mail?</h1>
            <p>Informe o seu nome e e-mail no campo ao lado e clique em Ok!</p>
          </header>
          
          
              <form>
                <input type="text" placeholder="Seu nome">
                <input type="email" placeholder="Seu email">
                <button type="submit">Ok</button>
              </form>
            
       </div>
        
      

    </article>

    <!--FIM SESSÃO OPTIN-->

    <!-- INICIO SESSÃO DOBRA  CURSOS-->
    <section class="main_course" id="optin">
      <header class="main_course_header">
        <img src="img/logo.png" width="250" alt="img" title="img">
        
        <h1 class="icon-cart"> Moda que Fala por Você!</h1>
        <p>Onde Cada Peça de Roupa é uma Declaração de Estilo e Personalidade no seu Interior.</p>
      </header>

      <div class="main_course_content">
        <article>
          <header>
            <h2>Compra 100% Online</h2>
            <p>Explore agora e transforme seu estilo com elegância e sofisticação! Descubra uma Coleção Exclusiva de
              Moda Feminina, onde a qualidade é prioridade e o estilo é incomparável.</p>
          </header>
        </article>
        <article>
          <header>
            <h2>Conheça a Garantia de Qualidade</h2>
            <p>Todos os nossos produtos são cuidadosamente selecionados para garantir a máxima qualidade. Com materiais
              premium e designs exclusivos, cada peça é uma declaração de estilo e sofisticação.</p>
          </header>
        </article>
        <article>
          <header>
            <h2>Vista-se com Confiança</h2>
            <p>Nossas sessões de fotos são realizadas em estúdios profissionais, garantindo imagens e vídeos de alta
              qualidade. Assim, você pode visualizar cada detalhe antes de fazer sua escolha, garantindo que cada compra
              seja uma experiência gratificante.</p>
          </header>
        </article>
        <article>
          <header>
            <h2>Conquiste seu estilo Global</h2>
            <p>Explore nossa coleção exclusiva de moda feminina! Ao finalizar sua compra, receba um certificado de
              estilo reconhecido em todo o continente latino-americano. </p>
          </header>
        </article>
      </div>

      <!-- FIM SESSÃO DOBRA  CURSOS-->

      <!--INICIO DOBRA REVIEWS-->

      <div class="main_course_fullwidth" id="reviews">
        <div class="main_course_fullwidth_content">
          <article class="main_course_ratting_title">
            <header>
              <h2>A moda é uma forma poderosa de revelar sua verdadeira essência.</h2>
            </header>
            <img src="img/star.png" alt="Estrela" title="Estrela">
            <img src="img/star.png" alt="Estrela" title="Estrela">
            <img src="img/star.png" alt="Estrela" title="Estrela">
            <img src="img/star.png" alt="Estrela" title="Estrela">
            <img src="img/star.png" alt="Estrela" title="Estrela">
          </article>
          <section class="main_course_ratting_content_comment">
            <header>
              <h2>Site considerado 5 estrelas por nossos clientes:</h2>
            </header>
            <article>
              <header>
                <h3>Ana Oliveira</h3>
                <p>15/04/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>"A qualidade é impecável e o atendimento da loja é super atencioso."</p>
            </article>
            <article>
              <header>
                <h3>Carolina Santos</h3>
                <p>06/04/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>"Recebi meus produtos antes do prazo, recomendo demais!"</p>
            </article>
            <article>
              <header>
                <h3>Juliana Pereira</h3>
                <p>03/05/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>"Entregam exatamente o que prometem. Comprarei novamente com certeza!"</p>
            </article>
            <article>
              <header>
                <h3>Maria Silva</h3>
                <p>10/02/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>“A loja tem uma variedade incrível de produtos. Recomendo a todos os meus amigos.”</p>
            </article>
            <article>
              <header>
                <h3>Tiago Soares</h3>
                <p>15/04/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>“Comprei um presente para minha mãe e ela adorou. A qualidade é excepcional!”</p>
            </article>
            <article>
              <header>
                <h3>Bruna Almeida</h3>
                <p>22/05/2024</p>
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
                <img src="img/star.png" alt="Imagem" title="Imagem">
              </header>
              <p>“Os produtos são incríveis! A entrega foi rápida e o atendimento ao cliente é excelente.”</p>
            </article>
          </section>
        </div>
      </div>


    </section>
    </section>
    <!--DOBRA A ESCOLA-->
    <div class="main_school">
      <section class="main_school_content">
        <header class="main_school_header" id="contato">
          <h1>Bem vindo ao E-commerce Meraki  </h1>
          <p>Esteja sempre por dentro das últimas tendências da moda feminina.</p>
        </header>
        <div class="main_school_content_left">
          <article class="main_school_content_left_content">
            <header>
              <p>
                <span class="icon-facebook"><a href="#"target="_blank" >Facebook</a>&nbsp;</span>
                <span class="icon-instagram"><a href="https://www.instagram.com/sttoremeraki?igsh=MWFnZTBma25wc2lnYw==" target="_blank" >Instagram</a>
              </p>
              <h2>
                Descubra a excelência em cada peça da nossa seleção de roupas, meticulosamente escolhidas para garantir
                uma qualidade excepcional, feita especialmente para você.
              </h2>
            </header>
            <p>
              Qualidade impecável é o nosso lema. Nossas roupas são como poções mágicas, criadas especialmente para
              você. Acesse nosso catálogo e desvende os segredos das Vestes Encantadas. Explore a moda com olhos de
              feiticeira e torne-se uma verdadeira mestra da elegância.
            </p>
            <p>
              Nossa coleção de roupas é um verdadeiro tesouro de excelência. Cada costura, cada tecido, tudo foi
              escolhido com precisão para garantir que você tenha o melhor.
            </p>
          </article>
          <section class="main_school_list">
            <header>
              <h2>Confira nossos produtos mais bem avaliados</h2>
            </header>
            <article>
              <header>
                <h3 class="icon-trophy">
                  Vestido Longo Amarelo
                </h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">Blusa Estampada
                </h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">
                  Vestido Florido
                </h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">Blusa Estampada Azul</h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">
                Calça Tactel
                </h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">Saia Mid
                </h3>
              </header>
            </article>
            <article>
              <header>
                <h3 class="icon-trophy">Blusa Creme
                </h3>
              </header>
            </article>
          </section>
        </div>
        <div class="main_school_content_right">
          <img src="img/logo.png" width="200" alt="Imagem" title="Imagem" />
        </div>

        <article class="main_school_adress">
          <header>
            <h2 class="icon-map2">Nos Encontre</h2>
          </header>
          <p>St. N, Área Especial QNN 14 - Ceilândia, Brasília - DF</p>
        </article>
      </section>
    </div>

    <!-- INICIO DOBRA TUTOR -->
    <section class="main_tutor">
      <div class="main_tutor_content">
        <header>
          <h1>Conheça a perfeição em cada detalhe das nossas peças.</h1>
          <p>Navegue pelo nosso site e escolha as roupas perfeitas para você, tudo isso sem sair de casa.</p>
        </header>
        <div class="main_tutor_content_img">
          <img src="img/ecommerce.png" width="200" title="ecommerce" alt="ecommerce" />
        </div>
        <article class="main_tutor_content_history">
          <header>
            <h2>A qualidade é nossa prioridade número um.</h2>
          </header>
          <p>Precisa de ajuda? Estamos aqui para você. Entre em contato pelo Atendimento ao Cliente, confira seus
            pedidos, saiba mais sobre trocas e devoluções ou veja nossas formas de pagamento.
            Faça sua compra agora e desfrute da garantia de entrega.
            E mais, compre em até 3x sem juros!

          </p>
        </article>
        <!-- Inicio redes sociais -->
        <section class="main_tutor_social_network">
          <header>
            <h2>Não perca as novidades, siga-nos no Instagram.</h2>
          </header>
          <article>
            <header>
              <h3><a href="https://www.instagram.com/sttoremeraki?igsh=MWFnZTBma25wc2lnYw==" class="icon-instagram" target="_blank" >Instagram</a></h3>
            </header>
          </article>
        </section>
        <!-- Fim redes sociais -->
      </div>
    </section>
    <!-- Fim dobra Tutor -->
  </main>
  <!--FIM DOBRA PALCO PRINCIPAL-->

  <section class="main_optin_footer" >
    <div class="main_optin_footer_content">
      <header>
        <h1>
          Quer receber descontos exclusivos? Assine nossa lista VIP :)
        </h1>
      </header>
      <article>
        <header>
          <h2><a href="#vip" class="btn">Entrar para a lista VIP</a></h2>
        </header>
      </article>
    </div>
  </section>
  <!-- inicio dobra rodapé -->
  <section class="main_footer">
    <header>
      <h1>Quer saber mais?</h1>
    </header>

    <article class="main_footer_our_pages">
      <header>
        <h2>Nossas Páginas</h2>
      </header>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#categorias">Categorias</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="View/loginUsu.php">Login</a></li>

      </ul>
    </article>

    <article class="main_footer_links">
      <header>
        <h2>Links Úteis</h2>
      </header>
      <ul>
        <li><a href="#">Política de Privacidade</a></li>
        <li><a href="#">Aviso Legal</a></li>
        <li><a href="#">Termos de Uso</a></li>
      </ul>
    </article>

    <article class="main_footer_about">
      <header>
        <h2>Sobre o site</h2>
      </header>
      <p>
        Descubra como Criar Looks Online que Seguem as Últimas Tendências da Moda. Aprenda as Melhores Práticas para
        Garantir que Suas Páginas se Destaquem com Estilo e Qualidade!
      </p>
    </article>
  </section>
  <!-- fim dobra rodapé -->
  <footer class="main_footer_rights">
    <p> &copy;MKM - Todos os direitos reservados. </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('a[href="View/logout.php"]').click(function(e) {
        e.preventDefault();
        if (confirm('Você está prestes a encerrar sua sessão. Tem certeza que deseja sair?')) {
            window.location.href = $(this).attr('href');
        }
    });
});
</script>

</body>

</html>
