<?php

require_once 'C:\xampp\htdocs\Desenvolvimento\Produto\code\connection.php';

$sql_cart = "SELECT * FROM tb_carrinho";
$all_cart = $conexao->query($sql_cart);

?>
<?php
include('protect.php');
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
        <main class="container">
          <h1 class="header">
            <i class='bx bx-cart'></i>Carrinho
          </h1>
          <div class="item-flex">
            <section class="checkout">
              <h2 class="section-header">Detalhes do Pagamento</h2>
              <div class="pagamento-form">
                <div class="pagamento-metodo">
                  <button id="botao1" onclick="mudarCor1()">
                    <i class='bx bx-credit-card'></i>
                    <span>Cartão de Crédito</span>
                  </button>
                  <button id="botao2" onclick="mudarCor2()">
                    <i class='bx bxl-paypal'></i>
                    <span>Paypal</span>
                  </button>
                </div>
                <form action="#">
                  <div class="cartao-nome">
                    <label for="cartao-nome" class="labels">Nome do Cartão</label>
                    <input type="text" name="cartao-nome" id="cartao-nome" class="inputs">
                  </div>
                  <div class="cartao-numero">
                    <label for="cartao-numero" class="labels">Número do Cartão</label>
                    <input type="number" name="cartao-numero" id="cartao-numero" class="inputs">
                  </div>
                  <div class="input-flex">
                    <div class="data-validade">
                      <label for="data-validade" class="labels">Data de Validade</label>
                      <div class="input-flex">
                        <input type="number" name="dia" id="data-validade" class="inputs" placeholder="31" min="1" max="31">
                        /
                        <input type="number" name="mes" id="data-validade" class="inputs" placeholder="12" min="1" max="12">
                      </div>
                    </div>
                    <div class="cvv">
                      <label for="cvv" class="labels">CVV</label>
                      <input type="number" name="cvv" id="cvv" class="inputs">
                    </div>
                  </div>
                </form>
              </div>
              <button class="pagar">
                <b>Pagar:</b> R$<span id="pagar-total"></span>
              </button>
            </section>
            <section class="carrinho">
              <div class="carrinho-itens">
                <h2 class="section-header">Ordem de Produtos</h2>
                <div class="ordem-produto">
                  <?php
                    while($row_cart = mysqli_fetch_assoc($all_cart)){
                      $sql = "SELECT * FROM tb_produto WHERE ID_PRODUTO=".$row_cart["ID_PRODUTO"];
                      $all_product = $conexao->query($sql);
                      while($row = mysqli_fetch_assoc($all_product)){
                  ?>
                  <div class="ordem-item">
                    <div class="img-box">
                      <img src="http://localhost/desenvolvimento/Cadastro-Produto/imagens/<?php echo $row["PRO_IMAGEM1"]; ?>" alt="" class="ordem-imagem">
                    </div>
                    <div class="ordem-detalhes">
                      <h4 class="detalhes-nome"><?php echo $row["PRO_NOME"]; ?></h4>
                      <div class="detalhes-info">
                        <div class="detalhes-quantidade">
                          <button id="remover">
                            <i class='bx bx-minus'></i>
                          </button>
                          <span id="quantidade">1</span>
                          <button id="acrescentar">
                            <i class='bx bx-plus'></i>
                          </button>
                        </div>
                        <div class="detalhes-preco">
                          R$ <span id="preco"><?php echo $row["PRO_PRECO"]; ?></span>
                        </div>
                      </div>
                    </div>
                    <button class="excluir">
                      <i class='bx bx-x' data-id="<?php echo $row["ID_PRODUTO"]; ?>"></i>
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
                  <div class="extrato-subtotal">
                    <span>Subtotal:</span><span>R$ <span id="extrato-subtotal"></span></span>
                  </div>
                  <div class="extrato-taxas">
                    <span>Taxas:</span><span>R$ <span id="extrato-taxas"></span></span>
                  </div>
                  <div class="extrato-desconto">
                    <span>Desconto:</span><span>R$ <span id="extrato-desconto">0,00</span></span>
                  </div>
                  <div class="extrato-total">
                    <span>Total:</span><span>R$ <span id="extrato-total"></span></span>
                  </div>
                </div>
              </div>
            </section>
          </div>
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
      <script src="script.js"></script>
      <script>
        var remove = document.getElementsByClassName("excluir");
        for(var i = 0; i<remove.length; i++){
          remove[i].addEventListener("click",function(event){
            var target = event.target;
            var cart_id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
              if(this.readyState == 4 && this.status == 200){
                target.innerHTML = this.responseText;
                target.style.opacity = .3;
              }
            }
            xml.open("GET","http://localhost/desenvolvimento/Produto/code/connection.php?cart_id="+cart_id,true);
            xml.send();
          })
        }
      </script>
    </body>
</html>