<H1>dELETAR</H1>
<?php
require_once './lib/autoload.php';
$produto = new Produtos();
$id = $_POST["id"];
//verificar se realmente foi recuperado um parametro
if(!empty($id)){
  $produto->deleteProduto($id);
}else{
    echo '<h3>Confirme a exclusão</h3>';
}
?>
