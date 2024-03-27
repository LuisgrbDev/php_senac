<?php
  // VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

    //VERIFICAÇÃO DE TIPO DE DADOS

    $numero = 10;
    $string = "Olá, mundo!";
    $booleano = true;
    $array = [1,2,3];

    echo 'Tipo de dados da variável $numero: '. gettype($numero)."<br>";
    echo 'Tipo de dados da variável $string: '. gettype($string)."<br>";
    echo 'Tipo de dados da variável $booleano: '. gettype($booleano)."<br>";
    echo 'Tipo de dados da variável $array: '. gettype($array)."<br>";

    // VERIFICAÇÃO DE TIPO DE DADOS COM FUNÇÕES
    echo 'Verificação se $numero é do tipo int : ' . (is_int($numero))? "Sim" : "Não" . "<br>";
    echo 'Verificação se $booleano é do tipo boolean: ' . (is_bool($booleano))? "Sim" : "Não" . "<br>";
    echo 'Verificação se $string é do tipo string: ' . (is_string($string))? "Sim" : "Não" . "<br>";
    echo 'Verificação se $array é do tipo array: ' . (is_array($array))? "Sim" : "Não" . "<br>";
    
    //CONVERSÃO DE TIPOS DE DADOS
    $numero_string = "456";
    $numero_Convertido = (int)$numero_string;

    echo "<br>String convertida de string para Int: $numero_Convertido <br>";

    //DEMAIS CONVERSÕES 
    $numero = 456;
    $string_numero = (string)$numero;

    $bool_string = "True";
    $bool_convertido = (bool)$bool_string;


    $array_string = "1,2,3";
    $array_convertido = explode(",", $array_string);

    echo "Número em uma string antes da conversão: $array_string <br>";
    echo "Array convertido de string para array: ";
    print_r($array_convertido);
    echo "<br>";

    #exemplo adicional conversão para array

    $hora = "20:02:56";
    $array_hora_minutos =explode(":",$hora);

    echo "O evento ocorreu $array_hora_minutos[0] horas e $array_hora_minutos[1] Minutos e $array_hora_minutos[2] segundos ";

    #exemplo adicional 2 - conversão para array

    $contatos = "Aecio-Nerildo-JS-Celso-Luana";
    echo "A lista de contatos é: $contatos <br>";

    $contatos_array = explode("-", $contatos);
    print_r($contatos_array);

    //PALAVRAS RESERVADAS E FUNÇÕES COMUNS

    echo "Exemplo de uso da função strttoupper para converter uma string em maiuscula: ".strtoupper($contatos)."<br>";

    echo "Exemplo de uso da palavra reservada require para incluir um arquivo: ";
    //require'arquivo.php';
    echo "<br>";

    class MinhaClasse {
        private $atributo;

        private function metodoPrivado(){
            //implementação do método
        }
    }
    
    echo "Exemplo de uso da constante mágica __DIR__ para obter o diretorio atual: ". __DIR__ . "<br>";
    echo "Exemplo de uso da constante mágica __FILE__ para obter o caminho completo do arquivo atual: ". __FILE__. "<br>";

    ?>