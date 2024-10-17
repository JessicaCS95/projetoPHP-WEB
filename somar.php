<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacao = $_POST['op'];
 
    switch($operacao){
        case 1:$resp = somar($numero1,$numero2);
        $ope = "soma";
        break;
        case 2:$resp = subtrair($numero1,$numero2);
        $ope = "subtração";
        break;
        case 3:$resp = multiplicar($numero1,$numero2);
        $ope = "multiplicação";
        break;
        case 4:$resp = dividir($numero1,$numero2);
        $ope = "divisão";
        break;
 
    }

    echo "A $ope de $numero1 e $numero2 é $resp";
 
function somar ($num1,$num2){
    $resp = $num1+$num2;
    return $resp;
}
function subtrair ($num1,$num2){
    $resp = $num1-$num2;
    return $resp;
}
function multiplicar ($num1,$num2){
    $resp = $num1*$num2;
    return $resp;
}
function dividir ($num1,$num2){
    if($num2 == 0){
        return 0;
    }else{
    $resp = $num1/$num2;
    return $resp;
    }
}
/*$resp = somar($numero1,$numero2);
echo "a $ope de $num1 e $num2 é $resp";*/
