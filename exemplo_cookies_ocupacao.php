<?php

$value = 'ALUNO';
setcookie ("Ocupacao", $value);
setcookie ("Ocupacao", $value, time()+60);

echo $_COOKIE['Ocupacao'];
?>