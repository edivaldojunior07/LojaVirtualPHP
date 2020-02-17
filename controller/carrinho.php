<?php
session_start();
    if(!isset($_SESSION['usu_id'])){
        header("location: login");
        exit;
    }
    $smarty= new Template();
    $smarty->display('carrinho.tpl');
?>