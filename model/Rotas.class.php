<?php
//aula 11 - url amigaveis
//self retorna o membro da propria classe ou herdada, que seja ou const ou static
class Rotas {
    
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    
    //tratamento para URl_Amigavel
    static function get_Pagina(){
        //verifica se existe o parametro pag passado pela url
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            //transforma os dados repassados pela URL em um arrey
            self::$pag = explode('/', $pagina);
            
            //var_dump(self::$pag);

            //CASO O SISTEMA SEJA CARREGADO NO linux A BARRA POSE SER DIFERENTE, A VARIAVEL $BARRA CRIADA PARA RESOLVER ESTE PROBLEMA
            $barra = DIRECTORY_SEPARATOR;
            //concatena o parametro(pag) ao diretorio controller e a extenção PHP
            $pagina = self::$pasta_controller .$barra .self::$pag[0] . '.php';

            //$pagina = 'controller'.$barra . $_GET['pag'] . '.php';

            //Se o arquivo existe vai incluir se não vai incluir o arquivo ERRO.php
            if(file_exists($pagina)){
                include $pagina;
            } else{
                include 'erro.php';
            }
        }
    }

    //FUNÇOES DE ROTAS PARA O CONTROLLER

    //URL HOME do Site
    static function get_SiteHOME(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA; //Localhost/LojaVirtual
    }
    //Raiz do site
    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
    }
    //Pasta do tema
    static function get_SiteTEMA(){
        return self::get_SiteHOME().'/'.self::$pasta_view. '/tema';
    }


    //Retorna pagina carrinho
    static function pag_Carrinho(){
        return self::get_SiteHOME().'/carrinho'; //Localhost/LojaVirtual/carrinho.php
    }
    //retorna pagina alteração de carrinho
    static function pag_carrinhoAlterar(){
        return self::get_SiteHOME().'/carrinho_alterar'; //Localhost/LojaVirtual/carrinho_alterar.php
    }
    
    //Retorna pagina de produtos
    static function pag_Produtos(){
        return self::get_SiteHOME().'/produtos'; //Localhost/LojaVirtual/produtos.php
    }
    //Retorna pagina informaçoes de produtos
    static function pag_ProdutosInfo(){
        return self::get_SiteHOME().'/produtos_info'; //Localhost/LojaVirtual/produtos_info.php
    }
    //Retorna pagina informaçoes de produtos
    static function pag_cadastrar_produto(){
        return self::get_SiteHOME().'/produtos_cadastrar'; //Localhost/LojaVirtual/produtos_info.php
    }
    static function pag_atualizarProduto(){
        return self::get_SiteHome().'/produtos_update';
    }
    static function pag_deletarProduto(){
        return self::get_SiteHOME().'/produtos_delete';
    }


    static function pag_logoff(){
        return self::get_SiteHOME().'/logoff';
    }
    //Retorna pagina login
    static function pag_ClienteLogin(){
        return self::get_SiteHOME().'/login'; //Localhost/LojaVirtual/login.php 
    }
    //retorna pagina de recuperação de senha
    static function pag_ClienteRecovery(){
        return self::get_SiteHOME().'/clientes_recovery'; 
    }
    //Retorna pagina informaçoes do cliente
    static function pag_ClienteConta(){
        return self::get_SiteHOME().'/clientes_minhaconta';
    }
    //Retorna pagina confirmar pedido
    static function pag_PedidoConfirmar(){
        return self::get_SiteHOME().'/pedido_confirmar';
    }


    //Retorna pagina Finalizar pedido
    static function pag_PedidoFinalizar(){
        return self::get_SiteHOME().'/pedido_finalizar';
    }
    //Retorna pagina de contato
    static function pag_Contato(){
        return self::get_SiteHOME().'/contato';
    }
    //pasta view, fotos dos produtos
    static function get_imagensPasta(){
        return 'view/imagens_produtos';
    }
    //Caminho para pagina de imagens dos produtos
    static function get_ImageURL(){
        return self::get_SiteHOME().'/'.self::get_imagensPasta(); //Localhost/LojaVirtual/view/imagens_produtos
    }
    //Formatando a imagem para um mesmo padrão
    static function ImageLink($img, $largura, $altura){
        $imagem = self::get_ImageURL().
        "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        //zc= opacidade
         return $imagem;
        
    }
}
?>
