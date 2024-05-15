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
  <link rel="stylesheet" href="../_cdn/boot.css">
  <link rel="stylesheet" href="../_cdn/style.css">
  <link rel="stylesheet" href="../_cdn/fonticon.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
  <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>Carrinho de Compras</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="../_cdn/carrinho.css" />
    
  
  </head>
  <body>
     <!-- INICIO CABEÇALHO -->
  <header class="main_header">
    <div class="main_header_content">
      <a href="../View/indexAdm.php" class="logo">
        <img width="150" height="150" src="../img/logo.png" alt="Meraki Moda Feminina" title="Meraki Moda Feminina" />
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
    <main>
      <!-- Start DEMO HTML (Use the following code into your project)-->
      <header id="site-header">
        <div class="container">
          <h1>
            Carrinho de Compras <span>[</span> <em>Meraki Moda Feminina</em>
            <span class="last-span is-open">]</span>
          </h1>
        </div>
      </header>

      <div class="container">
        <section id="cart">
          <article class="product">
            <header>
              <a class="remove">
                <img src="../img/post8.jpg" alt="Blusa" />

                <h3>Remover Produto</h3>
              </a>
            </header>

            <div class="content">
              <h1></h1>

			  <label for="size">Escolha o tamanho:</label>
			  <select id="size">
				<option value="P">P</option>
				<option value="M">M</option>
				<option value="G">G</option>
				<option value="GG">GG</option>
			  </select>

              <div
                title="You have selected this product to be shipped in the color yellow."
                style="top: 0"
                class="color yellow"
              ></div>
              <div style="top: 43px" class="type small"></div>
            </div>

            <footer class="content">
              <span class="qt-minus">-</span>
              <span class="qt">1</span>
              <span class="qt-plus">+</span>

              <h2 class="full-price">R$29,99</h2>

              <h2 class="price">R$29,99</h2>
            </footer>
          </article>

          <article class="product">
            <header>
              <a class="remove">
                <img src="../img/saia.jpg" alt="Calça" />

                <h3>Remover Produto</h3>
              </a>
            </header>

            <div class="content">
              <h1>Saia Xadrez</h1>

              <label for="size">Escolha o tamanho:</label>
  <select id="size">
    <option value="P">P</option>
    <option value="M">M</option>
    <option value="G">G</option>
    <option value="GG">GG</option>
  </select>

              <div
                title="You have selected this product to be shipped in the color red."
                style="top: 0"
                class="color red"
              ></div>
              <div
                title="You have selected this product to be shipped sized Small."
                style="top: 43px"
                class="type small"
              >
			  
              </div>
            </div>

            <footer class="content">
              <span class="qt-minus">-</span>
              <span class="qt">1</span>
              <span class="qt-plus">+</span>

              <h2 class="full-price">R$49,99</h2>

              <h2 class="price">R$49,99</h2>
            </footer>
          </article>

		  <article class="product">
			<header>
			  <a class="remove">
				<img src="../img/vest2.jpg" alt="Vestido" />
				<h3>Remover Produto</h3>
			  </a>
			</header>
			<div class="content">
			  <h1>Vestido Longo Amarelo</h1>
			  <label for="size">Escolha o tamanho:</label>
			  <select id="size">
				<option value="P">P</option>
				<option value="M">M</option>
				<option value="G">G</option>
				<option value="GG">GG</option>
			  </select>
			  <div title="Blusa" style="top: 0" class="color blue"></div>
			  <div style="top: 43px" class="type small"></div>
			</div>
			<footer class="content">
			  <span class="qt-minus">-</span>
			  <span class="qt">1</span>
			  <span class="qt-plus">+</span>
			  <h2 class="full-price">R$109,99</h2>
			  <h2 class="price">R$109,99</h2>
			</footer>
		  </article>
		  <div id="cart-total">
           
            <a href="../View/finalizarCompra.php"><button onclick="checkout()">Finalizar Compra</button></a>
        </div>
      <!-- END EDMO HTML (Happy Coding!)-->
    </main>
<!-- 
    <footer class="main_optin_footer">
      <p>&copy;MKM - Todos os direitos reservados.<a
        title="Awesome web design code & scripts"
        href="index.php"
        target="_blank"
        ></a
      ></p>
      
    </footer> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../_cdn/carrinho.js"></script>
  </body>
</html>
