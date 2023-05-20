<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['LOG_NOME'])) {
    die(header("Location: http://localhost/desenvolvimento/Login/code/index.php"));
}
?>