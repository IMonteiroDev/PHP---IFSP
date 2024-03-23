<!-- 6 Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano.
 Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico -->


<?php
$chico=150;
$juca=110;
$ano=0;

while ($juca <= $chico) {
    $chico += 2;
    $juca += 3;
    $ano++;
}



echo 'Levou ',$ano," anos para Juca ficar maior que Chico no final ficaram:\n";
echo "Chico: ",$chico," cm\n";
echo "Juca: ",$juca," cm";



?>
