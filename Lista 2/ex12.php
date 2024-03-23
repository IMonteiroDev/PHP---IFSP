<!-- 12 Criar um aplicativo que calculo você informe o seu salario bruto, e ele remova os imposto de renda, exiba o valor anual, e o valor em dólar.(atual) -->


<?php
$dol = 5;


function irrf($valor){
    $result=0;
    if($valor<=2259.20){
        $result = $valor;
    }elseif($valor<=2826.65){
        $result = ($valor*0.075)-169.44;
    }elseif($valor<=3751.05){
        $result = ($valor*0.15)-381.44;
    }elseif($valor<=4664.68){
        $result = ($valor*0.225)-662.77;
    }else{
        $result = ($valor*0.275)-896;
    }
    return $result;
}

echo "Informe o Seu sálario bruto: ";
$sal = readline();
$imposto = irrf($sal);
echo "\n---------------------------------".PHP_EOL;
echo "O Sálario Bruto Informado foi: R$",$sal.PHP_EOL;
echo "Imposto de renda pago será: R$",$imposto.PHP_EOL;
echo "Valor anual: R$ ",$sal*12 .PHP_EOL;
echo "O Valor em dolar mensal desse Sálario é: US$", $sal/$dol .PHP_EOL;

?>
