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

        $sql_code = "SELECT * FROM tb_login WHERE LOG_EMAIL = '$email' AND LOG_SENHA = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            session_start();

            if($usuario["LOG_USERTYPE"]=="on"){
                $_SESSION['admin'] = $usuario['LOG_NOME'];
                header("Location: http://localhost/desenvolvimento/Cadastro-Funcionario/code/index.php");
            }elseif($usuario["LOG_USERTYPE"]=="user"){
                $_SESSION['user'] = $usuario['LOG_NOME'];
                header("Location: http://localhost/desenvolvimento/Inicio/code/index.php");
            }
            else {
            echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
    
}
?>
<?php
include('C:\xampp\htdocs\Desenvolvimento\Inicio\code\protect.php');
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
                            <p>Não possui uma conta? <a href="http://localhost/desenvolvimento/Cadastro-Cliente/code/index.php" class="cadastro-link">Cadastre-se</a></p>
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