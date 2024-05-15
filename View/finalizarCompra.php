<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../_cdn/cboot.css" />
  <link rel="stylesheet" href="../_cdn/finalizar.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <title>Finalizar Compra</title>
</head>

<body>
  <main class="container">
    <!-- <div class="imagem">
      <img src="../img/cad.svg" alt="cadastro" />
      <div class="login">
        <a href="../View/loginUsu.php">Login</a>
      </div>
    </div> -->

    <div class="form">
      <header>
        <h1>Finalizar Compra</h1>
      </header>
      <form  action="../Control/finalizarController.php" id="finalizar">
      <div class="back">
        <a href="../View/carrinho.php">Voltar</a>
      </div>
        <div class="cont">
          <div class="form-align">
            <div class="form-align">
              <label for="nome">Nome</label>
              <input id="nomeUsu" name="nomeUsu" type="text" placeholder="Digite seu nome" required />
            </div>

            <div class="form-align">
              <label for="sobrenome">Sobrenome</label>
              <input id="sobrenomeUsu" name="sobrenomeUsu" type="text" placeholder="Digite seu sobrenome" required />
            </div>
          </div>

          <div class="form-align">
            <div class="form-align">
              <label for="email">E-mail</label>
              <input id="emailUsu" type="email" name="emailUsu" placeholder="Digite seu e-mail" required />
            </div> 

            <div class="form-align">
              <label for="telefoneUsu"> Celular</label>
              <input id="telefoneUsu" name="telefoneUsu" type="tel" placeholder="(xx) xxxxx-xxxx" required
                maxlength="11" />
            </div>
          </div>

          <div class="form-align">
            <div class="form-align">
              <label for="cepUsu">CEP</label>
              <input id="cepUsu" type="text" name="cepUsu" placeholder="Digite seu CEP" required maxlength="8" />
            </div>

            <div class="form-align">
              <label for="enderecoUsu">Endereço</label>
              <input id="enderecoUsu" name="enderecoUsu" type="text"
                placeholder="Digite seu endereço" required />
            </div>
            <div class="form-align">
              <label for="numeroUsu">Número</label>
              <input id="numeroUsu" name="numeroUsu" type="number"
                placeholder="Digite o número" required />
            </div>
            <div class="form-align">
              <label for="complementoUsu">Complemento</label>
              <input id="complementoUsu" name="complementoUsu" type="text"
                placeholder="Digite o complemento" />
            </div>
            <div class="form-align">
              <label for="bairroUsu">Bairro</label>
              <input id="bairroUsu" name="numeroUsubairroUsu" type="text"
                placeholder="Digite o bairro" required />
            </div>
            <div class="form-align">
              <label for="cidadeUsu">Cidade</label>
              <input id="cidadeUsu" name="cidadeUsu" type="text"
                placeholder="Digite a cidade" required />
            </div>
            <div class="form-align">
            <label for="ufUsu">UF</label>
    <select id="ufUsu" name="ufUsu" required>
        <option value="" selected disabled>Selecione a UF</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
    </select>
            </div>
          </div>
        </div>
        <div class="botao">
        <input id="prosseguir" type="submit" value="Prosseguir">

        </div>
        <input type="hidden" name="perfilUsu" value="Cliente">
        <input type="hidden" name="situacaoUsu" value="Ativo">
      </form>
    </div>
  </main>

  
</body>

</html>

</body>
</html>