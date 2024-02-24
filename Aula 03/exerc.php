<?php

$nomeCompleto = ["Gustavo", "Henrique", "Dias", "Mattioni"];

// foreach ($nomeCompleto as $nome){
//     echo $nome, ' ';
// }

// $qtd = count($nomeCompleto);

// echo $qtd;


for ($i=sizeof($nomeCompleto); $i >=0 ; $i--) { 
    for ($j=strlen($nomeCompleto[$i]); $j >= 0; $j--) { 
        echo substr($nomeCompleto[$i], $j, 1);
    }
    echo" ";
}


?>