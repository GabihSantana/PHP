<?php

require_once "config_func.php"; 
include_once "cabecalho.php"; 

$codigo = $_GET['id']; //obtendo o codigo do cliente selecionado a partir da lista de clientes
$consulta = $conexao->prepare('SELECT * FROM tabfuncionarios WHERE funId = :code');
$consulta->bindValue(':code', $codigo);
$consulta->execute();

$linha = $consulta->fetch (PDO::FETCH_ASSOC); //armazena o registro selecionado 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
   <div class="col s12 m6 push-m3">
      <h3 class="light">Alterando clientes</h3>
      <?php echo "Funcionario: {$linha['funId']}"; ?>
      <form action="alterando_func.php" method="post">

          <input type="hidden" name="txtid" value="<?php echo "{$linha['funId']}";?>">

         <div class="input-field col s12">
            <label for="nome">Nome: </label><br>
            <input type="text" name="txtnome" id="nome" value="<?php echo "{$linha['funNome']}";?>">
         </div>
         <div class=" input-field col s12">
            <label for="email">Email: </label><br>
            <input type="email" name="txtemail" id="email" value="<?php echo "{$linha['funEmail']}";?>">
         </div>

         <div class=" input-field col s12">
            <label for="cargo">Cargo: </label><br>
            <input type="text" name="txtcargo" id="cargo" value="<?php echo "{$linha['funCargo']}";?>">
         </div>

         <div class=" input-field col s12">
            <label for="usuario">Usuario: </label><br>
            <input type="text" name="txtusuario" id="usuario" value="<?php echo "{$linha['funUsuario']}";?>">
         </div>

         <div class=" input-field col s12">
            <label for="foto">Foto: </label><br>
            <input type="text" name="txtfoto" id="foto" value="<?php echo "{$linha['funFoto']}";?>">
         </div>

         <button type=" submit" class="btn" name="btnalterar">Alterar </button>
         <a href="listar_clientes.php" class="btn green">Listar clientes</a>
      </form>


   </div>
</body>
</html>