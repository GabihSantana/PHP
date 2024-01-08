<?php
      include_once "cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="css/estilos.css">
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Sysexemplo - Cadastro de Funcionários</title>
</head>
<body>
   <div class="row">
       <div class="col s12 m6 push-m3">
         <h3 class="light">Cadastro de Funcionários</h3>
         <form action="cadastrar_funcionarios.php" method="post" enctype="multipart/form-data">
               <div class="input-field col s12">
                 <label for="nome">Nome: </label><br>
                 <input type="text" name="txtnome" id="nome" required>
                </div>
                <div class="input-field col s12">
                 <label for="senha">Senha: </label><br>
                 <input type="password" name="txtsenha" id="senha" maxlength= "5" required>
                </div>
                <div class="input-field col s12">
                 <label for="email">Email: </label><br>
                 <input type="email" name="txtemail" id="email" required>
                </div>
                <div class="input-field col s12">
                 <label for="cargo">Cargo: </label><br>
                 <input type="text" name="txtcargo" id="cargo" required>
                </div>
               <div class="input-field col s12">
                 <label for="usuario">Usuario: </label><br>
                 <input type="text" name="txtusuario" id="usuario" required>
                </div>
               <div class="input-field col s12">
                <label for="foto">Foto: </label><br>
                 <input type="text" name="txtfoto" id="foto" required>
                 <!--<label for="foto">Foto: </label><br><br>
                 <input type="file" name="txtfoto" id="foto" accept="image/png, image/jpeg">-->
               </div>
               <br><br>
               <button type="submit" class="btn" name="btncadastrar">Cadastrar </button>            
               <a href="lista_de_funcionarios.php" class="btn green">Listar Funcionários</a>        
         </form> 
       </div>
   </div>
</body>
</html>
<?php
      include_once "rodapé.php";
?>