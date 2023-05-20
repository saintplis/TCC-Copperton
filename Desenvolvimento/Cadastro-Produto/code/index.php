<?php
include('protect.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Cadastro</title>
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
            echo $_SESSION['admin'] . ' | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
            ?>
            </div>
        </header>
        <!-- Form -->
        <section class="resgistro">
            <div class="container">
                <h2>Cadastro de Produto</h2>
                <form action="#">
                    <div class="form-container">
                        <div class="id">
                            <span class="title">1- IDs</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="barcode">Código de Barras:</label>
                                    <input type="number" id="barcode" name="barcode" required placeholder="Ex: 9999999999">
                                </div>
                                <div class="inputs">
                                    <label for="nome">Nome do Produto:</label>
                                    <input type="text" id="nome" name="nome" required placeholder="Nome do Produto">
                                </div>
                                <div class="inputs">
                                    <label for="descricao">Descrição:</label>
                                    <textarea id="descricao" name="descricao" required></textarea>
                                </div>
                                <div class="inputs">
                                    <label for="categoria">Categoria:</label>
                                    <select name="categoria" required>
                                        <option value="Camisa">Camisa</option>
                                        <option value="Jaqueta">Jaqueta</option>
                                        <option value="Moletom">Moletom</option>
                                        <option value="Boné">Boné</option>
                                        <option value="Acessórios">Acessórios</option>
                                        <option value="Bandeirão">Bandeirão</option>
                                        <option value="Calca">Calça</option>
                                        <option value="Gorro">Gorro</option>
                                    </select>
                                </div>
                                <div class="inputs">
                                    <label for="preco">Preço:</label>
                                    <input type="number" id="preco" name="preco" required placeholder="Ex: R$99,99">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-1">Imagem Principal:</label>
                                    <input type="file" id="imagem-1" name="imagem-1" required>
                                </div>
                                <div class="inputs">
                                    <label for="imagem-2">Imagem 2:</label>
                                    <input type="file" id="imagem-2" name="imagem-2">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-3">Imagem 3:</label>
                                    <input type="file" id="imagem-3" name="imagem-3">
                                </div>
                                <div class="inputs">
                                    <label for="imagem-4">Imagem 4:</label>
                                    <input type="file" id="imagem-4" name="imagem-4">
                                </div>
                            </div>
                        </div>
                        <div class="local">
                            <span class="title">2 - Localização</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="estoque">ID Estoque:</label>
                                    <input type="text" id="estoque "name="estoque" required placeholder="Ex: CAC0001">
                                </div>
                                <div class="inputs">
                                    <label for="fornecedor">CNPJ Fornecedor:</label>
                                    <input type="text" id="fornecedor "name="fornecedor" required placeholder="Ex: 00-0000.000">
                                </div>
                            </div>
                        </div>
                        <div class="expecificacao">
                            <span class="title">3 - Expecificações</span>
                            <div class="fields">
                                <div class="inputs">
                                    <label for="tamanho">Tamanho:</label>
                                    <input type="text" id="tamanho" name="tamanho" required placeholder="Ex: P/M/G/GG">
                                </div>
                                <div class="inputs">
                                    <label for="cor">Cor:</label>
                                    <input type="text" id="cor" name="cor" required placeholder="Ex: Amarelo">
                                </div>
                                <div class="inputs">
                                    <label for="material">Material:</label>
                                    <input type="text" id="material" name="material" required placeholder="Ex: Algodão">
                                </div>
                            </div>
                        </div>
                        <button class="submit">
                            <span class="submit-text">Cadastrar</span>
                            <i class='bx bx-send'></i>
                        </button>
                    </div>
                </form>
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