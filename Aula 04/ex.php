<?php

$listaCadastro = [
    '158.357.188-45'=> ['nome' => 'Gustavo', 'Endereco' => 'Rua Kenedy, 45', 'Divida' => 100], 
    '431.938.138-69'=> ['nome' => 'João', 'Endereco' => 'Rua Kenedy, 43', 'Divida' => 100], 
    '125.468.795-09'=> ['nome' => 'Pedro', 'Endereco' => 'Rua 15 Junho, 325', 'Divida' => 100]
];
    foreach($listaCadastro as $cpf=> &$cadastro){
        $cadastro['Divida']-=50;
    }

    foreach ($listaCadastro as $cpf=> $cadastro) {
        echo $cadastro['nome'].PHP_EOL;
        echo $cadastro['Endereco'].PHP_EOL;
        echo $cpf.PHP_EOL;
        echo $cadastro['Divida'].PHP_EOL;
        echo PHP_EOL;
    }

    // foreach ($listaCadastro as $cpf=> $cadastro) {
    //     echo $cadastro['nome'].PHP_EOL;
    //     echo $cadastro['Endereco'].PHP_EOL;
    //     echo $cpf.PHP_EOL;
    //     $divida = $cadastro['Divida']-50; 
    //     echo $divida.PHP_EOL;
    //     echo PHP_EOL;
    // }
    
