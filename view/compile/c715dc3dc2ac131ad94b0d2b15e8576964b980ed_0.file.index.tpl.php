<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 20:21:42
  from 'C:\xampp\htdocs\LojaVirtual\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4edc46122db8_61491171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c715dc3dc2ac131ad94b0d2b15e8576964b980ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LojaVirtual\\view\\index.tpl',
      1 => 1582226497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4edc46122db8_61491171 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/css/estilo.css">
    <title><?php echo $_smarty_tpl->tpl_vars['NOME_SITE']->value;?>
</title>
</head>
<body>

<!--1º seção - Logo e Nome do Site-->
<section>
    <div class="conteiner">
        <div class="row" id="topo">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10 col-10 text-center div_Foto"> 
              <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/Logo.png" alt="Logo" width=200px height=120px>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10 text-center" id="divBusca">
              <input type="text" id="txtBusca" placeholder="Pesquisar produto..."/>
              <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/Buscar.png" id="btnBusca" alt="Buscar" width=30px height=30px/>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10 col-10 text-center div_login"> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">Login</a>
          || <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
          </div>
      </div>
    </div>
</section>

<!--Nav Menu-->
<nav class="navbar navbar-expand-md navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_CONTA']->value;?>
">Area do cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_INCLUIR_PRODUTO']->value;?>
">Cadastrar produto</a>
        </li>
      </ul>
    </div>
  </nav>



<!--2º Seção - Banner com produtos-->
<div class="conteiner col-lg-6 col-md-4 col-sm-12 col-12 div_banner">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-item active">
      <img class="d-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/1.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/2.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/3.png" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--3º seção - Categoria e produtos-->
<div class="conteiner">
  <div class="row">
    <!--Categorias
    <div class="col-lg-2 col-md-3 col-sm-11 col-11 div_Categorias" id="div_Categorias">
      <nav class="nav flex-column">
        <h5>Categorias</h5>
        <a class="nav-link active" href="#">Ferramentas</a>
        <a class="nav-link" href="#">Tecnologia</a>
        <a class="nav-link" href="#">Lazer</a>
        <a class="nav-link" href="#">Casa</a>
        <a class="nav-link" href="#">Outros</a>
      </nav>
    </div>
      
    Seção de produtos-->
    <div class="col-lg-10 col-md-9 col-sm-12 col-12 div_Produtos" id="div_Produtos">
      <?php 

        Rotas::get_Pagina();

      ?>
    </div>
  </div>
</div>

<div class="conteiner div_footer" id="div_footer">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 dados_pessoais">
     <strong>Desenvolvedor: <?php echo $_smarty_tpl->tpl_vars['DESENVOLVEDOR']->value;?>
<br /> 
      Telefone: <?php echo $_smarty_tpl->tpl_vars['TELEFONE']->value;?>
<br /> 
      Linkedin: <?php echo $_smarty_tpl->tpl_vars['LINKEDIN']->value;?>
<br /> 
      E-mail: <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
<br /> </strong>
    </div>
    <div style='text-align:center' class="col-lg-4 col-md-4 col-sm-12 col-12" id="RodaPe_centro">
      <strong>Loja Virtual em PHP e MySQL</strong>
    </div>
    <div style='text-align:center' class="col-lg-4 col-md-4 col-sm-12 col-12" id="foto_pagseguro">
      <img src="<?php echo $_smarty_tpl->tpl_vars['GET_PASTA_TEMA']->value;?>
/imagens/pagseguro.png" alt="Logo" width=250px height=150px>
    </div>
  </div>
</div>

</body>
</html><?php }
}
