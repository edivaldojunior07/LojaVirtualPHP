<?php
require_once './lib/autoload.php';
$smarty = new Template();

//valores para o templete
$smarty->assign('DESENVOLVEDOR', Config::DESENVOLVEDOR);
$smarty->assign('TELEFONE', Config::TELEFONE);
$smarty->assign('LINKEDIN', Config::LINKEDIN);
$smarty->assign('EMAIL', Config::SITE_EMAIL_ADM);
$smarty->assign('NOME_SITE', Config::SITE_NOME);

$smarty->assign('GET_PASTA_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CLIENTE_CONTA', Rotas::pag_ClienteConta());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('GET_PASTA_IMAGENS', Rotas::get_ImageURL());
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('PAG_INCLUIR_PRODUTO', Rotas::pag_cadastrar_produto());
$smarty->assign('PAG_LOGOFF', Rotas::pag_logoff());

$smarty->display('index.tpl');
?>