<legend>Cadastre um novo produto</legend>
<div class="conteiner">
<form method="POST" enctype="multipart/form-data" action="./controller/produtos_insert.php">
<div class="form-row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
        <div class="form-group col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">  
            <label>Produto:</label>
            <input name="prod_nome" placeholder="Nome do produto" class="form-control input-md" required="required" type="text">
        </div>
        <div class="form-group col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12">  
            <label>Imagem:</label>
            <input type="file"  name="prod_img" required="required">
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">    
                <label>Dimensões:</label>
                <input  name="prod_largura" placeholder="Largura" class="form-control input-md" required="required" type="text">
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input  name="prod_altura" placeholder="Altura" class="form-control input-md" required="required" type="text">
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input name="prod_comprimento" placeholder="Comprimento" class="form-control input-md" required="required" type="text">
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Peso:</label>
                <input name="prod_peso" placeholder="Peso" class="form-control input-md" required="required" type="text">
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Fabricante:</label>
                <input name="prod_fabricante" placeholder="Fabricante" class="form-control input-md" required="required" type="text">
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Categoria:</label>
                <select name="prod_categoria" class="form-control input-md" required="required">
                        <option>essa vai ser uma categoria</option>
                </select>
        </div>     
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Modelo:</label>
                <input name="prod_modelo" placeholder="Modelo" class="form-control input-md" required="required" type="text">
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Estoque: unidades</label>
                <input name="prod_estoque" placeholder="100" class="form-control input-md" required="required" type="number">
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Valor: R$</label>
                <input name="prod_valor" placeholder="100,00" class="form-control input-md" required="required" type="number">
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Referencia:</label>
                <input name="prod_referencia" placeholder="ex. Carrinho de mao" class="form-control input-md" required="required" type="text">
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Slogan:</label>
                <input name="prod_slog" placeholder="ex. Carrinho-de-mão" class="form-control input-md" required="required" type="text">
        </div>
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <label>Ativo</label>
                <input type="radio" name="prod_ativo" value="Sim"/>
                <label>Desativado</label>
                <input type="radio" name="prod_ativo" value="Não"/>
        </div>
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <label>Frete grátis</label>
                <input type="radio" name="prod_frete_free" value="Sim"/>
                <label>Frete pago</label>
                <input type="radio" name="prod_frete_free" value="Não"/>
        </div>

        
        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label>Descrição:</label>
                <textarea rows="4" name="prod_desc" placeholder="Descreva o produto! Até 450 caracteres" class="form-control input-md" required="required" maxlength="450"></textarea>
        </div> 
          <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>
</form>