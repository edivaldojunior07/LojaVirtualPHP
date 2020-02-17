<?php
class Conexao extends Config{
    private $host, $user, $senha, $banco;
    protected $obj, $itens=array(), $prefix;
    static $pdo;

    function __construct(){
        /*
            $this se refere ao objeto (instância) atual, e self se refere à classe. Portanto, como regra geral,
            usa-se $this para acessar membros (atributos, métodos) da instância e self para acessar membros estáticos.        
        */
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_NOME;
        $this->prefix= self::BD_PREFIX;
       
        try {
            if(is_null(self::$pdo)){
            $this->Conectar();
            }
        } catch (Exception $e){
            exit ($e->getMessage(). "<h1>Erro ao conectar banco de dados</h1>");
        }
    }
    function Conectar(){
        //se a conexão não for nula
            $options = array(
            //setar nomes com configuração utf-8
            PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            //link conexão com banco
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user, $this->senha, $options); 
            return $pdo;
        }

    function ExecuteSQL($query, array $params = NULL ){
        $this->obj = $this->Conectar()->prepare($query);
        return $this->obj->execute();
    }
    //Pega a consulta obj e lista os dados 
    function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    //traz os total de dados na consulta ao db, 
    function TotalDados(){
        return $this->obj->rowCount();
    }
    function GetItens(){
        return $this->itens;
    }
}
?>