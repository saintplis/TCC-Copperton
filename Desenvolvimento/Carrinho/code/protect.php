<?php

if(!isset($_SESSION)){
    session_start();
}
if((!isset($_SESSION['user'])) && (!isset($_SESSION['admin']))){
    die(header("Location: http://localhost/desenvolvimento/Login/code/index.php"));
}
?>