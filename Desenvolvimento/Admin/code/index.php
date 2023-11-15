<?php
include('C:\xampp\htdocs\Desenvolvimento\Cadastro-Produto\code\protect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Copperton - Admin Deshboard</title>
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
                <li><a href="http://localhost/desenvolvimento/Pedido/code/index.php">Pedidos</a></li>
            </ul>
            <div class="logout">
            <?php 
            $admin = $_SESSION['admin'];
            echo $admin[0] . ' - Admin | ' . '<a href="http://localhost/desenvolvimento/Inicio/code/logout.php">Sair</a>';
            ?>
            </div>
        </header>
        <!-- Pages -->
        <section class="dashboard">
            <div class="pages">
                <div class="name-pages">
                    <h1>Páginas</h1>
                </div>
                <ul>
                    <li><i class='bx bxs-dashboard'></i><a href="">Dashboard</a></li>
                    <li><i class='bx bx-group'></i></i><a href="http://localhost/desenvolvimento/Cadastro-Funcionario/code/index.php">Funcionário</a></li>
                    <li><i class='bx bx-user'></i><a href="http://localhost/desenvolvimento/Cadastro-Cliente/code/index.php">Cliente</a></li>
                    <li><i class='bx bx-shopping-bag'></i><a href="http://localhost/desenvolvimento/Cadastro-Produto/code/index.php">Produto</a></li>
                    <li><i class='bx bx-home-alt-2'></i><a href="http://localhost/desenvolvimento/Inicio/code/index.php">Home</a></li>
                    <li><i class='bx bx-log-in-circle'></i><a href="http://localhost/desenvolvimento/Login/code/index.php">Login</a></li>
                    <li><i class='bx bx-spreadsheet'></i></i><a href="http://localhost/desenvolvimento/Sobre/code/index.php">Sobre</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="header">
                    <div class="nav">
                        <div class="user">
                            <h2>Bem-vindo(a) <a><?php echo $admin[0]; ?></a>!</h2>
                        </div>
                        <div class="settings">
                            <i class='bx bx-cog' ></i>
                        </div>
                    </div>
                </div>
                <div class="dashboard">
                    <iframe title="Copperton Dashboard" width="1230" height="750" src="https://app.powerbi.com/view?r=eyJrIjoiYWZmYWMzOWMtNmU2Yy00MWU5LWIzM2QtZTAxNzI4OTI2NGE4IiwidCI6IjY3YmJjMjk2LTBjNTMtNDI0ZC04NWNhLTU5YzEzZDQ2NDQ3NSJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
            </div>
        </section>
        <!-- Dashboard -->
        <script src="script.js"></script>
    </body>
</html>