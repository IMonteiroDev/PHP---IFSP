<!-- 8 Usando o mesmo vetor o percentual de números pare e impares. -->

<?php
$vetor = array(7,8,16,15,-19,2,-11,13,9,-20,19,11,154,18,-11,-2,10,0,-15,15);
$pares=0;
$impares=0;

foreach($vetor as $valor){
    if($valor%2==0){
        $pares++;
    }
    else{
        $impares++;
    }
}
echo "Porcentagem de Pares: ",($pares/20)*100,"%";
echo "\nPorcentagem de Impares: ", ($impares/20)*100, "%";

?>
