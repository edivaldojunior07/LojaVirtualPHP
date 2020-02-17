<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-27 15:09:52
  from 'C:\xampp\htdocs\LojaVirtual\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dde83b05566a9_29387625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2f0975d9b12801ef003196ec52ab987e4c0a8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\login.tpl',
      1 => 1574863789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde83b05566a9_29387625 (Smarty_Internal_Template $_smarty_tpl) {
?><legend>ENTRAR</legend>
<div class="wrapper fadeInDown">
  <div class="formContent">
    <form method="POST" action="./controller/clientes_login.php">
      <p><input class="form-control col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10" type="email" id="login" name="email" placeholder="E-mail"></p>
      <p><input class="form-control col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10" type="password" id="password"  name="senha" placeholder="Senha"></p>
      <input type="submit" class="btn btn-primary submit" value="ACESSAR">
    </form>
    <div id="formFooter">
      <p><a class="underlineHover" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRAR']->value;?>
">Não tem acesso?<strong>Cadastre-se!</strong></a></p>   
    </div>
  </div>
</div><?php }
}
