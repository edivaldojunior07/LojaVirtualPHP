<?php
class Produtos extends Conexao{ 
    function GetProdutos(){
        //query para buscar todos os produtos
        //prefix cria prefixo para catedoria(c) e produtos(p) 
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.prod_categoria = c.cate_id";
        $query .= " ORDER BY prod_id DESC";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    function GetProdutosID($id){
        //query para buscar os produtos de categorias especificas
        //prefix cria prefixo para catedoria(c) e produtos(p) 
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.prod_categoria = c.cate_id";
        $query .= " AND prod_id = {$id}";
        
        $this->ExecuteSQL($query);   

        $this->GetLista();
    }

    //função buscar todos os dados dos produtos cadastrados
    private function GetLista(){
        $i = 1;
        while ($lista = $this->ListarDados()){
        $this->itens[$i] = array(
            'prod_id'=>$lista['prod_id'],
            'prod_nome'=>$lista['prod_nome'],
            'prod_desc'=>$lista['prod_desc'],
            'prod_peso'=>$lista['prod_peso'],
            'prod_valor'=>$lista['prod_valor'],
            'prod_altura'=>$lista['prod_altura'],
            'prod_largura'=>$lista['prod_largura'],
            'prod_modelo'=>$lista['prod_modelo'],           
            'prod_comprimento'=>$lista['prod_comprimento'],
            'prod_img'=> $lista['prod_img'],
            'prod_slog'=>$lista['prod_slog'],
            'prod_fabricante'=>$lista['prod_fabricante'],
            'prod_referencia'=>$lista['prod_referencia'],            
            'prod_categoria'=>$lista['prod_categoria'],
            'prod_estoque'=>$lista['prod_estoque']

        );
        $i++;
        }
    }
    function setProduto($prod_nome, /*$prod_categoria,*/ $prod_desc, $prod_peso, $prod_valor, $prod_largura, $prod_altura, $prod_comprimento,
    $prod_img, $prod_slog, $prod_estoque, $prod_modelo, $prod_referencia, $prod_fabricante, $prod_ativo, $prod_frete_free){
        if($con = Conexao::Conectar()){
            $query = 'INSERT INTO produtos (prod_nome, /*prod_categoria,*/ prod_desc, prod_peso, prod_valor, prod_largura, prod_altura, prod_comprimento, 
                    prod_img, prod_slog, prod_estoque, prod_modelo, prod_referencia, prod_fabricante, Prod_ativo, Prod_frete_free)
                    Value (:prod_nome, /*:prod_categoria,*/ :prod_desc, :prod_peso, :prod_valor, :prod_largura, :prod_altura, :prod_comprimento, 
                    :prod_img, :prod_slog, :prod_estoque, :prod_modelo, :prod_referencia, :prod_fabricante, :prod_ativo, :prod_frete_free)';
            $sql = $con->prepare($query);
            $sql->bindValue(":prod_nome", $prod_nome);
            //$sql->bindValue(":prod_categoria", $prod_categoria);
            $sql->bindValue(":prod_desc", $prod_desc);
            $sql->bindValue(":prod_peso", $prod_peso);
            $sql->bindValue(":prod_valor", $prod_valor);
            $sql->bindValue(":prod_largura", $prod_largura);
            $sql->bindValue(":prod_altura", $prod_altura);
            $sql->bindValue(":prod_comprimento", $prod_comprimento);
            $sql->bindValue(":prod_img", $prod_img);
            $sql->bindValue(":prod_slog", $prod_slog);        
            $sql->bindValue(":prod_estoque", $prod_estoque);
            $sql->bindValue(":prod_modelo", $prod_modelo);
            $sql->bindValue(":prod_referencia", $prod_referencia);
            $sql->bindValue(":prod_fabricante", $prod_fabricante);
            $sql->bindValue(":prod_ativo", $prod_ativo);
            $sql->bindValue(":prod_frete_free", $prod_frete_free);
            if($sql->execute()){
                echo 'Cadastro realizado com sucesso!';
                header("location: ../produtos");
            }else {
                echo '<p>Erro ao cadastrar produto</p>';
            }
        }
    }
    function updateProduto($prod_id, $prod_nome, /*$prod_categoria,*/ $prod_desc, $prod_peso, $prod_valor, $prod_largura, $prod_altura, $prod_comprimento,
                        $prod_slog, $prod_estoque, $prod_modelo, $prod_referencia, $prod_fabricante, $prod_ativo, $prod_frete_free){
        if($con = Conexao::Conectar()){
            $query ='UPDATE produtos SET prod_nome=:prod_nome, /*prod_categoria=:prod_categoria,*/ prod_desc=:prod_desc, prod_peso=:prod_peso, prod_valor=:prod_valor,
                    prod_largura=:prod_largura, prod_altura=:prod_altura, prod_comprimento=:prod_comprimento, prod_slog=:prod_slog, prod_estoque=:prod_estoque, prod_modelo=:prod_modelo,
                    prod_referencia=:prod_referencia, prod_fabricante=:prod_fabricante, prod_ativo=:prod_ativo, prod_frete_free=:prod_frete_free
                    WHERE prod_id = :prod_id';
            $sql = $con->prepare($query);
            $sql->bindValue(":prod_id", $prod_id);
            $sql->bindValue(":prod_nome", $prod_nome);
            //$sql->bindValue(":prod_categoria", $prod_categoria);
            $sql->bindValue(":prod_desc", $prod_desc);
            $sql->bindValue(":prod_peso", $prod_peso);
            $sql->bindValue(":prod_valor", $prod_valor);
            $sql->bindValue(":prod_largura", $prod_largura);
            $sql->bindValue(":prod_altura", $prod_altura);
            $sql->bindValue(":prod_comprimento", $prod_comprimento);
            $sql->bindValue(":prod_slog", $prod_slog);        
            $sql->bindValue(":prod_estoque", $prod_estoque);
            $sql->bindValue(":prod_modelo", $prod_modelo);
            $sql->bindValue(":prod_referencia", $prod_referencia);
            $sql->bindValue(":prod_fabricante", $prod_fabricante);
            $sql->bindValue(":prod_ativo", $prod_ativo);
            $sql->bindValue(":prod_frete_free", $prod_frete_free);
            if($sql->execute()){
            }
        }
        function deleteProduto($id){
            echo "Produto deltado";
        }
    }
}
?>