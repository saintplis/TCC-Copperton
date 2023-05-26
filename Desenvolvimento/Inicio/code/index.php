<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coppeton - Início</title>
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
        <!-- Home -->
        <section class="home" id="home">
            <div class="home-text">
                <h1>Copperton</h1>
                <h2>Bem Vindo <br><span> A sua loja de artigos para e-esports</span></h2>
                <a href="#produto" class="home-button">Nossos Produtos</a>
            </div>
            <div class="home-img">
                <img src="http://localhost/desenvolvimento/Inicio/imagens/moletom-sk.png">
            </div>
        </section>
        <!-- Promocao -->
        <section class="promocao" id="promocao">
            <div class="promocao-img">
                <img src="http://localhost/desenvolvimento/Inicio/imagens/camisa-astralis.png">
            </div>
            <div class="promocao-text">
                <span>Promoção do Dia</span>
                <h2>Camiseta Astralis</h2>
                <p>Arrase no estilo e torça com a fé inabalavel de seu time.</p>
                <h3>R$ 79,90</h3>
                <a href="http://localhost/desenvolvimento/Produto/code/index.php" class="promocao-button">Compre Agora</a>
            </div>
        </section>
        <!-- Produto -->
        <section class="produto" id="produto">
            <div class="produto-header">
            <span>Nossos Produtos</span>
            <h2>Desfrute de uma variedade de coleções</h2>
            </div>
            <div class='produto-container'>
            <?php

            include_once('config.php');

            $select_query = "Select * from `tb_produto` order by rand() LIMIT 0,3";
            $result_query=mysqli_query($conexao,$select_query);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['PRO_NOME'];
            while($row=mysqli_fetch_assoc($result_query)){
                $produto_id=$row['ID_PRODUTO'];
                $pro_nome=$row['PRO_NOME'];
                $pro_preco=$row['PRO_PRECO'];
                $pro_imagem=$row['PRO_IMAGEM1'];
                echo " 
               
                    <a href='http://localhost/desenvolvimento/Produto/code/index.php?product_id=$produto_id'>
                    <div class='produto-container-box'>
                        <div class='produto-container-box-img'>
                            <img src='http://localhost/desenvolvimento/Cadastro-Produto/imagens/$pro_imagem'>
                        </div>
                        <h2>$pro_nome</h2>
                        <h3>Counter-Strike</h3>
                        <span>R$ $pro_preco</span>
                        <i class='bx bx-cart'></i>
                    </div>
                    </a>
                
            ";
            }
            ?>
            </div>
            <!-- 
                <div class="produto-container">
                    <a href="http://localhost/desenvolvimento/Produto/code/index.php">
                    <div class="produto-container-box">
                        <div class="produto-container-box-img">
                            <img src="http://localhost/desenvolvimento/Inicio/imagens/camiseta-cloud9.png">
                        </div>
                        <h2>Camiseta Cloud9</h2>
                        <h3>Counter-Strike</h3>
                        <span>R$ 89,90</span>
                        <i class='bx bx-cart'></i>
                    </div>
                    </a>
                </div>
            -->
        </section>
        <!-- Parceiro -->
        <section class="parceiro" id="parceiro">
            <div class="parceiro-header">
                <span>Nossos Parceiros</span>
                <h2>Sem ajuda vamos a lugar nenhum</h2>
            </div>
            <div class="parceiro-container">
                <div class="parceiro-container-box">
                    <div class="parceiro-container-box-img">
                        <img src="http://localhost/desenvolvimento/Inicio/imagens/Parceiros/astralis-logo.png">
                    </div>
                    <h3>Astralis</h3>
                </div>
                <div class="parceiro-container-box">
                    <div class="parceiro-container-box-img">
                        <img src="http://localhost/desenvolvimento/Inicio/imagens/Parceiros/cloud9-logo.png">
                    </div>
                    <h3>Cloud9</h3>
                </div>
                 <div class="parceiro-container-box">
                    <div class="parceiro-container-box-img">
                     <img src="http://localhost/desenvolvimento/Inicio/imagens/Parceiros/imperial-logo.png">
                    </div>
                    <h3>Imperial</h3>
                </div>
            </div>
        </section>
        <!-- Endereco -->
        <section class="endereco" id="endereco">
            <div class="endereco-header">
                <span>Onde Situamos</span>
                <h2>Venha nos fazer uma visita</h2>
            </div>
            <div class="endereco-contact-container">
                <div class="endereco-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62979.10486986062!2d22.294134134405994!3d-29.965784058901548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c28113460d0a8f7%3A0xe69c033664bf72c3!2sCopperton%2C%208940%2C%20South%20Africa!5e0!3m2!1sen!2sbr!4v1659825249536!5m2!1sen!2sbr" class="endereco-gps"></iframe>
                </div>
                <div class="contact-form-container">
                    <h2 class="form-title">Fale Conosco</h2>
                    <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Assunto:</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Enviar</button>
                    </form>
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
    </body>
</html>