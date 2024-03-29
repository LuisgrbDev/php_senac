<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO




// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5;
echo " Contagem Regressiva: <br>";



// Solução com for
for($i=$numero; $i >= 0 ; $i--){
    
    echo "Falta $i Segundos <br>";
}

// Solução com while
$i= $numero;
while($i >= 0){
    echo "Falta $i Segundos <br>";
    $i--;
}

// Solução com do-while
$i= $numero;
do{
    echo "Falta $i Segundos <br>";
    $i--;
}while($i >= 0);

// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

//solução com FOR
echo "<br>EXERCICIO 2 <br>";
echo "FOR: <br>";
$tabuada_numero = 9;

for($i = 1; $i <=10; $i++){
    $resultado = $i*$tabuada_numero;
    echo "<br>$tabuada_numero * $i = $resultado <br>";
}

// Solução com while
echo "<br>WHILE: <br>";
$i = 1;
while ($i<=10){
    $resultado = $i*$tabuada_numero;
    echo "<br>$tabuada_numero * $i = $resultado <br>";
    $i++;
}

// Solução com do-while
echo "<br>DO-WHILE: <br>";
$i= 1 ;
do{
    $resultado= $tabuada_numero * $i;
    echo "<br>$tabuada_numero * $i = $resultado <br>";
    $i++;

}while($i <=10);

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/


// Solução com for
echo "<br> FOR: <br>";
$termos = 13;
$anterior =  0;
$atual = 1 ;
echo "$anterior $atual ";
for($i = 2; $i < $termos; $i++){
    $proximo = $anterior + $atual;
    $anterior = $atual;
    $atual = $proximo;
    echo " $proximo ";
}


// Solução com while
echo "<br> WHILE: <br>";
$anterior =  0;
$atual = 1 ;
$i = 2;
$termos = 13;
echo "$anterior $atual ";
while ($i < $termos){
    $proximo = $anterior + $atual;
    echo " $proximo ";
    $anterior = $atual;
    $atual = $proximo;
     $i++;
}




?>