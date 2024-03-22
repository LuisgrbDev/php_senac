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

   

?>
