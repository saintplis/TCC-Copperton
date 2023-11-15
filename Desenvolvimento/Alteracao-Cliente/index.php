<?php
include('C:\xampp\htdocs\Desenvolvimento\Carrinho\code\protect.php');
?>
<?php

require_once 'C:\xampp\htdocs\Desenvolvimento\Produto\code\connection.php';

$user = $_SESSION['user'];
$user_id = $user[1];

?>
<?php

if (isset($_POST['submit'])) {

  include_once('C:\xampp\htdocs\Desenvolvimento\Cadastro-Cliente\code\config.php');

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $estadocivil = $_POST['estadocivil'];
  $telefone1 = $_POST['telefone1'];
  $telefone2 = $_POST['telefone2'];
  $senha = $_POST['senha'];
  $confirmar = $_POST['confirmar'];

  if ($senha != $confirmar) {
    echo "<script>window.alert('As senhas não combinam! Tente novamente.')</script>";
  } else {
    $result = mysqli_query($conexao, "UPDATE tb_cliente SET CLI_NOME='$nome', CLI_SOBRENOME='$sobrenome', CLI_ESTADOCIVIL='$estadocivil', CLI_TELEFONE1='$telefone1', CLI_TELEFONE2='$telefone2' WHERE ID_CLIENTE='$user_id'");

    $result_query = mysqli_query($conexao, "UPDATE tb_login SET LOG_NOME='$nome', LOG_SENHA='$senha' WHERE ID_CLIENTE='$user_id'");
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coppeton - User Profile</title>
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
      <li><a href="http://localhost/desenvolvimento/Catalogo/code/index.php">Produtos</a></li>
      <li><a href="http://localhost/desenvolvimento/Carrinho/code/index.php">Carrinho</a></li>
      <li><a href="http://localhost/desenvolvimento/Sobre/code/index.php">Sobre</a></li>
      <li><a href="http://localhost/desenvolvimento/Cadastro-Cliente/code/index.php">Cadastro</a></li>
      <li><a href="http://localhost/desenvolvimento/Pedido/code/index.php">Pedidos</a></li>
    </ul>
    <div class="logout">
      <?php
      if (isset($_SESSION['admin'])) {
        $admin = $_SESSION['admin'];
        echo $admin[0] . ' - Admin | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
      } else if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo $user[0] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
      } else {
        echo '<li><a href="http://localhost/desenvolvimento/Login/code/index.php">Entrar</a></li>';
      }
      ?>
    </div>
  </header>
  <!-- Main -->
  <section class="main">
    <div class="container">
      <h1 class="header-container"><i class='bx bxs-user'></i>Configurações da Conta</h1>
      <div class="bg-container">
        <div class="user">
          <h2 class="user-name"><i class='bx bxs-user'></i><?php echo $user[0]; ?></h2>
        </div>
        <div class="config">
          <h2 class="config-header">Atualizar Dados: </h2>
          
            <?php

            $select_query = "SELECT * FROM tb_cliente WHERE ID_CLIENTE=$user_id";
            $result_query = mysqli_query($conexao, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
              $nome = $row["CLI_NOME"];
              $sobrenome = $row["CLI_SOBRENOME"];
              $telefone1 = $row["CLI_TELEFONE1"];
              $telefone2 = $row["CLI_TELEFONE2"];
            ?>
            <form action="index.php" method="post">
              <div class="form-container">
                <div class="dados-pessoais">
                  <span class="title">1 - Dados Pessoais</span>
                  <div class="fields">
                    <div class="inputs">
                      <label for="nome">Nome:</label>
                      <input type="text" id="nome" name="nome" required placeholder="<?php echo $nome; ?>">
                    </div>
                    <div class="inputs">
                      <label for="sobrenome">Sobrenome:</label>
                      <input type="text" id="sobrenome" name="sobrenome" required placeholder="<?php echo $sobrenome; ?>">
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
                      <label for="telefone1">Telefone 1:</label>
                      <input type="tel" id="telefone1" name="telefone1" required placeholder="<?php echo $telefone1; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11">
                    </div>
                    <div class="inputs">
                      <label for="telefone2">Telefone 2:</label>
                      <input type="tel" id="telefone2" name="telefone2" placeholder="<?php echo $telefone2; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11">
                    </div>
                  </div>
                </div>
                <div class="senha">
                  <span class="title">3 - Senha</span>
                  <div class="fields">
                    <div class="inputs">
                      <label for="senha">Senha:</label>
                      <input type="password" id="senha" name="senha" minlength="6" maxlength="12" onKeyUp="verificaForcaSenha();" required placeholder="Digite sua senha">
                      <script src="password.js"></script>
                    </div>
                    <div class="inputs">
                      <label for="confirmar">Confirmar Senha:</label>
                      <input type="password" id="confirmar" name="confirmar" minlength="6" maxlength="12" required placeholder="Confirme sua senha">
                      <script src="validation.js"></script>
                    </div>
                    <div class="inputs">
                      <span id="password-status"></span>
                      <span id="password-validation"></span>
                    </div>
                  </div>
                </div>
                <div>
                  <button class="atualizar" name="submit">Atualizar</button>
                </div>
              </div>
              </form>
            <?php
            }
            ?>
          
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