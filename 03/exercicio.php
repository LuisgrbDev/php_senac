<?php
/*
    Exercício 1 - Soma:
    Declare duas variáveis contendo números inteiros e exiba a soma dos dois números.

    Exercício 2 - Subtração:
    Declare duas variáveis contendo números inteiros e exiba a diferença entre eles.

    Exercício 3 - Multiplicação:
    Declare duas variáveis contendo números inteiros e exiba o produto dos dois números.

    Exercício 4 - Divisão:
    Declare duas variáveis contendo números inteiros e exiba o resultado da divisão do primeiro pelo segundo.

    Exercício 5 - Módulo (Resto da Divisão):
    Declare duas variáveis contendo números inteiros e exiba o resto da divisão do primeiro pelo segundo.

    Exercício 6 - Incremento e Decremento:
    Declare uma variável contendo um número inteiro. Em seguida, incremente o valor dessa variável em 1 e exiba o resultado. Depois, decremente o valor da variável em 1 e exiba o resultado.

    Exercício 7 - Operadores de Comparação:
    Declare duas variáveis contendo números inteiros e utilize operadores de comparação para determinar se o primeiro número é igual, diferente, maior, menor, maior ou igual ou menor ou igual ao segundo número. Exiba o resultado de cada comparação.
*/

//exercicio 1
$numero1 = 10;
$numero2 =  20;
$soma = $numero1 + $numero2;

echo "A soma de A = $numero1 + B = $numero2 é igual = $soma <br>"; 

//exercicios 2 

$numero1 = 10;
$numero2 =  90;
$subtracao = $numero1 - $numero2;

echo "A subtração de A = $numero1 - B = $numero2 é igual = $subtracao <br>";

// exercicio 3

$numero1 = 10;
$numero2 =  40;
$multiplicacao = $numero1 * $numero2;

echo "A multiplicação de A = $numero1 * B = $numero2 é igual = $multiplicacao <br>";

// exercicio 4
$numero1 = 10;
$numero2 =  20;
$divisao = $numero1 / $numero2;

echo "A divisao de A = $numero1 / B = $numero2 é igual = $divisao <br>";

// exercicio 5 
$numero1 = 10;
$numero2 =  5;
$modulo = $numero1 % $numero2;

echo "o resto de A = $numero1 e B = $numero2 é igual = $modulo <br>";

// exercicio 6 

$numero1 = 10;
$numero2 =  20;
$numero1++;

echo " A = 10 , incremento de 1 = $numero1 <br>";
$numero1--;
echo " A = 10 , decremento de 1 = $numero1 <br>";

//exercicios 7
$numero1 = 10;
$numero2 =  20;
echo "Igual a : ";
echo $numero1 == $numero2 ? "verdadeiro <br>": "falso <br>";

//DIFERENTE
echo "Diferente de: ";
echo $numero1 != $numero2 ? "Verdadeiro <br>": "Falso <br>";

//MAIOR QUE 
echo "Maior que: ";
echo $numero1 > $numero2 ? "Verdadeiro <br>": "Falso <br>";

//MENOR QUE 
echo "Menor que: ";
echo  $numero1 < $numero2 ? "Verdadeiro <br>": "Falso <br>";
?>