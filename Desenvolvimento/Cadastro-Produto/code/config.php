<?php
$usuario = 'root';
$senha = '';
$database = 'db_copperton';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->connect_errno)
    {
    echo "Erro";
    }
    else
    {
    echo "Conexão efetuada com sucesso";
    }
?>