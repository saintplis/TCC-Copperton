<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_copperton';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if(isset($_GET["id"]) || isset($_GET['uid'])) {
        $product_id = $_GET["id"];
        $user_id = $_GET["uid"];
        $sql = "SELECT * FROM tb_carrinho WHERE ID_PRODUTO = $product_id AND ID_CLIENTE = $user_id";
        $result = $conexao->query($sql);
        $total_cart = "SELECT * FROM tb_carrinho";
        $total_cart_result = $conexao->query($total_cart);
        $cart_num = mysqli_num_rows($total_cart_result);

        if(mysqli_num_rows($result) > 0){
            $in_cart = "Item no carrinho";

            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            $insert = "INSERT INTO tb_carrinho(ID_PRODUTO,ID_CLIENTE) values('$product_id','$user_id')";
            if($conexao->query($insert) === true){
                $in_cart = "Item no carrinho";
                echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
            }else{
                echo "<script>alert(Não foi adicionado)</script>";
            }
        }
    }
    if(isset($_GET["r_id"]) || isset($_GET['r_uid'])) {
        $remove_id = $_GET["r_id"];
        $remove_uid = $_GET["r_uid"];
    
        $sql_remove = "DELETE FROM tb_carrinho WHERE ID_PRODUTO = $remove_id AND ID_CLIENTE = $remove_uid";
        $remove = $conexao->query($sql_remove);
    }
?>