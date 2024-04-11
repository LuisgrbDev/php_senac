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


//criar uma conexão com banco de dados
$connection = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//verificando conexão
if($connection->connect_errno){
    die("Erro de Conexão".$connection->connect_errno);
}


$nome_produto = "FAROFA";
$id = 6;

$update = "UPDATE itens_compra SET nome_produto = ? WHERE id = ?";
$stmt = $connection->prepare($update);

if($stmt){
    $stmt->bind_param("si",$nome_produto,$id);
    if($stmt->execute()){
        echo "Item  de ID: $id, alterado com SUCESSO ";
    }else{
        echo "erro ao fazer update".$connection->error;
    }
    $stmt->close();
} else {
    echo "Erro ao fazer update do item $id".$connection->error;
}

$connection->close();