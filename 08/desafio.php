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
echo "<br> desafio 5:<br>";
$numeroMultiplo = 15;
$multiploDe = 5;
if($numeroMultiplo % $multiploDe == 0){
    echo "$numeroMultiplo é multiplo de $multiploDe";
} else {
    echo "$numeroMultiplo não é multiplo de $multiploDe";
}
// Implementação da Verificação de Múltiplo




//// Exercício 6: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/echo "<br> desafio 6 :<br>";
$numeroN = 1;
$numeroM = 25;

// Implementação de Números Primos em um Intervalo
function ehprimo($numero) {
    if($numero <= 1 ){
       return false;
    }    
    
    for($i = 2; $i <= sqrt($numero); $i++){
        if($numero % $i == 0){
           return false;
        }
    }
    return true;
}
echo "Número primos no intervalo de $numeroN até $numeroM: " ;
    for ($i = $numeroN; $i <= $numeroM; $i++){
        if(ehprimo($i)){
            echo $i," ";
        }
    }



//// Exercício 7: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
echo "<br> desafio 7:<br>";
$horas = 2.30;
// Implementação de Conversão de Horas em Minutos
$minutos = $horas * 60;
echo "$horas Horas, tem um total de $minutos Minutos <br> ";




/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide
echo "<br> desafio 8:<br>";
$entrada = 9;

for($i = 0; $i < $entrada; $i++){
    for($m = 0; $m <= $i; $m++){
        echo " *";
    }
    echo "<br>";
}




//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/echo "<br> desafio 9:<br>";
$numero_inteiro = 777;

// Implementação de Contagem de Dígitos em um Número
echo "$numero_inteiro tem um total de:",strlen($numero_inteiro)," digitos <br>";



//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "radar";
$pali = strrev($palavra);
// Implementação de Verificação de Palíndromo
if($palavra == $pali){
    echo " $palavra é palindromo = $pali";
} else {
    echo "$palavra Não é palindromo";
}
echo "<br>";



//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$num_a = 10;
$num_b = 20;
$num_c = 90;
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