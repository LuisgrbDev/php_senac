<?php
    //STRINGS

    //Unir duas ou mais strings em PHP, usamos o operador de concatenação.
    $nome = "Luis ";
    $sobrenome="Benvindo";

    echo $nome."".$sobrenome;// SAIDA: Luis Benvindo
    echo "<br>";

    //Para obter o comprimento de uma string em PHP, usamos a função strlen()

    $texto = "Olá Mundo!";

    echo strlen($texto); // SAIDA: 11 
    echo "<br>";
    //Para substituir partes de uma string, usamos a função str_replace()
    $texto = "O rato roeu a roupa do rei de roma";
    $novo_texto = str_replace("rato","gato",$texto);
    echo $novo_texto; //SAIDA: O gato roeu a roupa do rei de roma
    echo"<br>";

    //strtolower(): Converte uma string para letras minusculas 
    // strtoupper(): Converte uma string para letras maiúsculas
    $texto = "Ola,Mundo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);


    echo $texto;
    echo"<br>";

    echo $texto_maiusculo;
    echo"<br>";

    echo $texto_minusculo;
    echo "<br>";
   //trim(): remove espaços em branco no inicio e no final de uma string.

   $texto = " Olá, mundo!     ";
   echo $texto;
    $texto_sem_espaco = trim($texto);
    echo $texto_sem_espaco;
    echo "<br>";

    //strpos():Encontra a posição da primeira ocorrência de uma substring em uma string
    $texto = "O rato roueu a roupa do rei";
    $posicao = strpos($texto,"rato");
    echo $posicao;
    echo "<br>"; // SAIDA: 2 (posição da primeira letra da palavra "rato")

    // strrev():inverte uma string
    $texto = "Scorram-me subi no onibus em marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido; //SAIDA: socorram me subino on ibus em marrocos

?>
