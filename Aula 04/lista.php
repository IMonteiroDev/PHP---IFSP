<?php

$idadeLista = [10, 20, 30, 40, 50, 18,19 ,30, 90, 64, 101];

//$idadeLista[count($idadeLista)]=20; #contando para chegar ao fim e adicionar na ultima

$idadeLista[]=20; #  Outra forma de enviar para o último lugar do array

foreach ($idadeLista as $idade) {
    echo $idade .PHP_EOL;
};



?>