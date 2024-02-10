<?php 


    $idade = 18;

    switch ($idade) {
        case $idade>=18:
            echo "Pode entrar e beber";
            break;
        
        case $idade>=16 :
            echo "Pode entrar, mas não pode beber";
            break;
        
        case $idade<16:
            echo "Não pode entrar. Barrado!";
            break;
                    
        default:
            echo "Não foi informado um valor valido";
            break;
    }

?>