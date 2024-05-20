
<?php
session_start();
?>
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
        <img src="img/logo.png" alt="Bem vindo(a) ao E-commerce Meraki" width="150px"
          title="Bem vindo(a) ao E-commerce Meraki"></a>
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
        <?php else: ?>
          <li><a href="View/cadastrarUsu.php">Cadastre-se</a></li>
          <li><a href="View/loginUsu.php">Login</a></li>
        <?php endif; ?>
        <li><a href="View/carrinho.php" class="icon-cart"></a></li>
      </ul>
      </nav>
    </div>
  </header>
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
          <p>Elegância em Cada Costura, Feminilidade em Cada Detalhe!</p>
          <p><a href="#optin" class="btn">Saiba Mais</a></p>
        </div>
      </article>
    </div>
    
    <!--FIM 1ª DOBRA-->
     <!-- INICIO CATEGORIAS   -->
     <div class="categories">
      <div class="category">
        <h2>Vestidos</h2>
        <div class="main_content_image">
          <img src="img/cvestido.png" alt="Vestido" />
        </div>
      </div>
      <div class="category">
        <h2>Saias</h2>
        <div class="main_content_image">
          <img src="img/csaia.png" alt="Saia" />
        </div>
      </div>
      <div class="category">
        <h2>Blusas</h2>
        <div class="main_content_image">
          <img src="img/cblusa.png" alt="Blusa" />
        </div>
      </div>
      <div class="category">
        <h2>Calças</h2>
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
      
        <article>
        <a href="#">
          <img src="img/blusa1.jpg" width="200" height="320" alt="Imagem Blusa" title="Blusa">
      </a>
      <p><a href="" class="category">Blusa</a></p>
      <h2><a href="#">
  Blusa Canelada
        </a></h2>
      <p class="price">R$ 39,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/blusa2.jpg" width="200" height="320" alt="Imagem Blusa" title="Blusa">
      </a>
      <p><a href="" class="category">Blusa</a></p>
      <h2><a href="#">
          Blusa Estampada
        </a></h2>
      <p class="price">R$ 49,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/blusa3.jpg" width="200" height="320" alt="Imagem Blusa" title="Blusa">
      </a>
      <p><a href="" class="category">Blusa</a></p>
      <h2><a href="#">
      Blusa Branca
        </a></h2>
      <p class="price">R$ 69,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/blusa4.jpg" width="200" height="320" alt="Imagem Blusa" title="Blusa">
      </a>
      <p><a href="" class="category">Blusa</a></p>
      <h2><a href="#">
         Blusa Creme
        </a></h2>
      <p class="price">R$ 59,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
          <a href="#">
            <img src="img/vest2.jpg" width="200" height="320" alt="Imagem Vestido" title="Vestido">
          </a>
          <p><a href="" class="category">Vestido</a></p>
          <h2><a href="#">
            Vestido Azul
        </a></h2>
      <p class="price">R$ 99,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
          <a href="#">
            <img src="img/vest1.jpg" width="200" height="320" alt="Imagem Vestido" title="Vestido">
      </a>
      <p><a href="" class="category">Vestido</a></p>
      <h2><a href="#">
          Vestido Longo Amarelo
        </a></h2>
      <p class="price">R$ 109,99</p>
      <div class="actions">
        <button class="icon-cart"></button>
        <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/vest3.jpg" width="200" height="320" alt="Imagem Vestido" title="Vestido">
        </a>
        <p><a href="" class="category">Vestido</a></p>
        <h2><a href="#">
          Vestido Florido
        </a></h2>
      <p class="price">R$99,99</p>
      <div class="actions">
        <button class="icon-cart"></button>
        <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
    </article>
        <article>
          <a href="#">
          <img src="img/vest4.jpg" width="200" height="320" alt="Imagem Vestido" title="Vestido">
        </a>
        <p><a href="" class="category">Vestido</a></p>
        <h2><a href="#">
          Vestido Vermelho
        </a></h2>
        <p class="price">R$ 169,99</p>
        <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
    </article>
    <article>
        <a href="#">
          <img src="img/c1.jpg" width="200" height="320" alt="Imagem Calça" title="Calça">
        </a>
        <p><a href="" class="category">Calça</a></p>
        <h2><a href="#">
        Calça Preta
        </a></h2>
        <p class="price">R$ 199,99</p>
        <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
        </div>
    </article>
        <article>
        <a href="#">
          <img src="img/c2.jpg" width="200" height="320" alt="Imagem Calça" title="Calça">
      </a>
      <p><a href="" class="category">Calça</a></p>
      <h2><a href="#">
      Calça Jeans

        </a></h2>
      <p class="price">R$ 159,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        </article>
        <article>
        <a href="#">
          <img src="img/c3.jpg" width="200" height="320" alt="Imagem Calça" title="Calça">
      </a>
      <p><a href="" class="category">Calça</a></p>
      <h2><a href="#">
      Calça Cargo
        </a></h2>
      <p class="price">R$ 189,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/c4.jpg" width="200" height="320" alt="Imagem Calça" title="Calça">
      </a>
      <p><a href="" class="category">Calça</a></p>
      <h2><a href="#">
         Calça Tactel
        </a></h2>
      <p class="price">R$ 199,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/saia1.jpg" width="200" height="320" alt="Imagem Saia" title="Saia">
      </a>
      <p><a href="" class="category">Saia</a></p>
      <h2><a href="#">
         Saia Xadrez
        </a></h2>
      <p class="price">R$ 89,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
          <a href="#">
          <img src="img/saia2.jpg" width="200" height="320" alt="Imagem Saia" title="Saia">
      </a>
      <p><a href="" class="category">Calça</a></p>
      <h2><a href="#">
      Saia Cáqui        
    </a></h2>
      <p class="price">R$ 99,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
          <a href="#">
          <img src="img/saia3.jpg" width="200" height="320" alt="Imagem Saia" title="Saia">
      </a>
      <p><a href="" class="category">Saia</a></p>
      <h2><a href="#">
      Saia Preta
        </a></h2>
      <p class="price">R$ 109,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
        <article>
        <a href="#">
          <img src="img/saia4.jpg" width="200" height="320" alt="Imagem Saia" title="Saia">
      </a>
      <p><a href="" class="category">Saia</a></p>
      <h2><a href="#">
         Saia Mid
        </a></h2>
      <p class="price">R$ 149,99</p>
      <div class="actions">
          <button class="icon-cart"></button>
          <div class="main_content_button_buy"><button onclick="buyNow()">Comprar Agora</button></div>
      </div>
        </article>
</div>
    </section>

    <!--FIM SESSÃO SESSÃO DE ARTIGOS-->

    <!-- INICIO ALTERNAR PAGINAS-->
     <nav aria-label="pageNavigation" >
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Página Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
      
        <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
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
