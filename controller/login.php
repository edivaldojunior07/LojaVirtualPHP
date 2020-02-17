<?php
    $smarty= new Template();

    $smarty->assign('PAG_CADASTRAR', Rotas::pag_ClienteConta());

    $smarty->display('login.tpl');
?>