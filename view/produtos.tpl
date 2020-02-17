<legend>Produtos</legend>
<div class="conteiner">
    <div class="row margem_produtos">

    {foreach from=$PRO item=P}
        <ul style="list-style: none" class="area_produto">
        <div class="thumbnail">
            <a href="{$PRO_INFO}/{$P.prod_id}/{$P.prod_slog}">
            <img src="{$GET_PASTA_IMAGENS}/{$P.prod_img}" width=150px height=150px class="prod_foto">
        <div class="capition">
            <h5>{$P.prod_nome}</h5>
            <h4>R${$P.prod_valor}</h4>
        </div>
            </a>
        </div>
        </ul>
    {/foreach}  
    </div>
</div>