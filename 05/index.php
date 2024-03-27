<?php

//INTRODUÇÃO A ARRAYS EM PHP

// Definição de Arrays

$frutas = array("Maça", "Banana", "Laranja", "Morango");

$numeros = [1, 2, 3, 4, 5];
$alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);

// Acessando elementos do Arrays


echo "A segunda fruta é: " . $frutas[1] . "<br>";
echo "O terceiro numero é: " . $numeros[2] . "<br>";

echo "A idade de João é:  " . $alunos["João"] . " Anos <br>";


// Alterar elementos do Array

$frutas[0] = "Pera";
$numeros[4] = 10;
$alunos["Maria"] = 21;

//Adcionar elementos ao Array

$frutas[] = "Abacaxi";
$numeros[] = 6;
$alunos["Ana"] = 22;

// percorrendo um array com o foreach

echo "Lista de Frutas: ";

foreach ($frutas as $frutas) {
  echo $frutas . " ";
}
echo "<br>";

echo "Lista de números: ";

foreach ($numeros as $numeros) {
  echo $numeros . " ";
}

echo "<br>";

echo "Lista de Alunos:<br> ";
foreach ($alunos as $nome => $idade) {
  echo $nome . " tem " . $idade . " Anos.  <br>";
}


//Funções Úteis para Arrays

// echo "Números de elementos no array de frutas: ". count($frutas). "<br>";
// echo "Indice da fruta 'Laranja' no array" . array_search("Laranja", $frutas) . "<br>";
print_r($frutas);
echo "<br>";
// $frutas_revertidas = array_reverse($frutas);
// print_r($frutas_revertidas);
?>
