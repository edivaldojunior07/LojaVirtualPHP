<?php
$produto = new Produtos();
    $prod_id = addslashes($_POST['prod_id']);
    $prod_nome = addslashes($_POST['prod_nome']);
   //$prod_categoria = addslashes($_POST['prod_categoria']);
    $prod_desc = addslashes($_POST['prod_desc']);
    $prod_peso = addslashes($_POST['prod_peso']);
    $valor = addslashes($_POST['prod_valor']);
    $prod_largura = addslashes($_POST['prod_largura']);
    $prod_altura = addslashes($_POST['prod_altura']);
    $prod_comprimento = addslashes($_POST['prod_comprimento']);
    $prod_slog = addslashes($_POST['prod_slog']);
    $prod_estoque = addslashes($_POST['prod_estoque']);
    $prod_modelo = addslashes($_POST['prod_modelo']);
    $prod_referencia = addslashes($_POST['prod_referencia']);
    $prod_fabricante = addslashes($_POST['prod_fabricante']);
    $prod_ativo = addslashes($_POST['prod_ativo']);
    $prod_frete_free = addslashes($_POST['prod_frete_free']);

    $prod_valor = str_replace(",", ".", $valor);


    if(!empty($prod_id) && !empty($prod_nome) && /*!empty($prod_categoria) && */!empty($prod_desc)  && !empty($prod_peso) && !empty($prod_valor) 
    && !empty($prod_largura) && !empty($prod_altura) && !empty($prod_comprimento) && !empty($prod_slog) 
    && !empty($prod_estoque) && !empty($prod_modelo) && !empty($prod_referencia) && !empty($prod_fabricante) && !empty($prod_ativo) 
    && !empty($prod_frete_free)){
   
        $produto->updateProduto($prod_id, $prod_nome,/* $prod_categoria,*/ $prod_desc, $prod_peso, $prod_valor, $prod_largura, $prod_altura, $prod_comprimento,
        $prod_slog, $prod_estoque, $prod_modelo, $prod_referencia, $prod_fabricante, $prod_ativo, $prod_frete_free);
        echo '<h2>
        Please wait...
        Updated successfully!<h2>';

        header("Refresh:1 ; ./produtos");
    }else{
        echo '<h3>
        Please wait...
        error updating product!<h3>';
    }
    ?>