<!-- 3 Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos -->

<?php
$i = 0;
$positivo=0;
$negativo=0;
while($i<20){
    echo "Informe um valor Inteiro:\n";
    $resposta= readline();
    if($resposta>0){
        $positivo+=$resposta;
    }
    else{
        $negativo++;
    }
$i++;
}

echo "Soma dos positivos é: ", $positivo;
echo "\nQuantidade de negativos é: ",$negativo;


?>
