<?php

// definfindo constantes para a conexão com o banco de dados
define('DB_SERVER','localhost');
define('DB_USERNAME', 'usuario_lista_compras');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME','lista_compras');

//criar uma conexão com banco de dados
$connection = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//verificando conexão
if($connection->connect_errno){
    die("Erro de Conexão".$connection->connect_errno);
}

$id = 1;

$sql = "SELECT * FROM itens_compra WHERE id = ?";
$stmt = $connection->prepare($sql);

if($stmt){
    // Associando o parâmetro á consulta preparada
    $stmt->bind_param("i",$id);

    //executando a consulta
    $stmt->execute();
    // armazenando o resultado da consulta em variavel
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        // obtendo a linha resultante
        $row = $result->fetch_assoc();
            //exibe os valores dos campos utilizando o método fetch_assoc()
            echo "ID: ".$row["id"]."<br>";
            echo "Nome_Produto: ".$row["nome_produto"]."<br>";
            echo "Quantidade: ".$row["quantidade"]."<br>";
            echo "<hr>";
    } else {
        echo " Nenhum registro encontrado";
    }
    $stmt->close();
} else{
    echo "Erro na consulta preparada";
}
$connection->close();

