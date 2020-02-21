<?php
require_once '../lib/autoload.php';
session_start();
$cliente = new Cliente();
$email = addslashes($_POST["email"]);
$senha = addslashes($_POST["senha"]);

if(!empty($email) && !empty($senha)){
    $cliente->login($email, $senha);
        echo '<h1>
        Please wait...
        Login successfully!<h1>';
        header("Refresh:1 ; ../produtos");
} else{
    echo "<h1>Não foi possivel fazer login, <p>verifique os dados e tente novamente!...</p><h1>";  
    header("Refresh:1 ; ../login");
} 
?>