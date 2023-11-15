<?php
include('C:\xampp\htdocs\Desenvolvimento\Carrinho\code\protect.php');
?>
<?php

require_once 'C:\xampp\htdocs\Desenvolvimento\Produto\code\connection.php';

$user = $_SESSION['user'];
$user_id = $user[1];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coppeton - Pedido</title>
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
        <!-- Main -->
        <section>
            <div class="container-title">
                <div class="title">
                    <i class='bx bxs-shopping-bags'></i><h2>Acompanhamento de Pedidos</h2>
                </div>
                <div class="user">
                    <h2><?php echo $user[0]; ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="painel">
                    <div class="painel-contents">
                            <div class="info-painel">
                                <h3>ID DO PEDIDO</h3>
                                <h3>NOME DO PRODUTO</h3>
                                <h3>MEIO DE PAGAMENTO</h3>
                                <h3>QUANTIDADE</h3>
                                <h3>TOTAL</h3>
                                <h3>DATA DO PEDIDO</h3>
                                <h3>SITUAÇÃO DA ENTREGA</h3>
                            </div>
                            <?php 

                            $select_query = "SELECT * FROM tb_pedido WHERE ID_CLIENTE=$user_id";
                            $result_query=mysqli_query($conexao,$select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $id_pedido = $row["ID_PEDIDO"];
                                $id_produto = $row["ID_PRODUTO"];
                                $pagamento = $row["PED_PAGAMENTO"];
                                $qty = $row["PED_QUANTIDADE"];
                                $total = $row["PED_TOTAL"];
                                $dt_pedido = $row["PED_DTPEDIDO"];
                                $entrega = $row["PED_ENTREGA"];

                                $valor = preg_replace('/[^0-9]/', '', $total);    
                                $valor = bcdiv($valor, 100, 2);
                                $valor = strtr($valor, '.', ',');

                                if($entrega == 'false'){
                                    $entrega = 'Em Estoque';
                                } else{
                                    $entrega = 'Enviado';
                                }
                                if($pagamento == 'credito'){
                                    $pagamento = 'Crédito';
                                } else{
                                    $pagamento = 'Débito';
                                }

                                $query = "SELECT PRO_NOME FROM tb_produto WHERE ID_PRODUTO=$id_produto";
                                $result=mysqli_query($conexao,$query);
                                while($test=mysqli_fetch_assoc($result)){
                                    $nome_produto = $test["PRO_NOME"];

                                // echo "
                                // <div>
                                    // <tr>
                                        // <th>ID DO PEDIDO: $id_pedido</th>
                                        // <th>ID DO PRODUTO: $id_produto</th>
                                        // <th>MÉTODO DE PAGAMENTO: $pagamento</th>
                                        // <th>QUANTIDADE: $qty</th>
                                        // <th>TOTAL: R$ $total</th>
                                        // <th>DATA DO PEDIDO: $dt_pedido</th>
                                        // <th>SITUAÇÃO DA ENTREGA: $entrega</th>
                                    // </tr>
                                // </div>
                                // ";
                            ?>
                            <div class="itens-painel">
                                <div id="itens"><?php echo "$id_pedido";?></div>
                                <div id="itens"><?php echo "$nome_produto";?></div>
                                <div id="itens"><?php echo "Cartão de $pagamento";?></div>
                                <div id="itens"><?php echo "$qty un";?></div>
                                <div id="itens"><?php echo "R$ $valor";?></div>
                                <div id="itens"><?php echo (new \DateTimeImmutable($dt_pedido))->format('d/m/Y');?></div>
                                <div id="itens"><?php echo "$entrega";?></div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                    </div>
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