<?php

function teste(){
    $a = 0;
    $a++;
    echo "$a <br>";
}
teste();

echo "<br> Teste Static";

function testeStatic(){
    static $a = 0;
    $a++;
    echo "$a <br>";
}
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();

?>