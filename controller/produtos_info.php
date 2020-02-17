<?php
    session_start();
    $smarty= new Template();
    $produtos = new Produtos();

    $produtos->GetProdutosID(Rotas::$pag[1]);
    $smarty->assign('GET_PASTA_IMAGENS', Rotas::get_ImageURL());
    $smarty->assign('PRO', $produtos->GetItens());
    $smarty->assign('UPDATE_PRODUTO', Rotas::pag_atualizarProduto());
    $smarty->assign('DELETE_PRODUTO', Rotas::pag_deletarProduto());

    
    if($_SESSION['usu_acesso'] == 2){
        $smarty->display('produtos_update.tpl');
    } else {
        // Se não for o administrador carrega pagina de informçoes do produto com opção de comprar
        //[1] em referencia ao arrey que representa o ID
        $smarty->display('produtos_info.tpl');
}

?>