<?php
include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM tb_login WHERE CLI_EMAIL = '$email' AND CLI_SENHA = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['CLI_NOME'] = $usuario['CLI_NOME'];

            header("Location: http://localhost/desenvolvimento/Inicio/code/index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
            <a href="#" class="logo">Copperton</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="/Inicio/code/index.html">Produtos</a></li>
                <li><a href="/Carrinho/code/index.html">Carrinho</a></li>
                <li><a href="/Sobre/code/index.html">Sobre</a></li>
                <li><a href="/Cadastro-Cliente/code/index.html">Cadastro</a></li>
                <li><a href="/Login/code/index.html">Login</a></li>
            </ul>
            <div class='bx bx-user' id="user"></div>
        </header>
        <!-- Main -->
        <div class="backgroud"></div>
        <section class="container">
            <div class="wrap">
                <h2 class="title">Copperton</h2>
                <div class="fields">
                    <h2>Bem vindo!<br><span>Entre em nosso site</span></h2>
                    <p>Desfrute de nossos produtos e promoções</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/profile.php?id=100091055314736"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/copperton_ltda/"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.linkedin.com/in/copperton-ltda-01292126a/"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://twitter.com/Copperton_LTDA "><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>
            </div>
            <div class="login-section">
                <div class="form-login">
                    <form action="" method="post">
                        <h2>Entrar</h2>
                        <div class="inputs">
                            <span class="icon"><i class='bx bx-envelope'></i></span>
                            <input type="email" required name="email">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="inputs">
                            <span class="icon"><i class='bx bx-lock-alt'></i></span>
                            <input type="password" required name="senha">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="lembrar-senha">
                            <label for=""><input type="checkbox">Lembrar Senha</label>
                            <a href="#">Esqueci a Senha</a>
                        </div>
                        <button class="entrar">Entrar</button>
                        <div class="criar-conta">
                            <p>Não possui uma conta? <a href="/Cadastro-Cliente/code/index.html" class="cadastro-link">Cadastre-se</a></p>
                        </div>
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
                    <li><a href="/Sobre/code/index.html">sobre nós</a></li>
                    <li><a href="/Sobre/code/index.html">nossos serviços</a></li>
                    <li><a href="/Sobre/code/index.html">política de privacidade</a></li>
                    <li><a href="/Sobre/code/index.html">programa de afiliação</a></li>
                  </ul>
                </div>
                <div class="footer-box">
                  <h4>Ajuda</h4>
                  <ul class="footer-list">
                    <li><a href="/Sobre/code/index.html">FAQ</a></li>
                    <li><a href="/Sobre/code/index.html">entrega</a></li>
                    <li><a href="/Sobre/code/index.html">atendente</a></li>
                    <li><a href="/Sobre/code/index.html">opções de pagamento</a></li>
                  </ul>
                </div>
                <div class="footer-box">
                  <h4>Entrega</h4>
                  <ul class="footer-list">
                    <li><a href="/Sobre/code/index.html">rastreamento</a></li>
                    <li><a href="/Sobre/code/index.html">QR Code</a></li>
                    <li><a href="/Sobre/code/index.html">entrega rápida</a></li>
                    <li><a href="/Sobre/code/index.html">tipos de frete</a></li>
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