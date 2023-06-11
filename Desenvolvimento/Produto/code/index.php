<?php
include('C:\xampp\htdocs\Desenvolvimento\Inicio\code\protect.php');
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Detalhes do Produto</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
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
              $admin = $_SESSION['admin'];
              echo $admin[0] . ' - Admin | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
            }else if(isset($_SESSION['user'])){
              $user = $_SESSION['user'];
              $user_id = $user[1];
              echo $user[0] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
            }else{
              echo '<li><a href="http://localhost/desenvolvimento/Login/code/index.php">Entrar</a></li>';
            }
            ?>
            </div>
        </header>
        <!-- Product -->
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
                <p><a href='http://localhost/desenvolvimento/Inicio/code/index.php' class='back-home'>Home</a> / Produtos</p>
                <h2>$pro_nome</h2>
                <div class='product-rating'>
                  <i class='fa fa-star' aria-hidden='true'></i>
                  <i class='fa fa-star' aria-hidden='true'></i>
                  <i class='fa fa-star' aria-hidden='true'></i>
                  <i class='fa fa-star' aria-hidden='true'></i>
                  <i class='fa fa-star' aria-hidden='true'></i>
                  <span>4.7(21)</span>
                </div>
                <h4>R$$pro_preco</h4>
                <label>Produto: $pro_categoria</label>
                <br>
                <label>Tamanho: $pro_tamanho</label>
                <br>
                <label>Cor: $pro_cor</label>
                <br>
                <label>Material: $pro_material</label>
                <br><br>
                <a href='#' class='product-submit' data-id=$produto_id data-uid=$user_id><i class='bx bx-cart'></i> Adicionar no Carrinho</a>
                <a href='feedback.php?product_id=$produto_id' class='feedback-submit'><i class='bx bxs-comment-detail'></i> Avalie o Produto</a>
                <h3>Detalhes do Produto</h3>
                <p>$pro_descricao</p>
            </div>
        </section>
        ";
        ?>
        <!-- Related Product -->
        <section class="related-product">
          <div class="related-header">
            <h3>Produtos Similares</h3>
            <p>Aqui você encontra nossos produtos com preço e categoria similares</p>
          </div>
          <div class="related">
            <div class="related-container">
            <?php

            $select_query = "Select * from `tb_produto` order by rand() LIMIT 0,4";
            $result_query=mysqli_query($conexao,$select_query);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['PRO_NOME'];
            while($row=mysqli_fetch_assoc($result_query)){
                $produto_id=$row['ID_PRODUTO'];
                $rel_nome=$row['PRO_NOME'];
                $rel_preco=$row['PRO_PRECO'];
                $rel_imagem=$row['PRO_IMAGEM1'];
                echo "
                <a href='http://localhost/desenvolvimento/Produto/code/index.php?product_id=$produto_id'>
                <div class='related-container-box'>
                    <div class='related-container-box-img'>
                        <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$rel_imagem'>
                    </div>
                    <h2>$rel_nome</h2>
                    <h3>Counter-Strike</h3>
                    <span>R$ $rel_preco</span>
                    <i class='bx bx-cart'></i>
                </div>
                </a>
                ";
            }
            ?>
          </div>
        </section>
        <!-- Rating -->
        <section class="rating">
          <div class="rating-header">
            <h3>Avaliações</h3>
            <p>Avaliações de outros usuários</p>
          </div>
        <?php

        include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

        $id = "";
        if(isset($_GET["product_id"]))
        {
        $id = $_GET["product_id"];
        }

        $select_query = "SELECT * FROM tb_feedback WHERE ID_PRODUTO = $id ORDER BY RAND() LIMIT 0,3";
        $result_query=mysqli_query($conexao,$select_query);

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        while($row=mysqli_fetch_assoc($result_query)){
          $feedback_id=$row['ID_FEEDBACK'];
          $fed_nome=$row['FED_NOME'];
          $fed_descricao=$row['FED_DESCRICAO'];
          $fed_nota=$row['FED_NOTA'];
          $fed_data=$row['FED_DTFEEDBACK'];

        echo "
          <div class='rating-container-user1'>
            <div class='rating-user'>
              <div class='rating-name'>
                <h2> $fed_nome</h2>
        ";
        if($fed_nota==1){
        echo"
              <div class='rating-value-user'>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <span>($fed_nota.0)</span>
              </div>
        ";
        }
        if($fed_nota==2){
          echo"
                <div class='rating-value-user'>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bx-star'></i>
                  <i class='bx bx-star'></i>
                  <i class='bx bx-star'></i>
                  <span>($fed_nota.0)</span>
                </div>
          ";
          }
          if($fed_nota==3){
            echo"
                  <div class='rating-value-user'>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <span>($fed_nota.0)</span>
                  </div>
            ";
            }
            if($fed_nota==4){
              echo"
                    <div class='rating-value-user'>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bx-star'></i>
                      <span>($fed_nota.0)</span>
                    </div>
              ";
              }
              if($fed_nota==5){
                echo"
                      <div class='rating-value-user'>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <span>($fed_nota.0)</span>
                      </div>
                ";
                }
        echo "
              </div>
              <div class='rating-date'>
                <p>";echo strftime('%A, %d de %B de %Y', strtotime($row['FED_DTFEEDBACK']));echo "</p>
              </div>
            </div>
            <div class='rating-text'>
              <p>$fed_descricao
              <br><br>
            </div>
          </div>
        ";
        }
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
        <script src="cart.js"></script>
      </body>
  </html>
        