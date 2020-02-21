<?php
class Cliente extends Conexao{
        function cadastrar($nome, $sobrenome, $cpf, $email, $senha, $cep, $cidade, $estado, $endereco){
        if($con = Conexao::Conectar()){
            echo 'Conectado ao banco de dados...';
        } else {
            echo 'Erro ao conectar banco de dados';
        }

        //verificar email, se ja esta cadastrado
            $select = 'SELECT usu_id FROM usuario WHERE usu_email = :email';
            $emailc = $con->prepare($select);
            //atribui o valor da variavel $email para :email
            $emailc->bindValue(":email", $email);
            $emailc->execute();
 
         //se a consulta encontrou algum id o valor sera maior que 0
         //rowCout traz o numero de registro no bd
            if($emailc->rowCount()>0){
                echo '<strong><h1>Email ja cadastrado!</h1></strong>';
            }else{        
            $insert = 'INSERT INTO usuario (usu_nome, usu_sobrenome, usu_cpf, usu_email, usu_senha, usu_cep, usu_cidade, usu_estado, usu_endereco)
            VALUE (:nome, :sobrenome, :cpf, :email, :senha, :cep, :cidade, :estado, :endereco)';
            
            $sql = $con->prepare($insert); 
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":sobrenome", $sobrenome);
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":cep", $cep);
            $sql->bindValue(":cidade", $cidade);
            $sql->bindValue(":estado", $estado);
            $sql->bindValue(":endereco", $endereco);

            if($sql->execute()){
                echo "<script type='javascript'>
                        alert('Cadastro realizado com sucesso!');
                    </script>";
                header("location: ../login");
            }else {
                echo '<p>erro ao inserir</p>';
            }
        }
    }
    function login($email, $senha){
        if($con = Conexao::Conectar()){
            //verificar se o email e senha cadastrado
            $select = 'SELECT * FROM usuario WHERE usu_email = :email AND usu_senha = :senha';
            $sql = $con->prepare($select);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->execute();
    
            //verificar se o email e senha cadastrado
            if($sql->rowCount()>0){
                //entra no sistema
                $dado = $sql->fetch(PDO::FETCH_ASSOC);
            //session_start();
                $_SESSION['usu_id'] = $dado['usu_id'];
                $_SESSION['usu_acesso'] = $dado['usu_acesso'];
            }
        }
    }

}
?>