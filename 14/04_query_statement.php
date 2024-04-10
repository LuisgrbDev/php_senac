<?php
// definfindo constantes para a conexão com o banco de dados
define('DB_SERVER','localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME','contatos');
//criar uma conexão com banco de dados
$connection = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//verificando conexão

if($connection->connect_errno){
    die("Erro de Conexão".$connection->connect_errno);
}
//definindo o id que você deseja buscar
$id = 5;
// Definindo o ID que você deseja buscar
$sql = "SELECT * FROM contatos_info WHERE id = ?";
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
            echo "Nome: ".$row["nome"]."<br>";
            echo "Email: ".$row["email"]."<br>";
            echo "Telefone: ".$row["email"]."<br>";
            echo "<hr>";
    } else {
        echo " Nenhum registro encontrado";
    }
    $stmt->close();
} else{
    echo "Erro na consulta preparada";
}
$connection->close();


?>