<legend>Cadastre-se!</legend>
<div class="conteiner col-lg-12 col-md-12 col-sm-12 col-12 div_form">
<form method="POST" action="./controller/clientes_cadastro.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNome">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputNome" placeholder="informe seu nome!" maxlength="20">
    </div>
   <div class="form-group col-md-4">
      <label for="inputSobrenome">Sobrenome</label>
      <input type="text" name="sobrenome" class="form-control" id="inputSobrenome" placeholder="Informe seu sobrenome!" maxlength="40">
    </div>
    <div class="form-group col-md-4">
      <label for="inputcpf">CPF</label>
      <input type="text" name="cpf"class="form-control" id="CPF" placeholder="Digite somente numeros!" maxlength="11">      
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">E-mail</label>
      <input type="email" name="email"class="form-control" id="inputEmail" placeholder="E-mail" maxlength="50">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="senha"class="form-control" id="inputPassword4" placeholder="Senha!" maxlength="6">  
    </div>
    <div class="form-group col-md-3"> 
      <label for="inputPassword4">Repita</label>   
      <input type="password" name="conf_senha" class="form-control" id="inputPassword4" placeholder="Repita a Senha!" maxlength="6">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="inputCEP">CEP</label>
    <input type="text" name="cep" class="form-control" id="inputCEP" placeholder="Digite somente numeros!" maxlength="8">
  </div>
  <div class="form-group col-md-5">
    <label for="inputCity">Cidade</label>
    <input type="text" name="cidade" class="form-control" placeholder="Informe sua cidade!"id="inputCity">
  </div>
  <div class="form-group col-md-4">
    <label for="inputEstado">Estado</label>
    <input type="text" id="inputEstado" name="estado" placeholder="Indorme seu estado!"class="form-control">
    </select>
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<p><a class="underlineHover" href="{$PAG_LOGIN}">Já possui acesso?<strong>Faça login!</strong></a></p>
<script src="./view/script.s"></script>
