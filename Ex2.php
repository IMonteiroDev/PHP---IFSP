<?php
//2) Sem usar função pronta, criar um sistema que recebe 2 números, e realizar a potência entre o primeiro e o segundo/
//Através de laço e n por funções

$num=5;
$qtd=3;
$resultado=1;

for ($i=0; $i < $qtd; $i++) { 
    $resultado*=$num;
}
echo $resultado;

?>