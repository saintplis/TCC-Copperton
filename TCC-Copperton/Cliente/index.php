<?php

  if(isset($_POST['submit']))
  {
    // print_r('Nome: '. $_POST['nome']);
    // print_r('<br>');
    // print_r('Sobrenome: '. $_POST['sobrenome']);
    // print_r('<br>');
    // print_r('CPF: '. $_POST['cpf']);
    // print_r('<br>');
    // print_r('RG: '. $_POST['rg']);
    // print_r('<br>');
    // print_r('Data de Nascimento: '. $_POST['dtnasc']);
    // print_r('<br>');
    // print_r('Sexo: '. $_POST['sexo']);
    // print_r('<br>');
    // print_r('Estado Civil: '. $_POST['estadocivil']);
    // print_r('<br>');
    // print_r('E-mail: '. $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone 1: '. $_POST['telefone1']);
    // print_r('<br>');
    // print_r('Telefone 2: '. $_POST['telefone2']);
    // print_r('<br>');
    // print_r('Pais: '. $_POST['pais']);
    // print_r('<br>');
    // print_r('Estado: '. $_POST['estado']);
    // print_r('<br>');
    // print_r('cidade: '. $_POST['cidade']);
    // print_r('<br>');
    // print_r('endereco: '. $_POST['endereco']);
    // print_r('<br>');
    // print_r('numero: '. $_POST['numero']);
    // print_r('<br>');
    // print_r('senha: '. $_POST['senha']);
    // print_r('<br>');
    // print_r('confirmar: '. $_POST['confirmar']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $dtnasc = $_POST['dtnasc'];
    $estadocivil = $_POST['estadocivil'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO tb_cliente(CLI_NOME,CLI_SOBRENOME,CLI_CPF,CLI_RG,CLI_DTNASC,CLI_ESTADOCIVIL,CLI_TELEFONE1,CLI_TELEFONE2,CLI_PAIS,CLI_ESTADO,CLI_CIDADE,CLI_ENDERECO,CLI_NUMERO)
    VALUES ('$nome','$sobrenome','$cpf','$rg','$dtnasc','$estadocivil','$telefone1','$telefone2','$pais','$estado','$cidade','$endereco','$numero')");
  }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Copperton</title>
  </head>
  <body>
    <header class="cabecalho">
      <div class="cabecalho-menu">
        <img src="/Inicio/imagens/logotipo.png" class="cabecalho-logo">
        <ul>
          <li><a href="#">Produto <i class="fa fa-caret-down"></i></a>
          <div class="dropdown_menu">
            <ul>
              <li><a href="#">Camiseta</a></li>
              <li><a href="#">Calça</a></li>
              <li><a href="#">Moletom</a></li>
              <li><a href="#">Jaqueta</a></li>
              <li><a href="#">Boné</a></li>
              <li><a href="#">Gorro</a></li>
              <li><a href="#">Acessórios</a></li>
            </ul>
          </div>
          </li>
          <li><a href="#">Categoria <i class="fa fa-caret-down"></i></a>
            <div class="dropdown_menu">
              <ul>
                <li><a href="#">CS:GO</a></li>
                <li><a href="#">Valorant</a></li>
                <li><a href="#">Halo</a></li>
                <li><a href="#">Call of Duty</a></li>
                <li><a href="#">FIFA</a></li>
                <li><a href="#">Genshin</a></li>
                <li><a href="#">PUBG</a></li>
                <li><a href="#">Free Fire</a></li>
              </ul>
            </div>
            </li>
          <li><a href="/Sobre/code/index.html">Sobre</a></li>
          <li><a href="/Sobre/code/index.html">Contato</a></li>
          <li><a href="/Login/code/index.html">Login</a></li>
        </ul>
      </div>
    </header>
    <main>
        <form action="index.php" method="post">
          <h1>Cadastre-se Agora!<span>E desfrute de todos os benefícios da Copperton</span></h1>
          <div class="section"><span>1</span>Dados Pessoais</div>
          <div class="inner-wrap">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>
            <label for="cpf">CPF:</label>
            <input type="number" id="cpf" name="cpf" required>
            <label for="rg">RG:</label>
            <input type="number" id="rg" name="rg" required>
            <label for="dtnasc">Data de Nascimento:</label>
            <input type="date" id="dtnasc" name="dtnasc" required>
            <label for="sexo">Sexo:</label>
            <select name="sexo" required>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="O">Outro</option>
            </select>
            <label for="estadocivil">Estado Civil:</label>
            <select name="estadocivil" required>
              <option value="Solteiro">Solteiro</option>
              <option value="Casado">Casado</option>
              <option value="Separado">Separado</option>
              <option value="Divorciado">Divorciado</option>
              <option value="Viúvo">Viúvo</option>
              <option value="União Estável">União Estável</option>
            </select>
          </div>
          <div class="section"><span>2</span>Contato</div>
          <div class="inner-wrap">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="telefone1">Telefone 1:</label>
            <input type="tel" id="telefone1" name="telefone1">
            <label for="telefone2">Telefone 2:</label>
            <input type="tel" id="telefone2" name="telefone2">
          </div>
          <div class="section"><span>3</span>Endereço</div>
          <div class="inner-wrap">
            <label for="pais">Pais:</label>
            <select name="pais" id="pais" required>
              <option value="Brasil" selected="selected">Brasil</option>
              <option value="Afeganistão">Afeganistão</option>
              <option value="África do Sul">África do Sul</option>
              <option value="Albânia">Albânia</option>
              <option value="Alemanha">Alemanha</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antilhas Holandesas">Antilhas Holandesas</option>
              <option value="Antárctida">Antárctida</option>
              <option value="Antígua e Barbuda">Antígua e Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Argélia">Argélia</option>
              <option value="Armênia">Armênia</option>
              <option value="Aruba">Aruba</option>
              <option value="Arábia Saudita">Arábia Saudita</option>
              <option value="Austrália">Austrália</option>
              <option value="Áustria">Áustria</option>
              <option value="Azerbaijão">Azerbaijão</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrein">Bahrein</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belize">Belize</option>
              <option value="Benim">Benim</option>
              <option value="Bermudas">Bermudas</option>
              <option value="Bielorrússia">Bielorrússia</option>
              <option value="Bolívia">Bolívia</option>
              <option value="Botswana">Botswana</option>
              <option value="Brunei">Brunei</option>
              <option value="Bulgária">Bulgária</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Butão">Butão</option>
              <option value="Bélgica">Bélgica</option>
              <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
              <option value="Cabo Verde">Cabo Verde</option>
              <option value="Camarões">Camarões</option>
              <option value="Camboja">Camboja</option>
              <option value="Canadá">Canadá</option>
              <option value="Catar">Catar</option>
              <option value="Cazaquistão">Cazaquistão</option>
              <option value="Chade">Chade</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Chipre">Chipre</option>
              <option value="Colômbia">Colômbia</option>
              <option value="Comores">Comores</option>
              <option value="Coreia do Norte">Coreia do Norte</option>
              <option value="Coreia do Sul">Coreia do Sul</option>
              <option value="Costa do Marfim">Costa do Marfim</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Croácia">Croácia</option>
              <option value="Cuba">Cuba</option>
              <option value="Dinamarca">Dinamarca</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Egito">Egito</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
              <option value="Equador">Equador</option>
              <option value="Eritreia">Eritreia</option>
              <option value="Escócia">Escócia</option>
              <option value="Eslováquia">Eslováquia</option>
              <option value="Eslovênia">Eslovênia</option>
              <option value="Espanha">Espanha</option>
              <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
              <option value="Estados Unidos">Estados Unidos</option>
              <option value="Estônia">Estônia</option>
              <option value="Etiópia">Etiópia</option>
              <option value="Fiji">Fiji</option>
              <option value="Filipinas">Filipinas</option>
              <option value="Finlândia">Finlândia</option>
              <option value="França">França</option>
              <option value="Gabão">Gabão</option>
              <option value="Gana">Gana</option>
              <option value="Geórgia">Geórgia</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Granada">Granada</option>
              <option value="Gronelândia">Gronelândia</option>
              <option value="Grécia">Grécia</option>
              <option value="Guadalupe">Guadalupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guernesei">Guernesei</option>
              <option value="Guiana">Guiana</option>
              <option value="Guiana Francesa">Guiana Francesa</option>
              <option value="Guiné">Guiné</option>
              <option value="Guiné Equatorial">Guiné Equatorial</option>
              <option value="Guiné-Bissau">Guiné-Bissau</option>
              <option value="Gâmbia">Gâmbia</option>
              <option value="Haiti">Haiti</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungria">Hungria</option>
              <option value="Ilha Bouvet">Ilha Bouvet</option>
              <option value="Ilha de Man">Ilha de Man</option>
              <option value="Ilha do Natal">Ilha do Natal</option>
              <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
              <option value="Ilha Norfolk">Ilha Norfolk</option>
              <option value="Ilhas Cayman">Ilhas Cayman</option>
              <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
              <option value="Ilhas Cook">Ilhas Cook</option>
              <option value="Ilhas Feroé">Ilhas Feroé</option>
              <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
              <option value="Ilhas Malvinas">Ilhas Malvinas</option>
              <option value="Ilhas Marshall">Ilhas Marshall</option>
              <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
              <option value="Ilhas Salomão">Ilhas Salomão</option>
              <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
              <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
              <option value="Ilhas Åland">Ilhas Åland</option>
              <option value="Indonésia">Indonésia</option>
              <option value="Inglaterra">Inglaterra</option>
              <option value="Índia">Índia</option>
              <option value="Iraque">Iraque</option>
              <option value="Irlanda do Norte">Irlanda do Norte</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Irã">Irã</option>
              <option value="Islândia">Islândia</option>
              <option value="Israel">Israel</option>
              <option value="Itália">Itália</option>
              <option value="Iêmen">Iêmen</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japão">Japão</option>
              <option value="Jersey">Jersey</option>
              <option value="Jordânia">Jordânia</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Laos">Laos</option>
              <option value="Lesoto">Lesoto</option>
              <option value="Letônia">Letônia</option>
              <option value="Libéria">Libéria</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lituânia">Lituânia</option>
              <option value="Luxemburgo">Luxemburgo</option>
              <option value="Líbano">Líbano</option>
              <option value="Líbia">Líbia</option>
              <option value="Macau">Macau</option>
              <option value="Macedônia">Macedônia</option>
              <option value="Madagáscar">Madagáscar</option>
              <option value="Malawi">Malawi</option>
              <option value="Maldivas">Maldivas</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Malásia">Malásia</option>
              <option value="Marianas Setentrionais">Marianas Setentrionais</option>
              <option value="Marrocos">Marrocos</option>
              <option value="Martinica">Martinica</option>
              <option value="Mauritânia">Mauritânia</option>
              <option value="Maurícia">Maurícia</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Moldávia">Moldávia</option>
              <option value="Mongólia">Mongólia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Moçambique">Moçambique</option>
              <option value="Myanmar">Myanmar</option>
              <option value="México">México</option>
              <option value="Mônaco">Mônaco</option>
              <option value="Namíbia">Namíbia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Nicarágua">Nicarágua</option>
              <option value="Nigéria">Nigéria</option>
              <option value="Niue">Niue</option>
              <option value="Noruega">Noruega</option>
              <option value="Nova Caledônia">Nova Caledônia</option>
              <option value="Nova Zelândia">Nova Zelândia</option>
              <option value="Níger">Níger</option>
              <option value="Omã">Omã</option>
              <option value="Palau">Palau</option>
              <option value="Palestina">Palestina</option>
              <option value="Panamá">Panamá</option>
              <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
              <option value="Paquistão">Paquistão</option>
              <option value="Paraguai">Paraguai</option>
              <option value="País de Gales">País de Gales</option>
              <option value="Países Baixos">Países Baixos</option>
              <option value="Peru">Peru</option>
              <option value="Pitcairn">Pitcairn</option>
              <option value="Polinésia Francesa">Polinésia Francesa</option>
              <option value="Polônia">Polônia</option>
              <option value="Porto Rico">Porto Rico</option>
              <option value="Portugal">Portugal</option>
              <option value="Quirguistão">Quirguistão</option>
              <option value="Quênia">Quênia</option>
              <option value="Reino Unido">Reino Unido</option>
              <option value="República Centro-Africana">República Centro-Africana</option>
              <option value="República Checa">República Checa</option>
              <option value="República Democrática do Congo">República Democrática do Congo</option>
              <option value="República do Congo">República do Congo</option>
              <option value="República Dominicana">República Dominicana</option>
              <option value="Reunião">Reunião</option>
              <option value="Romênia">Romênia</option>
              <option value="Ruanda">Ruanda</option>
              <option value="Rússia">Rússia</option>
              <option value="Saara Ocidental">Saara Ocidental</option>
              <option value="Saint Martin">Saint Martin</option>
              <option value="Saint-Barthélemy">Saint-Barthélemy</option>
              <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
              <option value="Samoa Americana">Samoa Americana</option>
              <option value="Samoa">Samoa</option>
              <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
              <option value="Santa Lúcia">Santa Lúcia</option>
              <option value="Senegal">Senegal</option>
              <option value="Serra Leoa">Serra Leoa</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Singapura">Singapura</option>
              <option value="Somália">Somália</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Suazilândia">Suazilândia</option>
              <option value="Sudão">Sudão</option>
              <option value="Suriname">Suriname</option>
              <option value="Suécia">Suécia</option>
              <option value="Suíça">Suíça</option>
              <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
              <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
              <option value="São Marino">São Marino</option>
              <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
              <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
              <option value="Sérvia">Sérvia</option>
              <option value="Síria">Síria</option>
              <option value="Tadjiquistão">Tadjiquistão</option>
              <option value="Tailândia">Tailândia</option>
              <option value="Taiwan">Taiwan</option>
              <option value="Tanzânia">Tanzânia</option>
              <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
              <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
              <option value="Timor-Leste">Timor-Leste</option>
              <option value="Togo">Togo</option>
              <option value="Tonga">Tonga</option>
              <option value="Toquelau">Toquelau</option>
              <option value="Trinidad e Tobago">Trinidad e Tobago</option>
              <option value="Tunísia">Tunísia</option>
              <option value="Turcas e Caicos">Turcas e Caicos</option>
              <option value="Turquemenistão">Turquemenistão</option>
              <option value="Turquia">Turquia</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Ucrânia">Ucrânia</option>
              <option value="Uganda">Uganda</option>
              <option value="Uruguai">Uruguai</option>
              <option value="Uzbequistão">Uzbequistão</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Vaticano">Vaticano</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Vietname">Vietname</option>
              <option value="Wallis e Futuna">Wallis e Futuna</option>
              <option value="Zimbabwe">Zimbabwe</option>
              <option value="Zâmbia">Zâmbia</option>
            </select>
            <label for="estado">Estados: </label>
            <select id="estado" name="estado" required>
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
              <option value="EX">Estrangeiro</option>
            </select>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" required>
          </div>
          <div class="section"><span>4</span>Senha</div>
          <div class="inner-wrap">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="confirmar">Confirmar Senha:</label>
            <input type="password" id="confirmar" name="confirmar" required>
          </div>
            <div class="button-section">
            <input type="submit" name="submit">
            <span class="termos">
            <input type="checkbox" name="termos" id="termos" require> Aceito os Termos e Política. 
            <script>
              document.getElementById("termos").required = true;
            </script>
            </span>
          </div>
        </form>
    </main>
    <footer class="rodape">
        <div class="container">
          <div class="rodape-linha">
            <div class="rodape-opcoes">
              <h4>Sobre</h4>
              <ul class="rodape-lista">
                <li><a href="/Sobre/code/index.html">sobre nós</a></li>
                <li><a href="/Sobre/code/index.html">nossos serviços</a></li>
                <li><a href="/Sobre/code/index.html">política de privacidade</a></li>
                <li><a href="/Sobre/code/index.html">programa de afiliação</a></li>
              </ul>
            </div>
            <div class="rodape-opcoes">
              <h4>Ajuda</h4>
              <ul class="rodape-lista">
                <li><a href="/Sobre/code/index.html">FAQ</a></li>
                <li><a href="/Sobre/code/index.html">entrega</a></li>
                <li><a href="/Sobre/code/index.html">atendente</a></li>
                <li><a href="/Sobre/code/index.html">opções de pagamento</a></li>
              </ul>
            </div>
            <div class="rodape-opcoes">
              <h4>Entrega</h4>
              <ul class="rodape-lista">
                <li><a href="/Sobre/code/index.html">rastreamento</a></li>
                <li><a href="/Sobre/code/index.html">QR Code</a></li>
                <li><a href="/Sobre/code/index.html">entrega rápida</a></li>
                <li><a href="/Sobre/code/index.html">tipos de frete</a></li>
              </ul>
            </div>
            <div class="rodape-opcoes">
              <h4>Social</h4>
              <ul class="rodape-lista">
                <li><a href="https://www.instagram.com/copperton_ltda/"><i class="fa fa-instagram"></i> Instagram</a></li>
              <li><a href="https://twitter.com/Copperton_LTDA "><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="https://www.linkedin.com/in/copperton-ltda-01292126a/"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100091055314736"><i class="fa fa-facebook"></i> Facebook</a></li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>