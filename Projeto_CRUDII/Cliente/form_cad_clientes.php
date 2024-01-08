<?php
  include_once "../funcio/cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Sysexemplo - Cadastro de Clientes</title>
</head>
<body>
   <div class="row">
       <div class="col s12 m6 push-m3">
         <h3 class="light">Cadastro de clientes</h3>
         <form action="cadastrar_clientes.php" method="post">
               <div class="input-field col s12">
                 <label for="nome">Nome: </label><br>
                 <input type="text" name="txtnome" id="nome" required>
                </div>
               <div class="input-field col s12">
                 <label for="fone">Telefone: </label><br>
                 <input type="text" name="txtfone" id="fone" required>
                </div>
               <div class="input-field col s12">
                 <label for="data">Data Nascimento: </label><br>
                 <input type="date" name="txtdatanasc" required id="data">
               </div>
               <div class="input-field col s12">
                 <label for="usuario">Usuario: </label><br>
                 <input type="text" name="txtusuario" id="usuario" required>
                </div>
                <div class="input-field col s12">
                 <label for="senha">Senha: </label><br>
                 <input type="password" name="txtsenha" id="senha" required>
                </div>
               <button type="submit" class="btn" name="btncadastrar">Cadastrar </button>            
               <!--<a href="listar_clientes.php" class="btn green">Listar clientes</a> -->       
         </form> 
       </div>
   </div>
</body>
</html>

