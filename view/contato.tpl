<div class="col-lg-12 col-md-12 col-sm-12 col-12 div_form">
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
</div>