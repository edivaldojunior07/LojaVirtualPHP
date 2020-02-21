<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{$GET_PASTA_TEMA}/css/estilo.css">
    <title>{$NOME_SITE}</title>
</head>
<body>

<!--1º seção - Logo e Nome do Site-->
<section>
    <div class="conteiner">
        <div class="row" id="topo">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10 col-10 text-center div_Foto"> 
              <img src="{$GET_PASTA_TEMA}/imagens/Logo.png" alt="Logo" width=200px height=120px>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10 text-center" id="divBusca">
              <input type="text" id="txtBusca" placeholder="Pesquisar produto..."/>
              <img src="{$GET_PASTA_TEMA}/imagens/Buscar.png" id="btnBusca" alt="Buscar" width=30px height=30px/>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10 col-10 text-center div_login"> <a href="{$PAG_LOGIN}">Login</a>
          || <a href="{$PAG_LOGOFF}">Sair</a>
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
          <a class="nav-link" href="{$PAG_PRODUTOS}">Produtos</a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="{$PAG_CARRINHO}">Carrinho</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="{$PAG_CLIENTE_CONTA}">Area do cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$PAG_CONTATO}">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$PAG_INCLUIR_PRODUTO}">Cadastrar produto</a>
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
      <img class="d-block" src="{$GET_PASTA_TEMA}/imagens/1.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="{$GET_PASTA_TEMA}/imagens/2.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="{$GET_PASTA_TEMA}/imagens/3.png" alt="Terceiro Slide">
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
      {php}

        Rotas::get_Pagina();

      {/php}
    </div>
  </div>
</div>

<div class="conteiner div_footer" id="div_footer">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 dados_pessoais">
     <strong>Desenvolvedor: {$DESENVOLVEDOR}<br /> 
      Telefone: {$TELEFONE}<br /> 
      Linkedin: {$LINKEDIN}<br /> 
      E-mail: {$EMAIL}<br /> </strong>
    </div>
    <div style='text-align:center' class="col-lg-4 col-md-4 col-sm-12 col-12" id="RodaPe_centro">
      <strong>Loja Virtual em PHP e MySQL</strong>
    </div>
    <div style='text-align:center' class="col-lg-4 col-md-4 col-sm-12 col-12" id="foto_pagseguro">
      <img src="{$GET_PASTA_TEMA}/imagens/pagseguro.png" alt="Logo" width=250px height=150px>
    </div>
  </div>
</div>

</body>
</html>