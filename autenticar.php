<?php

$usuario = $_POST['user'];
$senha = $_POST['passwd'];

if($usuario == "senac" && $senha == "senac"){
    echo "Autenticado!!!";
}else{
    echo "Erro ao autenticar!!!";
}

?>