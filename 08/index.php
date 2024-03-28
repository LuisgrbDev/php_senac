<?php
//estruturas de repetição em php

//exemplo 1: FOR

echo "Exemplo 1: FOR <br>";

// for(INICIALIZAR UMA VARIAVEL - TESTAR UMA CODNIÇÃO - INCREMENTAR/DECREMENTAR){
    for($i = 0; $i <= 5 ;$i++){
        echo "Número $i <br>";
    }
    echo "<br>";


    //EXEMPLO 2: WHILE

    echo "Exemplo 2: WHILE <br>";

    $contador = 1 ;

    while($contador <= 5 ){
        echo "Numero $contador <br>";
        $contador++;    
    }

    //exemplo 3: DO-WHILE

    echo "Exemplo 3: Do-while <br>";

    $cont_do =1;

    do{
        echo "Numero: $cont_do <br>";
        $cont_do++;

    } while ($cont_do <= 5 );
    echo "<br>";

  // Exemplo 4: FOREACH
echo "Exemplo 4: FOREACH <br>";
$array_vogais = ["a", "e", "i", "o", "u"];
foreach($array_vogais as $vogal) {
    echo "Vogal: $vogal <br>";
}
echo "<br>";

// EXEMPLO 5: BREAK e CONTINUE
echo "Exemplo 5: BREAK e CONTINUE <br>";
    for ($i = 1; $i <= 10; $i++){
        if($i == 3 ){
            continue;
        }
        if($i == 8 ){
            break;
        }
        echo "Número $i <br>";
    }
?>