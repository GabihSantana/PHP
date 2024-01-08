<?php
   include_once 'cabecalho.php';
   include_once 'config_func.php';

   function mostrarDados($linha)
   {
      echo "<div class='col s12 m4'>";
      echo "<div class='card'>";
      echo "<div class='card-image'>";
      echo "<td><img src='imagens/{$linha['proImagem']}.jpg'><br></div>";
      echo "<div class='card-content'><p>Descrição do Card 3</p></div>";
      echo "<div class='card-action'><a href='#' class='btn'>Botão 3</a></div></div>";
   }
   echo "<h3 class='center-align'>Produtos para venda</h3>";
   echo "<hr>";
   $consulta = $conexao->prepare('Select * from tabprodutos');
   $consulta->execute();
   $f = $consulta->rowCount();

   echo "<table class='responsive-table centered'>";
   $li = 1;
   ?>
   <?php
   echo "<tr>";
   while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo "<td><img src='imagens/{$linha['proImagem']}.jpg' width='320px' height='250px''><br>";
      echo "<a href='carrinho.php?codigo={$linha['proId']}'>{$linha['proDescricao']}</a><br>";
      echo "R$ {$linha['proPreco']}<br>";
      echo "<a href='carrinho.php?codigo={$linha['proId']}' class='waves-effect waves-light btn blue'><i class='material-icons left'>local_grocery_store</i>Comprar</a>";
   ?>   
   </td>
   <?php
      $li++;
      if ($li == 4) {
         $li = 1;
         echo "</tr><tr>";
      }
   }
   echo "</table>";
   echo "<br>";
   include_once "rodapé.php";
?>