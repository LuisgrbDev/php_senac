<?php

    echo"Olá Mundo! <br>";
    //isso é um comentario
    #isso é um comentario

    /*
    isso é um comentario de multiplas linhas 
    EU disse,multiplas linhas
    */

    //Declarando variáveis

    $nome = "João";
    $sobrenome= "Silva";
    $nome_completo = $nome." ".$sobrenome;

    //echo $nome;
    //echo $sobrenome;

    echo $nome." ".$sobrenome."<br>";
    echo $nome_completo."<br>";

    //VAriaveis Numericas
    $idade = 25;
    $ano = 2024;

    echo $idade . "<br>";
    echo $ano - $idade."<br>";  // operações matemáticas

    echo 'TEXTO COM ASPAS SIMPLES <br>';
    echo "TExto com aspas duplas <br>";
    //Trabalhando com aspas simples e duplas
    echo 'Dom Pedro disse:"Independencia ou Morte!"<br>';

    echo "$nome tem $idade anos de idade";
?>