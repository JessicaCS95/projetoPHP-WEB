<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando Sessões</title>
</head>
<body>
<?php

date_default_timezone_set('America/Sao_Paulo');

    session_start();

    $_SESSION['nome']= $_POST['nome'];
    $_SESSION['senha']= $_POST['senha'];
?>

<p>Funcionário: <?php
echo $_SESSION['nome'];
?> , logado com sucesso</p>
<p>
<?php
echo date("d/m/Y");
?>
</p>
<p>
<?php
echo date ("H:i:s");
?>
</p>
<a href="sessoes_verifica_sessoes.php">Área do Administrador</a>

</body>
</html>
