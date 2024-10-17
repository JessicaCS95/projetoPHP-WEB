<?php

$host = "10.23.45.33";
$login = "adm";
$senha = "123456";
$db = "dbEscola";

$conn = mysqli_connect($host, $login, $senha,$db);

if(mysqli_connect_errno()){
    echo"Erro ao conectar o banco de dados"
     . mysqli_connect_error();
}else{
    echo "Banco de dados conectado";
    $sql = "insert into tbclientes(nomeCli, sobreNomeCli, emailCli, idadeCli)values('Maria', 'Joaquina', 'maria.joaquina@gmail.com', 45);";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}

?>