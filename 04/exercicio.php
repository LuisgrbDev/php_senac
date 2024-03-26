<?php
/*
    FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
  
    Exercício 5 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
*/
//EXERCICIO 1
echo "Exercicio 1 <br>";
        $altura = 1.70;
        $peso = 65.6;
        $imc = $peso / ($altura * $altura);
        
        if ($imc < 18.5){
            echo "<br> $imc : Abaixo do peso <br>";
        }

        if($imc <=24.99 ){
            echo "<br>$imc : Peso Normal <br>";
        }

        if($imc > 25.0){
            echo "<br>$imc : Acima do Peso <br>";
        }

// EXERCICIO 2 
echo "<br>Exercicio 2 <br>";
        $tem_conta = true;
        $compra = true;
        if($compra){
            $saldo_conta = 700.00;
            $valor_compra = 300.00;
            if($valor_compra > $saldo_conta){
                echo "<br> compra não realizada <br>";

            } else{
                echo "<br> compra  realizada com sucesso; <br>";
            }
              
        
        }
        

    
// EXERCICIO 3 
echo "<br>Exercicio 3 <br>";

        $temperatura_celsius = 34.0;
        $temperatura_fahrenheit = ($temperatura_celsius * 9/5) + 32;

    echo "<br>Temperatura em Celsius $temperatura_celsius: <br> convertida em Fahrenheit = $temperatura_fahrenheit <br>";


//EXERCICIO 4 

    echo "<br>Exercicio 4 <br>";

    $idade = 15;
    $eh_maior = $idade > 17;

    echo "<br>Usuário é maior de idade? ". ($eh_maior ? "Sim <br>" : "Não <br>");


//EXERCICIO 5 


?>