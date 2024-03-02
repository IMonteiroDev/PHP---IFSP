<?php

$cadastro1 = [
    'nome' => 'Gustavo',
    'Endereco' => 'Rua Kenedy, 45'

];

$cadastro2 = [
    'nome' => 'João',
    'Endereco' => 'Rua Kenedy, 43'

];

$cadastro3 = [
    'nome' => 'Pedro',
    'Endereco' => 'Rua 15 Junho, 325'

];

    $listaCadastro = [$cadastro1, $cadastro2, $cadastro3];

    for ($i=0; $i < count($listaCadastro) ; $i++) { 
        echo $listaCadastro[$i]['nome'].PHP_EOL;
        echo $listaCadastro[$i]['Endereco'].PHP_EOL;
    }

?>