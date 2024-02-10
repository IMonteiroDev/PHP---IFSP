<?php

$idade = 14;
$maior = 18;

echo "Você só pode entrar com 18 anos!" . PHP_EOL;

if ($idade>$maior) {
    echo "Parabén, você pode entrar!";
}else{
    echo "Não pode entrar! Você só tem $idade anos, falta ",$maior-$idade," anos para poder entrar!";
}
?>