<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 20:16:55
  from 'C:\xampp\htdocs\LojaVirtual\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddd7a27024956_17947302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac60198afb67673f5179075037456eb9e317deb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\contato.tpl',
      1 => 1571683060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd7a27024956_17947302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 col-md-12 col-sm-12 col-12 div_form">
  <form class="form-horizontal" id="frmcontatoazul" action="envio">
    <fieldset>
      <legend>Contato</legend>
        <div class="form-group">
          <label class="control-label" for="txtinputnome">Nome</label>  
          <div>
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="control-label" for="txtinputemail">Email</label>  
          <div>
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="control-label" for="txtinputassunto">Assunto</label>  
          <div>
          <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="control-label" for="txtinputarea">Mensagem</label>
          <div>                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Escreva sua opinião, crítica ou sugestão para o site"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class=" control-label" for="btnenviar"></label>
          <div>
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        
    </fieldset>
  </form>
</div><?php }
}
