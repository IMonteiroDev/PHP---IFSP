<!-- 1 A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, 
o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir.
 Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias -->

<?php

echo "Olá informe qual usuario você é:\n1- Aluno\n2- Professor\n";
$resposta = readline();
echo "Qual livro você quer retirar?\n";
$livro = readline();

if($resposta==1){
    echo "Você é Aluno é tem até 3 dias para devolver o livro: ",$livro; 
}else
    echo "Você é professor é tem até 10 dias para devolver o livro: ", $livro;


?>

