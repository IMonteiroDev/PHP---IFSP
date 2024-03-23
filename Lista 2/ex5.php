<!-- 5 Encontre o menor múltiplo comum. -->


<?php

function mdc($a , $b){
    while ($b != 0) {
        $r = $a%$b;
        $a=$b;
        $b=$r;
    }
    return $a;
}

function mmc($a , $b){
    return $a * ($b/mdc($a,$b));
}

echo "MMC\n";
echo "MMC dos valores (36,14) = ", mmc(36,14);

?>
