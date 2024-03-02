<?php

$cadastro1 = ['nome' => 'Gustavo', 'Endereco' => 'Rua Kenedy, 45'];
$cadastro2 = ['nome' => 'João', 'Endereco' => 'Rua Kenedy, 43'];
$cadastro3 = ['nome' => 'Pedro', 'Endereco' => 'Rua 15 Junho, 325'];

$listaCadastro = [
    '158.357.188-45'=>$cadastro1, 
    '431.938.138-69'=>$cadastro2, 
    '125.468.795-09'=>$cadastro3];

    foreach ($listaCadastro as $cpf=> $cadastro) {
        echo $cadastro['nome'].PHP_EOL;
        echo $cadastro['Endereco'].PHP_EOL;
        echo $cpf.PHP_EOL;
        echo PHP_EOL;
    }
    
?>


