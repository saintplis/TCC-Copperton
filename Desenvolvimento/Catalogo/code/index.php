<?php
include('C:\xampp\htdocs\Desenvolvimento\Inicio\code\protect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coppeton - Catálogo</title>
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
        <!-- Produtos -->
        <div class="pages">
            <div class="name-pages">
                <h2>Categorias</h2>
            </div>
            <ul>
                <li><i class='bx bx-spreadsheet'></i><a href="#camiseta">Camiseta</a></li>
                <li><i class='bx bx-spreadsheet'></i></i><a href="#moletom">Moletom</a></li>
                <li><i class='bx bx-spreadsheet'></i><a href="#calca">Calça</a></li>
                <li><i class='bx bx-spreadsheet'></i><a href="#gorro">Gorro</a></li>
                <li><i class='bx bx-spreadsheet'></i><a href="#bone">Boné</a></li>
                <li><i class='bx bx-spreadsheet'></i><a href="#acessorio">Acessório</a></li>
                <li><i class='bx bx-spreadsheet'></i></i><a href="#jaqueta">Jaqueta</a></li>
                <li><i class='bx bx-spreadsheet'></i></i><a href="#bandeirao">Bandeirão</a></li>
                <li><i class='bx bx-spreadsheet'></i></i><a href="#short">Short</a></li>
            </ul>
        </div>
        <section class="produto">
            <div class="produto-header">
                <span>Nossos Produtos</span>
                <h2>Desfrute de uma variedade de coleções</h2>
            </div>
            <div class="product-category" id="camiseta">
                <h2>Camisetas</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='camiseta' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="moletom">
                <h2>Moletons</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='moletom' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="calca">
                <h2>Calças</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='calça' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="gorro">
                <h2>Gorro</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Gorro' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="bone">
                <h2>Boné</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Bone' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="acessorio">
                <h2>Acessórios</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Acessorio' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="jaqueta">
                <h2>Jaqueta</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Jaqueta' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="bandeirao">
                <h2>Bandeirão</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Bandeirao' order by rand() LIMIT 0,4";
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
            <div class="product-category" id="short">
                <h2>Shorts</h2>
            </div>                
            <div class='produto-container'>
            <?php
                include_once('C:\xampp\htdocs\Desenvolvimento\Inicio\code\config.php');

                $select_query = "SELECT * FROM tb_produto WHERE PRO_CATEGORIA='Short' order by rand() LIMIT 0,4";
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