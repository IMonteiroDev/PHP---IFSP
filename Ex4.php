<?php
//4) O sistema deve gerar um laço de 1 a 1000, mostrando se o número é (Par ou Impar) e se é (Primo)
$num=0;
$resultado=0;

for ($i=1; $i <10; $i++) {
    if ($num%2==0) {
        echo "O Valor $num é Par";
        
        for ($i=1; $i <=$num ; $i++) {
            if($num % $i ==0){
                $resultado++;
            }
        }
        if($resultado==2){
            echo" é Número Primo\n";
        }
        else{
            echo" Não é um número Primo\n";
        }
    }
    else {
        echo"O Valor $num é Impar";
        for ($i=1; $i <=$num ; $i++) {
            if($num % $i ==0){
                $resultado++;
            }
        }

        if($resultado==2){
            echo" é Número Primo\n";
        }
        else{
            echo" Não é um número Primo\n";
        }
    }
    $num++;
}
?>