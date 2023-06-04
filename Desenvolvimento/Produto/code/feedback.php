<?php
include('C:\xampp\htdocs\Desenvolvimento\Carrinho\code\protect.php');
?>
<?php
include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

$id = "";
if(isset($_GET["product_id"]))
{
  $id = $_GET["product_id"];
}
  $select_query = "SELECT * FROM tb_produto WHERE ID_PRODUTO = $id";
  $result_query=mysqli_query($conexao,$select_query);

            while($row=mysqli_fetch_assoc($result_query)){
                $produto_id=$row['ID_PRODUTO'];
                $pro_nome=$row['PRO_NOME'];
                $pro_descricao=$row['PRO_DESCRICAO'];
                $pro_preco=$row['PRO_PRECO'];
                $pro_categoria=$row['PRO_CATEGORIA'];
                $pro_tamanho=$row['PRO_TAMANHO'];
                $pro_cor=$row['PRO_COR'];
                $pro_material=$row['PRO_MATERIAL'];
                $pro_imagem1=$row['PRO_IMAGEM1'];
                $pro_imagem2=$row['PRO_IMAGEM2'];
                $pro_imagem3=$row['PRO_IMAGEM3'];
                $pro_imagem4=$row['PRO_IMAGEM4'];
              }
?>
<?php
if(isset($_POST['submit']))
{
  $nota = $_POST['rate'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $descricao = $_POST['mensagem'];

  $sql = "SELECT ID_CLIENTE FROM tb_cliente WHERE CLI_EMAIL='$email'";
  $result_sql = mysqli_query($conexao, $sql);

  if (mysqli_num_rows($result_sql) > 0) {
    while($row = mysqli_fetch_assoc($result_sql)) {
      $cliente_id = $row["ID_CLIENTE"];
    }
  } else {
    echo "Cliente não encontrado";
}

  $result = mysqli_query($conexao, "INSERT INTO tb_feedback(FED_NOME,FED_EMAIL,FED_DESCRICAO,FED_NOTA,ID_PRODUTO,ID_CLIENTE) 
  VALUES ('$nome','$email','$descricao','$nota','$produto_id','$cliente_id')");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Detalhes do Produto</title>
        <link rel="stylesheet" type="text/css" href="feedback.css" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fontawesome.com/v5/icons/star-half-alt?f=classic&s=solid">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
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
            if(isset($_SESSION['admin'])){
              echo $_SESSION['admin'] . ' - Admin | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
            }else if(isset($_SESSION['user'])){
              echo $_SESSION['user'] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
            }else{
              echo '<li><a href="http://localhost/desenvolvimento/Login/code/index.php">Entrar</a></li>';
            }
            ?>
            </div>
        </header>
        <div class="feedback-title">
          <h2>Mostre sua Avaliação :)</h2>
          <span>Aqui o seu feedback faz a diferença</span>
        </div>
        <?php
        echo "
        <section class='product'>
            <div class='product-container'>
                <div class='first-img'>
                    <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem1'>
                </div>
                <div class='second-img-group'>
                    <div class='second-img'>
                        <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem1' onclick='showImg(this.src)'>
                    </div>
                    <div class='second-img'>
                        <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem2' onclick='showImg(this.src)'>
                    </div>
                    <div class='second-img'>
                        <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem3' onclick='showImg(this.src)'>
                    </div>
                    <div class='second-img'>
                        <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem4' onclick='showImg(this.src)'>
                    </div>
                </div>
            </div>
            <div class='product-datails'>
                <p><a href='http://localhost/desenvolvimento/Inicio/code/index.php' class='back-home'>Home</a> / <a href='index.php?product_id=$produto_id'> Produtos</a> / Feedback</p>
                <h2>$pro_nome</h2>
                <h4>R$$pro_preco</h4>
                <label>Produto: $pro_categoria</label>
                <br>
                <label>Tamanho: $pro_tamanho</label>
                <br>
                <label>Cor: $pro_cor</label>
                <br>
                <label>Material: $pro_material</label>
                <br><br>
                <h3>Detalhes do Produto</h3>
                <p>$pro_descricao</p>
            </div>
        ";
        ?>
        <?php
        echo "
        <div class='container'>
            <form action='feedback.php?product_id=$produto_id' method='post'>
                <div class='form-container'>
                    <div class='rating-form'>
                    <span class='title'>Deixe seu feedback</span>
                        <div class='fields'>
                            <div class='inputs'>
                                <div class='rate'>
                                    <input type='radio' id='star5' name='rate' value='5'>
                                    <label for='star5' title='5 estrelas'></label>
                                    <input type='radio' id='star4' name='rate' value='4'>
                                    <label for='star4' title='4 estrelas'></label>
                                    <input type='radio' id='star3' name='rate' value='3'>
                                    <label for='star3' title='3 estrelas'></label>
                                    <input type='radio' id='star2' name='rate' value='2'>
                                    <label for='star2' title='2 estrelas'></label>
                                    <input type='radio' id='star1' name='rate' value='1'>
                                    <label for='star1' title='1 estrela'></label>
                                </div>
                            </div>
                        </div>
                        <div class='fields'>
                            <div class='inputs'>
                              <label for='nome'>Nome:</label>
                              <input type='text' id='nome' name='nome' required placeholder='Digite seu nome'>
                            </div>
                            <div class='inputs'>
                              <label for='email'>E-mail:</label>
                              <input type='email' id='email' name='email' required placeholder='Ex: copperton_ltda@gmail.com'>
                            </div>
                            <div class='inputs'>
                              <label for='mensagem'>Mensagem:</label>
                              <textarea id='mensagem' name='mensagem' required placeholder='Descreva sua avaliação'></textarea>
                            </div>
                        </div>
                        <button class='submit' type='submit' name='submit'>
                            <span class='submit-text'>Enviar</span>
                            <i class='bx bx-send'></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        ";
        ?>
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