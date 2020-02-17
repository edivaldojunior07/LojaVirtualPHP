<?php
session_start();
    $smarty= new Template();
    if($_SESSION['usu_acesso'] == 2){
        $smarty->display('produtos_cadastrar.tpl');
    } else {
        // Se não for o administrador carrega pagina de informçoes do produto com opção de comprar
        //[1] em referencia ao arrey que representa o ID
        header("location: produtos");
}
?>
