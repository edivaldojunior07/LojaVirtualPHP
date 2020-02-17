<?php
require_once '../lib/autoload.php';
$produto = new Produtos();
    $prod_nome = addslashes($_POST['prod_nome']);
    // $prod_categoria = addslashes($_POST['prod_categoria']);
    $prod_desc = addslashes($_POST['prod_desc']);
    $prod_peso = addslashes($_POST['prod_peso']);
    $valor = addslashes($_POST['prod_valor']);
    $prod_largura = addslashes($_POST['prod_largura']);
    $prod_altura = addslashes($_POST['prod_altura']);
    $prod_comprimento = addslashes($_POST['prod_comprimento']);
    //$prod_img = $_POST['prod_img'];
    //$_FILES['prod_img'] = $_POST['prod_img'];
    $prod_slog = addslashes($_POST['prod_slog']);
    $prod_estoque = addslashes($_POST['prod_estoque']);
    $prod_modelo = addslashes($_POST['prod_modelo']);
    $prod_referencia = addslashes($_POST['prod_referencia']);
    $prod_fabricante = addslashes($_POST['prod_fabricante']);
    $prod_ativo = addslashes($_POST['prod_ativo']);
    $prod_frete_free = addslashes($_POST['prod_frete_free']);

    $prod_valor = str_replace(",", ".", $valor);

    if(!empty($prod_nome) && /*!empty($prod_categoria) && */!empty($prod_desc)  && !empty($prod_peso) && !empty($prod_valor) 
    && !empty($prod_largura) && !empty($prod_altura) && !empty($prod_comprimento) && isset($_FILES['prod_img']) && !empty($prod_slog) 
    && !empty($prod_estoque) && !empty($prod_modelo) && !empty($prod_referencia) && !empty($prod_fabricante) && !empty($prod_ativo) 
    && !empty($prod_frete_free)){
        //converte o nome da extensao toda para minusculo
        $img_extensao=strtolower(substr($_FILES['prod_img']['name'], -4));
        //atribui novo nome a imagem
        $prod_img= time().$img_extensao;
    
        $diretorio= '../view/imagens_produtos/'; 
        $arquivo= $_FILES['prod_img']['tmp_name'];

        move_uploaded_file($arquivo, $diretorio.$prod_img);
        
        $produto->setProduto($prod_nome,/* $prod_categoria,*/ $prod_desc, $prod_peso, $prod_valor, $prod_largura, $prod_altura, $prod_comprimento,
        $prod_img, $prod_slog, $prod_estoque, $prod_modelo, $prod_referencia, $prod_fabricante, $prod_ativo, $prod_frete_free);

    }else{
        echo "<h3>ERRO!<p>Preencha todos os dados!!<p></h3>";
    }
    ?>