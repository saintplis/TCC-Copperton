<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_copperton';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if(isset($_GET["id"])){
        $product_id = $_GET["id"];
        $sql = "SELECT * FROM tb_carrinho WHERE ID_PRODUTO = $product_id";
        $result = $conexao->query($sql);
        $total_cart = "SELECT * FROM tb_carrinho";
        $total_cart_result = $conexao->query($total_cart);
        $cart_num = mysqli_num_rows($total_cart_result);

        if(mysqli_num_rows($result) > 0){
            $in_cart = "Item no carrinho";

            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            $insert = "INSERT INTO tb_carrinho(ID_PRODUTO) values($product_id)";
            if($conexao->query($insert) === true){
                $in_cart = "Item no carrinho";
                echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
            }else{
                echo "<script>alert(Não foi adicionado)</script>";
            }
        }
    }

    if(isset($_GET["cart_id"])){
         $product_id = $_GET["cart_id"];
         $sql = "DELETE FROM tb_carrinho WHERE ID_PRODUTO=".$product_id;

         if($conexao->query($sql) === TRUE){
         }
    }
?>