<?php
include('C:\xampp\htdocs\Desenvolvimento\Inicio\code\protect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coppeton - Sobre</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            echo $user[0] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>'; 
          }else{
            echo '<li><a href="http://localhost/desenvolvimento/Login/code/index.php">Entrar</a></li>';
          }
        ?>
        </div>
      </header>
      <!-- Sobre Nós -->
      <section class="sobre"> 
        <div class="sobre-container">
          <h2>Sobre Nós</h2>
          <p>
            A nossa loja foi fundada em 2022 por um pequeno grupo de empreendedores com a visão de oferecer produtos de qualidade a preços acessíveis. Desde então, expandimos nossos negócios e agora somos uma das maiores empresas de varejo do país.
            <br><br>
            Nós sempre buscamos inovar e oferecer a melhor experiência de compra aos nossos clientes. Em 2023, fomos um dos primeiros a lançar uma loja online, e desde então temos investido pesadamente em tecnologia e design para tornar a compra de produtos ainda mais fácil e agradável.
            <br><br>
            A nossa paixão por oferecer a melhor experiência de compra aos nossos clientes nunca mudou, e nós continuamos a trabalhar duro todos os dias para alcançar esse objetivo. Seja você um cliente antigo ou novo, nós esperamos que você sinta a diferença em cada compra que fizer conosco.
          </p>
        </div>
        <div class="sobre-img">
          <img src="http://localhost/desenvolvimento/Sobre/images/logotipo.png">
        </div>
      </section>
      <!-- Política de Privacidade -->
      <section class="privacity-policy">
        <div class="privacy-policy-container">
          <h2>Política de Privacidade</h2>
            <p>Esta política descreve como as informações pessoais que você fornece são coletadas, usadas e compartilhadas quando você visita ou faz uma compra em nosso site.</p>
          <h3>• Coleta de Informações Pessoais</h3>
            <p>Quando você visita o site, coletamos automaticamente certas informações sobre o seu dispositivo, incluindo informações sobre o seu navegador, endereço IP, fuso horário e alguns dos cookies que estão instalados em seu dispositivo.</p>
            <p>Além disso, quando você faz uma compra ou tenta fazer uma compra através do site, coletamos certas informações suas, incluindo seu nome, endereço de cobrança, endereço de entrega, informações de pagamento (incluindo números de cartão de crédito), endereço de e-mail e número de telefone. Essas informações são chamadas de "Informações de Pedido".</p>
          <h3>• Compartilhamento de Informações Pessoais</h3>
            <p>Compartilhamos suas Informações Pessoais com terceiros para nos ajudar a usar suas Informações Pessoais, conforme descrito acima. Por exemplo, usamos o Shopify para alimentar nossa loja online.</p>
          <h3>• Segurança</h3>
            <p>Para proteger suas informações pessoais, tomamos precauções razoáveis ​​e seguimos as melhores práticas da indústria para garantir que elas não sejam perdidas, mal utilizadas, acessadas, divulgadas, alteradas ou destruídas de maneira inadequada.</p>
        </div>
      </section>
      <!-- Pagamento -->
      <section class="payment">
        <div class="payment-container">
          <h2>Opções de Pagamento</h2>
          <div class="payment-option">
            <img src="http://localhost/desenvolvimento/Sobre/images/paypal.png" alt="Paypal logo" class="payment-logo">
            <p>Aceitamos pagamentos com Paypal. O Paypal permite que você pague usando sua conta do Paypal ou cartão de crédito.</p>
          </div>
          <div class="payment-option">
            <img src="http://localhost/desenvolvimento/Sobre/images/cartoes.png" alt="Credit card logo" class="payment-logo">
            <p>Aceitamos pagamentos com cartão de crédito. Aceitamos os seguintes cartões de crédito: Visa, Mastercard e American Express.</p>
          </div>
          <div class="payment-option">
            <img src="http://localhost/desenvolvimento/Sobre/images/google-pay.png" alt="Google Pay logo" class="payment-logo">
            <p>Aceitamos pagamentos com Google Pay. O Google Pay permite que você pague usando sua conta do Google ou cartão de crédito.</p>
          </div>
          <div class="payment-option">
            <img src="http://localhost/desenvolvimento/Sobre/images/cartoes.png" alt="Debit card logo" class="payment-logo">
            <p>Aceitamos pagamentos com cartão de débito. Aceitamos os seguintes cartões de débito: Visa, Mastercard e American Express.</p>
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