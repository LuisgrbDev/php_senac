<?php
/*
    Exercício 1 - Acesso a Elementos:
    Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

    Exercício 2 - Alteração de Elementos:
    Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

    Exercício 3 - Adição de Elementos:
    Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

    Exercício 4 - Percorrendo um Array:
    Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

    Exercício 5 - Contagem de Elementos:
    Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.

    Exercício 6 - Busca de Elemento:
    Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.

    Exercício 7 - Reversão de Array:
    Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.
*/
//Exercício 1 - Acesso a Elementos:
//Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
echo "Exercicio 1: <br>";
$dias_semanas = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado");

echo "Terceiro dia da semana: ". $dias_semanas[3]. "<br>";

echo "<br> Exercicio 2: <br>";

// Exercício 2 - Alteração de Elementos:
// Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

$meses_ano = ["1","2", "3", "4","5","6","7","8","9","10","11","12"];
$meses_ano[11] = "Dezembro";

print_r($meses_ano);
echo"<br>";

echo "<br> Exercicio 3: <br>";

// Exercício 3 - Adição de Elementos:
// Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

$numeros = [];

echo "<br> Adicinando numero de 1a5 a lista: ";
$numeros = [1,2,3,4,5];
print_r($numeros);
echo "<br> Adicinando numero 6 a lista:";
$numeros []= 6;

print_r($numeros);
echo"<br>";

echo "<br> Exercicio 4: <br>";

// Exercício 4 - Percorrendo um Array:
//     Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

$nome_meses = array("Janeiro","Fevereiro", "Março", "Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

foreach($nome_meses as $nome_meses){
    echo $nome_meses.".<br>";
}


echo "<br> Exercicio 5: <br>";

// Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.
$dias_semanas = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado");
echo "Números de dias da semana: ". count($dias_semanas)."<br>";

echo "<br> Exercicio 6: <br>";

// Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
$dias_semanas = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado");

echo "Sabado se encontra na posição: ". array_search("Sabado",$dias_semanas)."<br>";

echo "<br> Exercicio 7: <br>";

// Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.

$numerais = [1,2,3,4,5,6,7,8,9,10];
echo "Array na ordem correta: <br>";
print_r($numerais)."<br>";

$numerai_invertidos =  array_reverse($numerais);
echo "Array Invertida: <br>". print_r($numerai_invertidos)."<br>";

?>