<H1>DELETAR</H1>
<?php
require_once './lib/autoload.php';
$produto = new Produtos();
$id = $_POST["prod_id"];
//verificar se realmente foi recuperado um parametro
if(!empty($id)){
  $produto->deleteProduto($id);
  echo "Produto deletado com sucesso";
}else{
    echo '<h3>Confirme a exclusão</h3>';
}
?>
