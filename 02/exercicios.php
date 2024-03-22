<?php
/*
    Exercício 1 - Concatenação de Strings:
    Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".  

    Exercício 2 - Comprimento de uma String:
    Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

    Exercício 3 - Substituição de Caracteres:
    Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.

    Exercício 4 - Conversão de Case:
    Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.

    Exercício 5 - Remoção de Espaços em Branco:
    Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

    Exercício 6 - Posição da Primeira Ocorrência:
    Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

    Exercício 7 - Inversão de uma String:
    Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
*/
    //EXERCÍCIO 1
    $nome = "Luis Gustavo ";
    $profissao= " Desenvolvedor Backend";
        echo $nome."é".$profissao;
        echo "<br>";

    //EXERCÍCIO 2
    $senha = "Pamonha";
    $verificacao = strlen($senha);
    echo $verificacao;

    if($verificacao < 8){
        echo "SENHA INVALIDA";
    } else {
        echo "SENHA VÁLIDA";
    }
    echo "<br>";

    //EXERCÍCIO 3
    $frase = "em caso de erro falar em voz alta com o pato";
    $troca_texto = str_replace("pato","gato",$frase);
    echo $frase;
    echo"<br>";
    echo $troca_texto;
    echo "<br>";

    //EXERCÍCIO 4

    $texto = "Calma, Respira";
    $minuscula = strtolower($texto);
    $maiuscula = strtoupper($texto);

    echo $texto;
    echo"<br>";
    echo $minuscula;
    echo "<br>";
    echo $maiuscula;
    echo "<br>";

    //EXERCÍCIO 5 

    $url = " https://github.com/LuisgrbDev ";
    $removendo_espaco = trim($url);
    echo $removendo_espaco;
    echo "<br>";
    //EXERCÍCIO 6
    $texto = "Refrigerante, chocolate, açucar, leite";
    $posicao = strpos($texto,"leite");

    echo $posicao;
    echo "<br>";

    //EXERCICIO 7
    $texto = "o lobo ama o bolo";
    $invertendo = strrev($texto);
    echo $texto;
    echo "<br>";
    echo $invertendo;
?>