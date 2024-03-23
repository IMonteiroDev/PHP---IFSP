<!-- 7 Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, SEM ORDENAR. -->

<?php
$vetor = array(7,8,16,15,-19,2,-11,13,9,-20,19,11,154,18,-11,-2,10,0,-15,15);
$maior=0;
$menor=0;
foreach($vetor as $valor){
    if($valor>=$maior){
        $maior=$valor;
    }
    elseif($valor<=$menor){
        $menor=$valor;
    }
}
echo "O Maior valor é: ",$maior;
echo "\nO Menor valor é: ", $menor;


?>
