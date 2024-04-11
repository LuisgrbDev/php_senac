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

$nome_produto = "Arroz";
$quantidade =  7; 


$sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES(?,?)";
$stmt = $connection->prepare($sql);

if($stmt){
    $stmt->bind_param("si",$nome_produto,$quantidade);

    if($stmt->execute()){
        echo "Item cadastrado com sucesso";
    } else {
        echo "Não foi possivel inserir o Item:".$connection->error;
    }
    
    $stmt->close();

} else{

    echo "NÃO FOI POSSIVEL INSERIR O DADO: ". $connection->error;

}

$connection->close();
