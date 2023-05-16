<?php
include('C:\xampp\htdocs\Desenvolvimento\Inicio\code\protect.php');
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
            if(!isset($_SESSION['CLI_NOME'])) { 
                echo '<li><a href="http://localhost/desenvolvimento/Login/code/index.php">Entrar</a></li>'; 
            } 
            else { 
                echo $_SESSION['CLI_NOME'] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
            } 
            ?>
            </div>
        </header>
        <!-- Product -->
        <section class="product">
            <div class="product-container">
                <div class="first-img">
                    <img src="http://localhost/desenvolvimento/Produto/images/camiseta-cloud9-black-front-removebg-preview.png">
                </div>
                <div class="second-img-group">
                    <div class="second-img">
                        <img src="http://localhost/desenvolvimento/Produto/images/camiseta-cloud9-black-front-removebg-preview.png" onclick="showImg(this.src)">
                    </div>
                    <div class="second-img">
                        <img src="http://localhost/desenvolvimento/Produto/images/camiseta-cloud9-black-back-removebg-preview.png" onclick="showImg(this.src)">
                    </div>
                    <div class="second-img">
                        <img src="http://localhost/desenvolvimento/Produto/images/camiseta-cloud9-white-front-removebg-preview.png" onclick="showImg(this.src)">
                    </div>
                    <div class="second-img">
                        <img src="http://localhost/desenvolvimento/Produto/images/camiseta-cloud9-white-back-removebg-preview.png" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            <div class="product-datails">
                <p><a href="http://localhost/desenvolvimento/Inicio/code/index.php" class="back-home">Home</a> / Produtos</p>
                <h2>Camiseta Cloud9</h2>
                <div class="product-rating">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <span>4.7(21)</span>
                </div>
                <h4>R$79,90</h4>
                <label>Tamanho: </label>
                <select class="product-size">
                    <option>Selecione o Tamanho</option>
                    <option>GG</option>
                    <option>G</option>
                    <option>M</option>
                    <option>P</option>
                    <option>PP</option>
                </select>
                <br>
                <label>Quantidade: </label>
                <input type="number" value="1" class="product-qty">
                <br>
                <a href="#" class="product-submit"><i class='bx bx-cart'></i> Adicionar no Carrinho</a>
                <h3>Detalhes do Produto</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab enim consectetur eveniet doloremque adipisci tenetur quisquam corrupti, quam eius, totam impedit id cumque nulla natus vitae blanditiis ut possimus officiis.</p>
            </div>
        </section>
        <!-- Related Product -->
        <section class="related-product">
          <div class="related-header">
            <h3>Produtos Similares</h3>
            <p>Aqui você encontra nossos produtos com preço e categoria similares</p>
          </div>
          <div class="related">
            <div class="related-container">
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-astralis.png">
                  </div>
                  <h2>Camiseta Astralis</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 120,00</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-faze.png">
                  </div>
                  <h2>Camiseta FaZe Clan</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 90,00</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-furia.png">
                  </div>
                  <h2>Camiseta Fúria</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 132,90</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                <div class="related-container-box-img">
                    <img src="http://localhost/desenvolvimento/Produto/images/similares/moletom-c9.png">
                </div>
                <h2>Moletom Cloud9</h2>
                <h3>Counter-Strike</h3>
                <span>R$ 220,79</span>
                <i class='bx bx-cart'></i>
              </div>
              </a>
            </div>
            <div class="related-container">
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/moletom-navi.png">
                  </div>
                  <h2>Moletom NAVI</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 199,90</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-g2.png">
                  </div>
                  <h2>Camiseta G2</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 67,90</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                  <div class="related-container-box-img">
                      <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-mouz.png">
                  </div>
                  <h2>Camiseta Mouz</h2>
                  <h3>Counter-Strike</h3>
                  <span>R$ 98,90</span>
                  <i class='bx bx-cart'></i>
              </div>
              </a>
              <a href="http://localhost/desenvolvimento/Produto/code/index.php">
              <div class="related-container-box">
                <div class="related-container-box-img">
                    <img src="http://localhost/desenvolvimento/Produto/images/similares/camiseta-og.png">
                </div>
                <h2>Camiseta OG</h2>
                <h3>Counter-Strike</h3>
                <span>R$ 110,25</span>
                <i class='bx bx-cart'></i>
              </div>
              </a>
            </div>
        </div>
        </section>
        <!-- Rating -->
        <section class="rating">
          <div class="rating-header">
            <h3>Avaliações</h3>
            <p>Avaliações de outros usuários</p>
          </div>
            <div class="rating-container-user1">
              <div class="rating-user">
                <div class="rating-name">
                  <img src="/Produto/images/user.png">
                  <h2> Heitor Carvalho da Silva</h2>
                  <div class="rating-value-user">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5.0</span>
                  </div>
                </div>
                <div class="rating-date">
                  <p>Avaliado em 20 de Agosto de 2022</p>
                </div>
              </div>
              <div class="rating-text">
                <p>Eu comprei este boné em particular há algumas semanas e tenho usado com frequência desde então. Posso dizer que estou muito satisfeito com a qualidade do produto. O material é resistente e durável, e o boné se encaixa perfeitamente na minha cabeça.
                  <br><br>
                  Além disso, o design é muito elegante e combina com várias roupas do meu guarda-roupa. Eu realmente gosto da cor preta com o logotipo branco, que dá um toque moderno e sofisticado ao boné.
                  <br><br>
                  O único ponto negativo que eu posso mencionar é que a aba é um pouco mais curta do que eu gostaria, mas não é algo que me incomode muito. No geral, eu recomendo este boné para quem procura um acessório de qualidade e estilo.</p>
              </div>
            </div>
          <div class="rating--container-user2">
            <div class="rating-user">
              <div class="rating-name">
                <img src="/Produto/images/user.png">
                <h2> Fernanda Cardoso dos Santos</h2>
                <div class="rating-value-user">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <span>4.0</span>
                </div>
              </div>
              <div class="rating-date">
                <p>Avaliado em 31 de Março de 2023</p>
              </div>
            </div>
            <div class="rating-text">
              <p>Eu comprei este boné em particular há algumas semanas e tenho usado com frequência desde então. Posso dizer que estou muito satisfeito com a qualidade do produto. O material é resistente e durável, e o boné se encaixa perfeitamente na minha cabeça.
                <br><br>
                Além disso, o design é muito elegante e combina com várias roupas do meu guarda-roupa. Eu realmente gosto da cor preta com o logotipo branco, que dá um toque moderno e sofisticado ao boné.
                <br><br>
                O único ponto negativo que eu posso mencionar é que a aba é um pouco mais curta do que eu gostaria, mas não é algo que me incomode muito. No geral, eu recomendo este boné para quem procura um acessório de qualidade e estilo.</p>
            </div>
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
        