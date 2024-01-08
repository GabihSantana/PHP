<?php
    include_once "cabecalho.php";
?>

<h1>Carrinho de Compras</h1>
<table>
      <tr>
         <th>Item</th>
         <th>Produto</th>
         <th>Quantidade</th>
      </tr>

<?php
    require_once "config_func.php";

$sql = "SELECT carId, tabcarrinho.* , tabprodutos.proDescricao AS descricao FROM tabcarrinho INNER JOIN tabprodutos ON tabcarrinho.carProdId = tabprodutos.proId ORDER BY carId";

$stmt = $conexao->prepare($sql);
$stmt->execute();

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
   echo "<tr><td>{$linha['carId']}</td>";
   echo "<td>{$linha['descricao']}</td>";
   echo "<td>{$linha['carQtde']}</td></tr>";
}
echo "</table>";

include_once "rodapé.php";
?>