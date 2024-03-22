<?php

// NÚMEROS E OPERADORES 


//OPERAÇÕES BÁSICAS 

$num1 = 10;
$num2 = 5;
echo "Valor A = $num1 e valor B = $num2 <br>";
//SOMA 
$soma = $num1 + $num2;

echo "Soma: $soma <br>";

// SUBTRAÇÃO

$subtracao = $num1 - $num2;
echo "Soma: $subtracao <br>";
// MULTIPLICAÇÃO
$multiplicacao  = $num1 * $num2;
echo "Soma: $$multiplicacao <br>";
// DIVISÃO
$divisao = $num1 / $num2;
echo "Soma: $divisao <br>";

//MPODULO (RESTO DA DIVISÃO)
$modulo = $num1 % $num2;
echo "Módulo: $modulo <br>";


// OPERAÇOES DE INCREMENTO E DECREMENTO

$num = 5;
echo "Valor base para incremento e decremento = $num <br>";


//INCREMENTO
$num++;

echo "incremento: $num <br>";

// DECREMENTO

$num--;
echo"Decremnto: $num <br>";

//OPERADORES DE COMPARAÇÃO
$num1 = 10;
$num2 = 5;

//IGUALDADE
echo "Igual a : ";
echo $num1 == $num2 ? "verdadeiro": "falso";
?>