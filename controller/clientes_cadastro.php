<?php
require_once '../lib/autoload.php';
    $cliente = new Cliente();
        $nome = addslashes($_POST['nome']);
        $sobrenome = addslashes($_POST['sobrenome']);
        $cpf = addslashes($_POST["cpf"]);
        $email = addslashes($_POST["email"]);
        $senha = addslashes($_POST["senha"]);
        $conf_senha = addslashes($_POST["conf_senha"]);
        $cep = addslashes($_POST["cep"]);
        $cidade = addslashes($_POST["cidade"]);
        $estado = addslashes($_POST["estado"]);
        $endereco = addslashes($_POST["endereco"]);
        //verificar campo vazio
    if(!empty($nome) && !empty($sobrenome) && !empty($cpf) && !empty($email) && !empty($senha) && !empty($conf_senha) && !empty($cep) 
    && !empty($cidade) && !empty($estado) && !empty($endereco)){
        //verifica se as senhas digitadas são iguais
        if($conf_senha == $senha){
            $cliente->cadastrar($nome, $sobrenome, $cpf, $email, $senha, $cep, $cidade, $estado, $endereco);
        }else
        echo "Senhas informadas são diferentes";
    }else{
        echo "preencha todos os dados!!";
    }
?>