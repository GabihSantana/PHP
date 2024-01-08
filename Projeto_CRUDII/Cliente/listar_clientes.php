<?php
include_once 'config.php';
include_once "../funcio/cabecalho.php";


$consulta = $conexao->prepare('Select * from tabclientes');
$consulta->execute();
?>
<title>Lista de clientes</title>
</head>


<body>
   <h2>Listagem de clientes</h2>
   <table>
      <tr>
         <th>Código</th>
         <th>Nome</th>
         <th>Telefone</th>
         <th>Data Nasc.</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['cliId']}</td>";
         echo "<td>{$linha['cliNome']}</td>";
         echo "<td>{$linha['cliTelefone']}</td>";
         echo "<td>{$linha['cliDataNasc']}</td>";
         //alterar info:
         echo "<td><a href='alterar_clientes.php?id={$linha['cliId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
         //deletar cliente:
         echo "<td><a href='excluir_clientes.php?id={$linha['cliId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
         
      }
      echo "</table>";
      echo "<div style= 'display:flex'; 'space-between:5px'; 'margin:25px;'>";
      echo "<a href='form_cad_clientes.php' class='btn'>Adicionar cliente</a>";
      echo "<a href='Consultar_cliente.php' class='btn pink'>Consultar Cliente</a>";
      echo "</div>";
      ?>
