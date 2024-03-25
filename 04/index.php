<?php
//FLOATS E BOOLEANOS

//NÚMEROS DECIMAIS (FLOATS)

    $altura = 1.75;
    $peso =75.4;

    echo "ALtura: $altura Metros - Peso $peso Quilogramas <br>";

//OPERAÇÕES COM FLOATS 
$preco_produto = 19.99;
$quantidade =  3;
$total = $preco_produto * $quantidade;

echo "total da compra de $quantidade itens do produto que custa $preco_produto: $total reais.<br>";


//BOLLEANS

    $tem_idade = true;
    $tem_cartao = false;

    $pode_entrar = $tem_idade && $tem_cartao;

    echo "Pode entrar na festa: ".($pode_entrar ? "Sim <br>" : "Não <br>");

    $tem_passaporte = true;
    $tem_visto = false;
    $pode_viajar = $tem_passaporte|| $tem_visto;

    echo "Pode viajar pro Exterior: ".($pode_viajar ? "Sim <br>" : "Não <br>");

        $sem_carteira_motorista =  true;

        $pode_dirigir = !$sem_carteira_motorista;

        echo "Pode dirigir: ". ($pode_dirigir ? "Sim <br>" : "Não <br>" );

$eh_maior = 5> 7;
echo "5 é maior que 7? :". ($eh_maior ? "Sim <br>" : "Não <br>"); 

?>