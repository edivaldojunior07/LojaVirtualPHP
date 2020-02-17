<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-07 20:22:14
  from 'C:\xampp\htdocs\LojaVirtual\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3db8e61209f0_54870478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439b23de47aa59d5744426c30863bb56bd123c40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\produtos.tpl',
      1 => 1581102923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3db8e61209f0_54870478 (Smarty_Internal_Template $_smarty_tpl) {
?><legend>Produtos</legend>
<div class="conteiner">
    <div class="row margem_produtos">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <ul style="list-style: none" class="area_produto">
        <div class="thumbnail">
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_slog'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_IMAGENS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" width=150px height=150px class="prod_foto">
        <div class="capition">
            <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h5>
            <h4>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</h4>
        </div>
            </a>
        </div>
        </ul>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </div>
</div><?php }
}
