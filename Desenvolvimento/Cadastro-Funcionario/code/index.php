<?php
    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Sobrenome: ' . $_POST['sobrenome']);
        // print_r('<br>');
        // print_r('CPF: ' . $_POST['cpf']);
        // print_r('<br>');
        // print_r('Data de Nascimento: ' . $_POST['dtnasc']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['sexo']);
        // print_r('<br>');
        // print_r('Estado Civil: ' . $_POST['estadocivil']);
        // print_r('<br>');
        // print_r('E-mail: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone 2: ' . $_POST['telefone1']);
        // print_r('<br>');
        // print_r('Telefone 1: ' . $_POST['telefone2']);
        // print_r('<br>');
        // print_r('Pais: ' . $_POST['pais']);
        // print_r('<br>');
        // print_r('UF: ' . $_POST['uf']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('CEP: ' . $_POST['cep']);
        // print_r('<br>');
        // print_r('Bairro: ' . $_POST['bairro']);
        // print_r('<br>');
        // print_r('Rua: ' . $_POST['rua']);
        // print_r('<br>');
        // print_r('Número: ' . $_POST['numero']);
        // print_r('<br>');
        // print_r('Cargo: ' . $_POST['cargo']);
        // print_r('<br>');
        // print_r('Setor: ' . $_POST['setor']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('<br>');
        // print_r('Admin: ' . $_POST['admin']);
        // print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $dtnasc = $_POST['dtnasc'];
        $sexo = $_POST['sexo'];
        $estadocivil = $_POST['estadocivil'];
        $email = $_POST['email'];
        $telefone1 = $_POST['telefone1'];
        $telefone2 = $_POST['telefone2'];
        $pais = $_POST['pais'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $cargo = $_POST['cargo'];
        $setor = $_POST['setor'];
        $senha = $_POST['senha'];
        $admin = $_POST['admin'];

        $result = mysqli_query($conexao, "INSERT INTO tb_funcionario(FUN_NOME,FUN_SOBRENOME,FUN_CPF,FUN_DTNASC,FUN_SEXO,FUN_ESTADOCIVIL,FUN_EMAIL,FUN_TELEFONE1,FUN_TELEFONE2,FUN_PAIS,FUN_UF,FUN_CIDADE,FUN_CEP,FUN_BAIRRO,FUN_RUA,FUN_NUMERO,FUN_CARGO,FUN_SETOR) 
        VALUES ('$nome','$sobrenome','$cpf','$dtnasc','$sexo','$estadocivil','$email','$telefone1','$telefone2','$pais','$uf','$cidade','$cep','$bairro','$rua','$numero','$cargo','$setor')");
        $result = mysqli_query($conexao, "INSERT INTO tb_login(LOG_NOME,LOG_EMAIL,LOG_SENHA,LOG_USERTYPE)
        VALUES ('$nome','$email','$senha','$admin')");
    }
?>
<?php
include('C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\code\protect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Cadastro de Funcionario</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="http://localhost/desenvolvimento/Inicio/code/index.php" class="logo">Copperton</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="http://localhost/desenvolvimento/Inicio/code/index.php">Produtos</a></li>
                <li><a href="http://localhost/desenvolvimento/Carrinho/code/index.php">Carrinho</a></li>
                <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">Sobre</a></li>
                <li><a href="http://localhost/desenvolvimento/Cadastro-Cliente/code/index.php">Cadastro</a></li>
                <li><a href="http://localhost/desenvolvimento/Login/code/index.php">Login</a></li>
            </ul>
            <div class="logout">
            <?php 
            echo $_SESSION['LOG_NOME'] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
            ?>
            </div>
        </header>
        <!-- Form -->
        <section class="resgistro">
            <div class="container">
                <h2>Cadastro de Funcionário</h2>
                <form action="index.php" method="post">
                    <div class="form-container">
                        <div class="dados-pessoais">
                            <span class="title">1 - Dados Pessoais</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" name="nome" required placeholder="Nome do Funcionário">
                                </div>
                                <div class="inputs">
                                    <label for="sobrenome">Sobrenome:</label>
                                    <input type="text" id="sobrenome" name="sobrenome" required placeholder="Sobrenome do Funcionário">
                                </div>
                                <div class="inputs">
                                    <label for="cpf">CPF:</label>
                                    <input type="number" id="cpf" name="cpf" required placeholder="Ex: 999.999.999-99">
                                </div>
                                <div class="inputs">
                                    <label for="dtnasc">Data de Nascimento:</label>
                                    <input type="date" id="dtnasc" name="dtnasc" required>
                                </div>
                                <div class="inputs">
                                    <label for="sexo">Sexo:</label>
                                    <select name="sexo" required>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outro</option>
                                    </select>
                                </div>
                                <div class="inputs">
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
                            </div>
                        </div>
                        <div class="contatos">
                            <span class="title">2 - Contatos</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="email">E-mail:</label>
                                    <input type="email" id="email" name="email" required placeholder="Ex: junior.silva@copperton.com">
                                </div>
                                <div class="inputs">
                                    <label for="telefone1">Telefone 1:</label>
                                    <input type="tel" id="telefone1" name="telefone1" required placeholder="Ex: (99)99999-9999">
                                </div>
                                <div class="inputs">
                                    <label for="telefone2">Telefone 2:</label>
                                    <input type="tel" id="telefone2" name="telefone2" placeholder="Ex: (99)99999-9999">
                                </div>
                            </div>
                        </div>
                        <div class="endereco">
                            <span class="title">3 - Endereço</span>
                            <div class="fields">
                                <div class="inputs">
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
                                </div>
                                <div class="inputs">
                                    <label for="uf">Unidade Federativa: </label>
                                    <select id="uf" name="uf" required>
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
                                </div>
                                <div class="inputs">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" id="cidade" name="cidade" required placeholder="Cidade">
                                </div>
                                <div class="inputs">
                                    <label for="cep">CEP:</label>
                                    <input type="number" id="cep" name="cep" required placeholder="Ex: 99.999-999">
                                </div>
                                <div class="inputs">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" id="bairro" name="bairro" required placeholder="Nome do Bairro">
                                </div>
                                <div class="inputs">
                                    <label for="rua">Rua:</label>
                                    <input type="text" id="rua" name="rua" required placeholder="Nome da Rua">
                                </div>
                                <div class="inputs">
                                    <label for="numero">Número:</label>
                                    <input type="number" id="numero" name="numero" required placeholder="Número da residência">
                                </div>
                            </div>
                        </div>
                        <div class="funcoes">
                            <span class="title">3 - Funções</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="cargo">Cargo:</label>
                                    <select name="cargo" required>
                                        <option value="CEO">CEO</option>
                                        <option value="Presidente">Presidente</option>
                                        <option value="Diretor">Diretor</option>
                                        <option value="Gerente">Gerente</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Analista">Analista</option>
                                        <option value="Assistente">Assistente</option>
                                        <option value="Auxiliar">Auxiliar</option>
                                    </select>
                                </div>
                                <div class="inputs">
                                    <label for="setor">Setor:</label>
                                    <select name="setor" required>
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Financeiro">Financeiro</option>
                                        <option value="RH">Recursos Humanos</option>
                                        <option value="Comercial">Comercial</option>
                                        <option value="Operacional">Operacional</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="senha">
                            <span class="title">4 - Senha</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="senha">Senha:</label>
                                    <input type="password" id="senha" name="senha" required placeholder="Digite uma senha">
                                </div>
                                <div class="inputs">
                                    <label for="confirmar">Confirmar Senha:</label>
                                    <input type="password" id="confirmar" name="confirmar" required placeholder="Confirme a senha">
                                </div>
                            </div>
                        </div>
                        <span class="admin">
                            <input type="checkbox" name="admin" id="admin" require> Administrador</a>
                            <script>
                              document.getElementById("admin").required = true;
                            </script>
                        </span>
                        <button class="submit" type="submit" name="submit">
                            <span class="submit-text">Cadastrar</span>
                            <i class='bx bx-send'></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer -->
        <section class="footer">
            <div class="footer-container">
                <div class="footer-box">
                    <h4>Sobre</h4>
                    <ul class="footer-list">
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">sobre nós</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">nossos serviços</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">política de privacidade</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">programa de afiliação</a></li>
                    </ul>
                </div>
                <div class="footer-box">
                    <h4>Ajuda</h4>
                    <ul class="footer-list">
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">FAQ</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">entrega</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">atendente</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">opções de pagamento</a></li>
                    </ul>
                </div>
                <div class="footer-box">
                    <h4>Entrega</h4>
                    <ul class="footer-list">
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">rastreamento</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">QR Code</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">entrega rápida</a></li>
                        <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">tipos de frete</a></li>
                    </ul>
                </div>
                <div class="footer-box">
                    <h4>Social</h4>
                    <ul class="footer-list">
                        <li><a href="https://www.instagram.com/copperton_ltda/"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="https://twitter.com/Copperton_LTDA "><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="https://www.linkedin.com/in/copperton-ltda-01292126a/"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100091055314736"><i class="fa fa-facebook"></i> Facebook</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>