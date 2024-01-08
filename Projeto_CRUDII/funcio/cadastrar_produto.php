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
   <title>Sysexemplo - Cadastro de Produtos</title>
</head>
<body>
   <div class="row">
       <div class="col s12 m6 push-m3">
         <h3 class="light">Cadastro de Produtos</h3>
         <form action="bdcadastro_produto.php" method="post" enctype="multipart/form-data">
               <div class="input-field col s12">
                 <label for="codPro">Código Produto: </label><br>
                 <input type="text" name="txtcodPro" id="codPro" maxlength="11" required>
                </div>
                <div class="input-field col s12">
                 <label for="proDescri">Descrição do produto: </label><br>
                 <input type="text" name="txtproDescri" id="proDescri" maxlength="255" required>
                </div>
                 <div class="input-field col s12">
                  <label for="proImagem">Imagem do Produto: </label><br>
                 <input type="text" name="txtproImagem" id="proImagem" accept="image/png, image/jpeg" required>
               </div>
               <div class="input-field col s12">
                 <label for="proValor">Preço do produto: </label><br>
                 <input type="text" name="txtproValor" id="proValor" required>
                </div>
               
               <br><br>
               <button type="submit" class="btn blue" name="btncadProd">Cadastrar Produto</button>            
               <a href="lista_produtos.php" class="btn green">Listar Produtos</a>        
         </form> 
       </div>
   </div>
</body>
</html>
