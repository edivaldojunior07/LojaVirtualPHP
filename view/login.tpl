<legend>ENTRAR</legend>
<div class="wrapper fadeInDown">
  <div class="formContent">
    <form method="POST" action="./controller/clientes_login.php">
      <p><input class="form-control col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10" type="email" id="login" name="email" placeholder="E-mail"></p>
      <p><input class="form-control col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10" type="password" id="password"  name="senha" placeholder="Senha"></p>
      <input type="submit" class="btn btn-primary submit" value="ACESSAR">
    </form>
    <div id="formFooter">
      <p><a class="underlineHover" href="{$PAG_CADASTRAR}">Não tem acesso?<strong>Cadastre-se!</strong></a></p>   
    </div>
  </div>
</div>