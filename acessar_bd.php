<?php
    $HOST = "localhost";
    $DB = "dbloja";
    $LOGIN = "Jessica";
    $SENHA = "123456";

    mysqli_connect($HOST,$DB,$LOGIN,$SENHA);

    if(mysqli_connect_errorno($con)){
        echo "Erro ao conectar banco de dados" 
        . mysqli_connect_errorno();
    }else{
        echo "Banco de dados conectado.";
    }
?>