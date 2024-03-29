<?php

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
echo "desafio 1:<br>";
// Implementação da Verificação de Soma
$numero_a = 4;
$numero_b = 5;
$numero_C = 9;

if(!$numero_a+$numero_b == $numero_C){
    echo "A:$numero_a <br> B:$numero_b <br> C:$numero_C <br>";
    echo "As somas de A e B é igual a C <br>";
} else{
    echo "A:$numero_a <br> B:$numero_b <br> C:$numero_C <br>";
    echo "As somas de A e B não é igual a C <br>";
}


// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
echo "<br> desafio 2:<br>";
$numero = 30;
// Implementação do Cálculo do Quadrado
echo "$numero ao quadrado é igual: ". $numero*$numero. "<br>";


// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero_im_par = 30;
// Implementação da Verificação de Paridade
echo "<br> desafio 3:<br>";

echo $numero_im_par % 2 == 0 ? "Numero é par <br>": "Numero é impar <br>";

// Desafio 4: Calcular a média de três números
echo "<br> desafio 4:<br>";
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$media =  ($numero_a + $numero_b + $numero_C) / 3;

// Implementação do Cálculo da Média
echo "A:$numero_a <br> B:$numero_b <br> C:$numero_C <br>";
echo "A média de  A + B + C = $media <br>";



// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/

// Implementação da Verificação de Múltiplo




//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/

// Implementação de Números Primos em um Intervalo





//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas = 22.12;

// Implementação de Conversão de Horas em Minutos




/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide






//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/

// Implementação de Contagem de Dígitos em um Número




//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/

// Implementação de Verificação de Palíndromo




//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/

// Implementação de Ordenação de Números





//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/

// Implementação de Soma de Dígitos




//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica



?>