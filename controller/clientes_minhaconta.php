<?php
$smarty= new Template();
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->display('clientes.tpl');
?>