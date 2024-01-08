<?php
   require_once 'config_func.php';
   include_once 'cabecalho.php';

   $consulta = $conexao->prepare('Select * from tabfuncionarios');
   $consulta->execute();
?>
<title>Lista de Funcionários</title>
</head>
<body>
   <h2>Listagem de Funcionários</h2>
   <table>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>Senha</th>
         <th>Email</th>
         <th>Cargo</th>
         <th>Usuário</th>
         <th>Foto</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['funId']}</td>";
         echo "<td>{$linha['funNome']}</td>";
         echo "<td>{$linha['funSenha']}</td>";
         echo "<td>{$linha['funEmail']}</td>";
         echo "<td>{$linha['funCargo']}</td>";
         echo "<td>{$linha['funUsuario']}</td>";
         echo "<td>{$linha['funFoto']}</td>";

         echo "<td><a href='alterar_funcio.php?id={$linha['funId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
         echo "<td><a href='excluir_func.php?id={$linha['funId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
      }
      echo "</table>";
      echo "<div style= 'display:flex'; 'space-between:5px'; 'margin:25px;'>";
      echo "<a href='form_cad_func.php' class='btn'>Adicionar Funcionário</a>";
      echo "</div>";
      //include_once "rodapé.php";
      ?>
