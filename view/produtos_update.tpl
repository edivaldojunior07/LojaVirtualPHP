{foreach from=$PRO item=P}
<legend>Informações do produto: {$P.prod_nome} </legend>
<div class="conteiner">
    <div class="row detalhes_produto">    
        <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10 col-10" >
            <img src="{$GET_PASTA_IMAGENS}/{$P.prod_img}" width=250px height=250px class="prod_foto">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-10 col-10">
            <div>
                <strong>Produto:</strong> {$P.prod_nome}
            </div>
            <div>
                <strong>Dimensões:</strong> {$P.prod_largura}X{$P.prod_altura}X{$P.prod_comprimento}
            </div>
            <div>
                <strong>Peso:</strong> {$P.prod_peso}KG
            </div>
            <div>
                <strong>Modelo:</strong> {$P.prod_peso}KG
            </div>
            <div>
                <strong>fabricante:</strong> {$P.prod_fabricante}
            </div>
            <div>
                <strong>Descrição:</strong> {$P.prod_desc}
            </div>
            <div>
                <strong><p text-aling=center>Valor: R${$P.prod_valor}</p></strong>
            </div>
        </div>
    </div>
</div>


<div class="conteiner">
<form method="POST" action="{$UPDATE_PRODUTO}">
<div class="form-row col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12"> 
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> 
                <legend>Atualize dados do produto: {$P.prod_nome}
        </div>
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Número referencia de cadastro:<input name="prod_id" readonly class="form-control input-md" type="text" value='{$P.prod_id}'></legend>
        </div>
        <div class="form-group col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">  
                <label>Produto:</label>
                <input name="prod_nome" class="form-control" type="text" value='{$P.prod_nome}'>

        </div>
        <!--<div class="form-group col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12">  
                <label>Imagem:</label>
                <input type="file"  name="prod_img" value='{$P.prod_img}'>
        </div>-->
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">    
                <label>Dimensões:</label>
                <input  name="prod_largura"class="form-control input-md" type="text" value='{$P.prod_largura}'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input  name="prod_altura" class="form-control input-md" type="text" value='{$P.prod_altura}'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label><p></p></label>
                <input name="prod_comprimento" class="form-control input-md" type="text" value='{$P.prod_comprimento}'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Peso:</label>
                <input name="prod_peso" placeholder="Peso" class="form-control input-md" type="text" value='{$P.prod_peso}'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Fabricante:</label>
                <input name="prod_fabricante"class="form-control input-md" type="text" value='{$P.prod_fabricante}'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Categoria:</label>
                <select name="prod_categoria" class="form-control input-md">
                        <option>essa vai ser uma categoria</option>
                </select>
        </div>     
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Modelo:</label>
                <input name="prod_modelo" placeholder="Modelo" class="form-control input-md" type="text" value='{$P.prod_modelo}'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Estoque: unidades</label>
                <input name="prod_estoque" class="form-control input-md" type="number" value='{$P.prod_estoque}'>
        </div> 
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Valor: R$</label>
                <input name="prod_valor"  class="form-control input-md" type="number" value='{$P.prod_valor}'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Referencia:</label>
                <input name="prod_referencia" class="form-control input-md"  type="text" value='{$P.prod_referencia}'>
        </div>
        <div class="form-group col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                <label>Slogan:</label>
                <input name="prod_slog" class="form-control input-md" type="text" value='{$P.prod_slog}'>
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
                <textarea rows="4" name="prod_desc"class="form-control input-md" required="required" maxlength="450">{$P.prod_desc}</textarea>
        </div> 

        <div class="form-group col-xl-8 col-lg-7 col-md-7 col-sm-6 col-6">
                <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
</form>
<form method="POST" action="{$DELETE_PRODUTO}">
        <div class="form-group col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                Confirmar exclusão
                <input type="checkbox" name="id" value={$P.prod_id}/>
                <button type="submit" class="btn btn-danger">Deletar</button>
        </div >
</form>
{/foreach} 
</div>