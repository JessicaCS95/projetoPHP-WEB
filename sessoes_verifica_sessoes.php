<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSÕES VERFICA SESSÕES</title>
</head>
<body>

<?php

    session_start();
    if($_SESSION["nome"] != "master"){
        session_destroy();
        header("location: sessao_bloqueando_paginas.php");
    }else { echo("PÁGINA AUTORIZADA");
    }

    
?>
    
</body>
</html>