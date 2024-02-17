<?php
//3) Converter um número de 1 a 100 para extenso

$numero=35;

$dezenas = ($numero%100)/10;
$unidade = $numero%10;

echo $unidade;

if ($numero==100)
    echo "Cem";
else {
    switch ($dezenas) {
        case 1:
                switch ($unidade) {
                    case 0:
                        echo "Dez";
                        break;
                    case 1:
                        echo "Onze";
                        break;
                    case 2:
                        echo "Doze";
                        break;
                    case 3:
                        echo "Treze";
                        break;
                    case 4:
                        echo "Quatorze";
                        break;
                    case 5:
                        echo "Quinze";
                        break;
                    case 6:
                        echo "Dezesseis";
                        break;
                    case 7:
                        echo "Dezessete";
                        break;
                    case 8:
                        echo "Dezoito";
                        break;
                    case 9:
                        echo "Dezenove";
                        break;
                }
            break;

            case 2:
                echo"Vinte";
                break;
            case 3:
                echo"Trinta";
                break;
            case 4:
                echo"Quarenta";
                break;
            case 5:
                echo"Cinquenta";
                break;
            case 6:
                echo"Sessenta";
                break;
            case 7:
                echo"Setenta";
                break;
            case 8:
                echo"Oitenta";
                break;
            case 9:
                echo"Noventa";
                break;
            }

    if($dezenas > 1 && $unidade !=0){
        echo" e ";
        }
    if($dezenas != 1)
        switch($unidade){
        case 1 :
            echo"um ";
            break;
        case 2 : 
            echo"dois ";
            break;
        case 3 : 
            echo"trez ";
            break;
        case 4 :
            echo"quatro";
            break;
        case 5 : 
            echo"cinco ";
            break;
        case 6 : 
            echo"seis ";
            break;
        case 7 : 
            echo"sete ";
            break;
        case 8 : 
            echo"oito ";
            break;
        case 9 : 
            echo"nove ";
            break;
        }
}

?>