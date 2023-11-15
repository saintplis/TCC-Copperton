<?php
include('protect.php');
?>
<?php

require_once 'C:\xampp\htdocs\Desenvolvimento\Produto\code\connection.php';

$user = $_SESSION['user'];
$user_id = $user[1];

$sql_cart = "SELECT * FROM tb_carrinho WHERE ID_CLIENTE = $user_id";
$all_cart = $conexao->query($sql_cart);

if (isset($_POST['submit'])) {
  while ($row_cart = mysqli_fetch_assoc($all_cart)) {
    $sql = "SELECT * FROM tb_carrinho WHERE ID_CLIENTE = '$user_id' AND ID_PRODUTO=" . $row_cart["ID_PRODUTO"];
    $all_product = $conexao->query($sql);
    while ($row = mysqli_fetch_assoc($all_product)) {

      $product = $row["ID_PRODUTO"];
      $payment_option = $_POST['payment'];
      $qty = $_POST['quantidade_' . $row["ID_PRODUTO"]];
      $price = $_POST['preco_' . $row["ID_PRODUTO"]];
      $total_price = $price * $qty;

      $result = mysqli_query($conexao, "INSERT INTO tb_pedido(ID_PRODUTO,ID_CLIENTE,PED_PAGAMENTO,PED_QUANTIDADE,PED_TOTAL)
        VALUES ('$product','$user_id','$payment_option','$qty','$total_price')");

      $sql_delete = "DELETE FROM tb_carrinho WHERE ID_PRODUTO = '$product' AND ID_CLIENTE = '$user_id'";
      $delete_result = $conexao->query($sql_delete);

      $sql_qty = "UPDATE tb_produto SET PRO_QUANTIDADE = PRO_QUANTIDADE - $qty WHERE ID_PRODUTO='$product'";
      $qty_result = $conexao->query($sql_qty);
    }
    echo "
      <script>window.alert('Pedido realizado!')</script>
      ";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coppeton - Carrinho</title>
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
  <main class="container">
    <h1 class="header">
      <i class='bx bx-cart'></i>Carrinho
    </h1>
    <form action="index.php" method="post">
      <div class="item-flex">
        <section class="checkout">
          <h2 class="section-header">Detalhes do Pagamento</h2>
          <div class="pagamento-form">
            <div class="pagamento-metodo">
              <input type="radio" value="credito" name="payment" id="credito">
              <label for="credito" class="credito"><i class='bx bxs-credit-card'><span>Crédito</span></i></label>
              <input type="radio" value="debito" name="payment" id="debito">
              <label for="debito" class="debito"><i class='bx bxs-credit-card'><span>Débito</span></i></label>
            </div>
            <div class="cartao-nome">
              <label for="cartao-nome" class="labels">Nome do Cartão</label>
              <input type="text" name="cartao-nome" id="cartao-nome" class="inputs" required>
            </div>
            <div class="cartao-numero">
              <label for="cartao-numero" class="labels">Número do Cartão</label>
              <input type="number" name="cartao-numero" id="cartao-numero" class="inputs" required>
            </div>
            <div class="input-flex">
              <div class="data-validade">
                <label for="data-validade" class="labels">Data de Validade</label>
                <div class="input-flex">
                  <input type="number" name="dia" id="data-validade" class="inputs" placeholder="31" min="1" max="31" required>
                  /
                  <input type="number" name="mes" id="data-validade" class="inputs" placeholder="12" min="1" max="12" required>
                </div>
              </div>
              <div class="cvv">
                <label for="cvv" class="labels">CVV</label>
                <input type="number" name="cvv" id="cvv" class="inputs" required>
              </div>
            </div>
          </div>
          <button class="pagar" name="submit">
            <b>Pagar:</b> R$<span id="pagar-total"></span>
          </button>
        </section>
        <section class="carrinho">
          <div class="carrinho-itens">
            <h2 class="section-header">Ordem de Produtos</h2>
            <div class="ordem-produto">
              <?php
              while ($row_cart = mysqli_fetch_assoc($all_cart)) {
                $sql = "SELECT * FROM tb_produto WHERE ID_PRODUTO=" . $row_cart["ID_PRODUTO"];
                $all_product = $conexao->query($sql);
                while ($row = mysqli_fetch_assoc($all_product)) {

                  $valor = preg_replace('/[^0-9]/', '', $row["PRO_PRECO"]);
                  $valor = bcdiv($valor, 100, 2);
                  $valor = strtr($valor, '.', ','); 

              ?>
                  <div class="ordem-item">
                    <a href="http://localhost/desenvolvimento/Produto/code/index.php?product_id=<?php echo $row["ID_PRODUTO"]; ?>">
                      <div class="img-box">
                        <img src="http://localhost/desenvolvimento/Cadastro-Produto/imagens/<?php echo $row["PRO_IMAGEM1"]; ?>" alt="" class="ordem-imagem">
                      </div>
                    </a>
                    <div class="ordem-detalhes">
                      <h4 class="detalhes-nome"><?php echo $row["PRO_NOME"]; ?></h4>
                      <div class="detalhes-info">
                        <div class="detalhes-quantidade">
                          <div class="input-group">
                            <div class="dec button">-</div>
                            <input type="number" readonly="readonly" name="quantidade_<?php echo $row['ID_PRODUTO']; ?>" id="1" max="<?php echo $row["PRO_QUANTIDADE"]; ?>" value="1" class="input-filed">
                            <div class="inc button">+</div>
                          </div>
                        </div>
                        <div class="detalhes-preco">
                          <span>R$ </span><input id="preco" class="preco" name="preco_<?php echo $row["ID_PRODUTO"]; ?>" readonly="readonly" value="<?php echo $valor; ?>"></input>
                        </div>
                      </div>
                    </div>
                    <button class="excluir">
                      <i class='bx bx-x' data-id="<?php echo $row["ID_PRODUTO"]; ?>" data-uid="<?php echo $user_id ?>"></i>
                    </button>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
          <div class="cupom">
            <div class="cupom-desconto">
              <label for="cupom-desconto" class="labels">Cupom de Desconto</label>
              <div class="cupom-flex">
                <input type="text" name="cupom-desconto" id="cupom-desconto" class="inputs">
                <button class="cupom-aplicar">Aplicar</button>
              </div>
            </div>
            <div class="extrato">
              <div class='extrato-total'>
                <span>Total:</span><span>R$ <input type="text" readonly="readonly" name="total" id="total" /></span>
              </div>
            </div>
          </div>
        </section>
      </div>
    </form>
  </main>
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
  <script src="qty.js"></script>
  <script src="remove.js"></script>
</body>

</html>