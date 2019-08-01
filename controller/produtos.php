<h2>Esta é a página de produtos</h2>
<?php 

$produtos = new Produtos();
$produtos->GetProdutos();

echo '<pre>';
var_dump($produtos->GetItens());
echo '</pre>'
 ?>	
