<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 20:09:08
  from 'C:\xampp\htdocs\LojaVirtual\view\produtos_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddd785487db79_87088362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb9cbc1ef839497fd43a46fcd5ee5ebf587f004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\produtos_update.tpl',
      1 => 1574795344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd785487db79_87088362 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div>
</div>


<div class="conteiner">
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['UPDATE_PRODUTO']->value;?>
">
<div class="form-row col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12"> 
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> 
                <legend>Atualize dados do produto: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>

        </div>
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Número referencia de cadastro:<input name="prod_id" readonly class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
'></legend>
        </div>
        <div class="form-group col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">  
                <label>Produto:</label>
                <input name="prod_nome" class="form-control" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
'>

        </div>
        <!--<div class="form-group col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12">  
                <label>Imagem:</label>
                <input type="file"  name="prod_img" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
'>
        </div>-->
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">    
                <label>Dimensões:</label>
                <input  name="prod_largura"class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_largura'];?>
'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input  name="prod_altura" class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_altura'];?>
'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input name="prod_comprimento" class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_comprimento'];?>
'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Peso:</label>
                <input name="prod_peso" placeholder="Peso" class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_peso'];?>
'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Fabricante:</label>
                <input name="prod_fabricante"class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_fabricante'];?>
'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Categoria:</label>
                <select name="prod_categoria" class="form-control input-md">
                        <option>essa vai ser uma categoria</option>
                </select>
        </div>     
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Modelo:</label>
                <input name="prod_modelo" placeholder="Modelo" class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_modelo'];?>
'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Estoque: unidades</label>
                <input name="prod_estoque" class="form-control input-md" type="number" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_estoque'];?>
'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Valor: R$</label>
                <input name="prod_valor"  class="form-control input-md" type="number" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Referencia:</label>
                <input name="prod_referencia" class="form-control input-md"  type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_referencia'];?>
'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Slogan:</label>
                <input name="prod_slog" class="form-control input-md" type="text" value='<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_slog'];?>
'>
        </div>
        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                <label>Ativo</label>
                <input type="radio" checked name="prod_ativo" value="Sim"/>
                <label>Desativado</label>
                <input type="radio" name="prod_ativo" value="Não"/>
        </div>
        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                <label>Frete grátis</label>
                <input type="radio" checked name="prod_frete_free" value="Sim"/>
                <label>Frete pago</label>
                <input type="radio" name="prod_frete_free" value="Não"/>
        </div>
        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label>Descrição:</label>
                <textarea rows="4" name="prod_desc"class="form-control input-md" required="required" maxlength="450"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_desc'];?>
</textarea>
        </div> 

        <div class="form-group col-xl-8 col-lg-7 col-md-7 col-sm-6 col-6">
                <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
</form>
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['DELETE_PRODUTO']->value;?>
">
        <div class="form-group col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                Confirmar exclusão
                <input type="checkbox" name="id" value=<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
/>
                <button type="submit" class="btn btn-danger">Deletar</button>
        </div >
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</div><?php }
}
