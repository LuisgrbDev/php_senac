<?php
 function nomeDaFuncao(){
    //bloco de código da função 
 }
//declaração de função sem parâmetros e sem retorno
 function saudacao(){
    echo "Olá, TII04! <br>";
 }
//chamada da função
saudacao();

// Declarando função que retornar um valor
function saudacao_retorno(){
    return "Olá, TII04. <br>";
}
//chamada de função com retorno
echo saudacao_retorno();

//declaração de função com parâmetro
function saudacao_parametro($nome){
    echo "Olá, $nome& <br>";
}
// chamada de função com parâmetro
saudacao_parametro("TII04");

// declaração de função qeu recebe um parâmetro e um retorno
function saudacao_parametro_retorno($nome){
    return "Olá, $nome/ <br>";
}
// chamada de função com parâmetro e retorno
echo saudacao_parametro_retorno("TII04 ");

// declaração de função que  recebe  dois parâmetro e um retorno

function soma($a, $b){
    return $a + $b;
}

echo "A soma de 7 + 7 é igual: ".soma(7,7)."<br>";

#escopo das variáveis!!
$mensagem =  "Olá";

function mostrarMensagem(){
    $mensagem =  " Mundo!"; // Variável local
    echo $mensagem; //SAIDA: MUNDO
}
echo  $mensagem; // SAIDA: Olá
mostrarMensagem()
?>