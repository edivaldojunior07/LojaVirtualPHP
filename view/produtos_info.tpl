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
        <div>
            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">COMPRAR</a>
        </div>
    </div>
</div>
{/foreach}  