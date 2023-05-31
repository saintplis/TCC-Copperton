<?php
if(isset($_POST['submit']) && isset($_FILES['imagem-1'],$_FILES['imagem-2'],$_FILES['imagem-3'],$_FILES['imagem-4'],))
{
    // echo "<pre>";
    // print_r($_FILES['imagem-1']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_FILES['imagem-2']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_FILES['imagem-3']);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_FILES['imagem-4']);
    // echo "</pre>";

    $img_name1 = $_FILES['imagem-1']['name'];
    $img_size1 = $_FILES['imagem-1']['size'];
    $tmp_name1 = $_FILES['imagem-1']['tmp_name'];
    $error1 = $_FILES['imagem-1']['error'];

    if ($error1 === 0) {
        if ($img_size1 > 200000){
            $em1 = "Desculpe, tente um arquivo menor.";
            header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em1");
        }else {
            $img1_ex = pathinfo($img_name1, PATHINFO_EXTENSION);
            $img1_ex_lc = strtolower($img1_ex);

            $allowed_exs1 = array("jpg", "jpeg", "png");

            if (in_array($img1_ex_lc, $allowed_exs1)) {
                $new_img1_name = uniqid("IMG-", true).'.'.$img1_ex_lc;
                $img1_upload_path = 'C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\imagens/'.$new_img1_name;
                move_uploaded_file($tmp_name1, $img1_upload_path);

            }else {
                $em1 = "Você não pode fazer upload deste tipo de arquivo";
                header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em1");
            }
        }
    }else {
        $em1 = "Algum erro inesperado aconteceu!";
        header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em1");
    }

    $img_name2 = $_FILES['imagem-2']['name'];
    $img_size2 = $_FILES['imagem-2']['size'];
    $tmp_name2 = $_FILES['imagem-2']['tmp_name'];
    $error2 = $_FILES['imagem-2']['error'];

    if ($error2 === 0) {
        if ($img_size2 > 200000){
            $em2 = "Desculpe, tente um arquivo menor.";
            header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em2");
        }else {
            $img2_ex = pathinfo($img_name2, PATHINFO_EXTENSION);
            $img2_ex_lc = strtolower($img2_ex);

            $allowed_exs2 = array("jpg", "jpeg", "png");

            if (in_array($img2_ex_lc, $allowed_exs2)) {
                $new_img2_name = uniqid("IMG-", true).'.'.$img2_ex_lc;
                $img2_upload_path = 'C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\imagens/'.$new_img2_name;
                move_uploaded_file($tmp_name2, $img2_upload_path);

            }else {
                $em2 = "Você não pode fazer upload deste tipo de arquivo";
                header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em2");
            }
        }
    }else {
        $em2 = "Algum erro inesperado aconteceu!";
        header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em2");
    }
    
    $img_name3 = $_FILES['imagem-3']['name'];
    $img_size3 = $_FILES['imagem-3']['size'];
    $tmp_name3 = $_FILES['imagem-3']['tmp_name'];
    $error3 = $_FILES['imagem-3']['error'];

    if ($error3 === 0) {
        if ($img_size3 > 200000){
            $em3 = "Desculpe, tente um arquivo menor.";
            header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em3");
        }else {
            $img3_ex = pathinfo($img_name3, PATHINFO_EXTENSION);
            $img3_ex_lc = strtolower($img3_ex);

            $allowed_exs3 = array("jpg", "jpeg", "png");

            if (in_array($img3_ex_lc, $allowed_exs3)) {
                $new_img3_name = uniqid("IMG-", true).'.'.$img3_ex_lc;
                $img3_upload_path = 'C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\imagens/'.$new_img3_name;
                move_uploaded_file($tmp_name3, $img3_upload_path);

            }else {
                $em3 = "Você não pode fazer upload deste tipo de arquivo";
                header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em3");
            }
        }
    }else {
        $em3 = "Algum erro inesperado aconteceu!";
        header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em3");
    }

    $img_name4 = $_FILES['imagem-4']['name'];
    $img_size4 = $_FILES['imagem-4']['size'];
    $tmp_name4 = $_FILES['imagem-4']['tmp_name'];
    $error4 = $_FILES['imagem-4']['error'];

    if ($error4 === 0) {
        if ($img_size4 > 200000){
            $em4 = "Desculpe, tente um arquivo menor.";
            header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em4");
        }else {
            $img4_ex = pathinfo($img_name4, PATHINFO_EXTENSION);
            $img4_ex_lc = strtolower($img4_ex);

            $allowed_exs4 = array("jpg", "jpeg", "png");

            if (in_array($img4_ex_lc, $allowed_exs4)) {
                $new_img4_name = uniqid("IMG-", true).'.'.$img4_ex_lc;
                $img4_upload_path = 'C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\imagens/'.$new_img4_name;
                move_uploaded_file($tmp_name4, $img4_upload_path);

            }else {
                $em4 = "Você não pode fazer upload deste tipo de arquivo";
                header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em4");
            }
        }
    }else {
        $em4 = "Algum erro inesperado aconteceu!";
        header("Location: http://localhost/desenvolvimento/Cadastro-Produto/code/index.php?error=$em4");
    }

} else{
    echo "Faça o Upload das Imagens";
}
?>
<?php
if(isset($_POST['submit']))
{
    // print_r('Código de Barras: ' . $_POST['barcode']);
    // print_r('<br>');
    // print_r('Nome do Produto: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Descrição: ' . $_POST['descricao']);
    // print_r('<br>');
    // print_r('Categoria: ' . $_POST['categoria']);
    // print_r('<br>');
    // print_r('Preco: ' . $_POST['preco']);
    // print_r('<br>');
    // print_r('ID Estoque: ' . $_POST['estoque']);
    // print_r('<br>');
    // print_r('CNPJ Fornecedor: ' . $_POST['fornecedor']);
    // print_r('<br>');
    // print_r('Tamanho: ' . $_POST['tamanho']);
    // print_r('<br>');
    // print_r('Cor: ' . $_POST['cor']);
    // print_r('<br>');
    // print_r('Material: ' . $_POST['material']);
    // print_r('<br>');

    include_once('config.php');

    $barcode = $_POST['barcode'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $fornecedor = $_POST['fornecedor'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $material = $_POST['material'];

    $result = mysqli_query($conexao, "INSERT INTO tb_produto(PRO_BARCODE,PRO_NOME,PRO_DESCRICAO,PRO_PRECO,PRO_CATEGORIA,PRO_TAMANHO,PRO_COR,PRO_MATERIAL,PRO_ESTOQUE,PRO_FORNECEDOR,PRO_IMAGEM1,PRO_IMAGEM2,PRO_IMAGEM3,PRO_IMAGEM4,FUN_EMAIL) 
    VALUES ('$barcode','$nome','$descricao','$preco','$categoria','$tamanho','$cor','$material','$estoque','$fornecedor','$new_img1_name','$new_img2_name','$new_img3_name','$new_img4_name')");
}
?>
<?php
include('protect.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Cadastro</title>
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
            echo $_SESSION['admin'] . ' - Admin | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
            ?>
            </div>
        </header>
        <!-- Form -->
        <section class="resgistro">
            <div class="container">
                <h2>Cadastro de Produto</h2>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-container">
                        <div class="id">
                            <span class="title">1- IDs</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="barcode">Código de Barras:</label>
                                    <input type="number" id="barcode" name="barcode" required placeholder="Ex: 9999999999">
                                </div>
                                <div class="inputs">
                                    <label for="nome">Nome do Produto:</label>
                                    <input type="text" id="nome" name="nome" required placeholder="Nome do Produto">
                                </div>
                                <div class="inputs">
                                    <label for="descricao">Descrição:</label>
                                    <textarea id="descricao" name="descricao" required></textarea>
                                </div>
                                <div class="inputs">
                                    <label for="categoria">Categoria:</label>
                                    <select name="categoria" required>
                                        <option value="Camiseta">Camiseta</option>
                                        <option value="Jaqueta">Jaqueta</option>
                                        <option value="Moletom">Moletom</option>
                                        <option value="Bone">Boné</option>
                                        <option value="Acessorio">Acessório</option>
                                        <option value="Bandeirao">Bandeirão</option>
                                        <option value="Calca">Calça</option>
                                        <option value="Short">Shorts</option>
                                        <option value="Gorro">Gorro</option>
                                    </select>
                                </div>
                                <div class="inputs">
                                    <label for="preco">Preço:</label>
                                    <input type="number" step="0.010" id="preco" name="preco" required placeholder="Ex: 99,90">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-1">Imagem Principal:</label>
                                    <input type="file" id="imagem-1" name="imagem-1" required>
                                </div>
                                <div class="inputs">
                                    <label for="imagem-2">Imagem 2:</label>
                                    <input type="file" id="imagem-2" name="imagem-2">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-3">Imagem 3:</label>
                                    <input type="file" id="imagem-3" name="imagem-3">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-4">Imagem 4:</label>
                                    <input type="file" id="imagem-4" name="imagem-4">
                                </div>
                            </div>
                        </div>
                        <div class="local">
                            <span class="title">2 - Localização</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="estoque">Estoque:</label>
                                    <select name="estoque" required>
                                        <option value="BSB001">BSB001 - Brasília</option>
                                        <option value="CGH001">CGH001 - São Paulo</option>
                                        <option value="GIG001">GIG001 - Rio de Janeiro</option>
                                        <option value="SSA001">SSA001 - Salvador</option>
                                        <option value="FLN001">FLN001 - Florianópolis</option>
                                        <option value="POA001">POA001 - Porto Alegre</option>
                                        <option value="VCP001">VCP001 - Campinas</option>
                                        <option value="REC001">REC001 - Recife</option>
                                        <option value="CWB001">CWB001 - Curitiba</option>
                                        <option value="BEL001">BEL001 - Belém</option>
                                        <option value="VIX001">VIX001 - Vitória</option>
                                        <option value="CGB001">CGB001 - Cuiabá</option>
                                        <option value="CGR001">CGR001 - Campo Grande</option>
                                        <option value="FOR001">FOR001 - Fortaleza</option>
                                        <option value="MCP001">MCP001 - Macapá</option>
                                        <option value="IGU001">IGU001 - Foz Do Iguaçu</option>
                                        <option value="RBR001">RBR001 - Rio Branco</option>
                                    </select>
                                </div>
                                <div class="inputs">
                                    <label for="fornecedor">Fornecedor:</label>
                                    <select name="fornecedor" required>
                                        <option value="44937921000150">44.937.921/0001-50 [Astralis]</option>
                                        <option value="02084384000101">02.084.384/0001-01 [Fúria]</option>
                                        <option value="34069923000111">34.069.923/0001-11 [Imperial]</option>
                                        <option value="06279869000101">06.279.869/0001-01 [G2]</option>
                                        <option value="27133825000130">27.133.825/0001-30 [Navi]</option>
                                        <option value="17326252000108">17.326.252/0001-08 [Mouz]</option>
                                        <option value="24413099000111">24.413.099/0001-11 [Mibr]</option>
                                        <option value="08470440000114">08.470.440/0001-14 [Cloud9]</option>
                                        <option value="29642289000124">29.642.289/0001-24 [OG]</option>
                                        <option value="24140282000190">24.140.282/0001-90 [Fnatic]</option>
                                        <option value="07335302000160">07.335.302/0001-60 [Fluxo]</option>
                                        <option value="02867678000100">02.867.678/0001-00 [NIP]</option>
                                        <option value="05382523000163">05.382.523/0001-63 [Vitality]</option>
                                        <option value="46926214000194">46.926.214/0001-94 [Copenhagen Flames]</option>
                                        <option value="37941821000132">37.941.821/0001-32 [Complexity]</option>
                                        <option value="44389143000102">44.389.143/0001-02 [Liquid]</option>
                                        <option value="18432312000130">18.432.312/0001-30 [FaZe]</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="expecificacao">
                            <span class="title">3 - Expecificações</span>
                            <div class="fields">
                            <div class="inputs">
                                <label for="tamanho">Tamanho:</label>
                                <select name="tamanho" required>
                                    <option value="Null">Nulo - Sem Tamanho</option>
                                    <option value="PP">PP - 36</option>
                                    <option value="P">P - 38</option>
                                    <option value="M">M - 40</option>
                                    <option value="G">G - 42</option>
                                    <option value="GG">GG - 44</option>
                                    <option value="XGG">XGG - 46</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="cor">Cor:</label>
                                <select name="cor" required>
                                    <option value="Null">Nulo - Sem Cor</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Vermelho">Vermelho</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Azul">Azul</option>
                                    <option value="Laranja">Laranja</option>
                                    <option value="Verde">Verde</option>
                                    <option value="Violeta">Violeta</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="material">Material:</label>
                                <select name="material" required>
                                    <option value="Null">Nulo - Sem Material</option>
                                    <option value="Elestano">Elestano</option>
                                    <option value="Algodao">Algodão</option>
                                    <option value="La">Lã</option>
                                    <option value="Seda">Seda</option>
                                    <option value="Viscose">Viscose</option>
                                    <option value="Tencel">Tencel</option>
                                    <option value="Linho">Linho</option>
                                    <option value="Poliester">Poliéster</option>
                                </select>
                            </div>
                        </div>
                        </div>
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
        <script src="script.js"></script>
    </body>
</html>