<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-20 18:25:32
  from 'C:\xampp\htdocs\LojaVirtual\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd5770cd1d086_16375507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e074802295918391e424e5c7cbcb16907ab4741f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\produtos_info.tpl',
      1 => 1573222663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd5770cd1d086_16375507 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
<legend>Informações do produto: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 </legend>
<div class="conteiner">
    <div class="row detalhes_produto">    
        <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10 col-10" >
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_IMAGENS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" width=250px height=250px class="prod_foto">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-10 col-10">
            <div>
                <strong>Produto:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>

            </div>
            <div>
                <strong>Dimensões:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_largura'];?>
X<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_altura'];?>
X<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_comprimento'];?>

            </div>
            <div>
                <strong>Peso:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_peso'];?>
KG
            </div>
            <div>
                <strong>Modelo:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_peso'];?>
KG
            </div>
            <div>
                <strong>fabricante:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_fabricante'];?>

            </div>
            <div>
                <strong>Descrição:</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_desc'];?>

            </div>
            <div>
                <strong><p text-aling=center>Valor: R$<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</p></strong>
            </div>
        </div>
        <div>
            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">COMPRAR</a>
        </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  <?php }
}
