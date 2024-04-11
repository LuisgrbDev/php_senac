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

// criando visualização dos produtos
$consulta = "SELECT * FROM itens_compra";
$result = $connection->query($consulta);

if($result->num_rows >0){
    while($row = $result->fetch_assoc()) {
    echo "Id: " . $row['id'] . "<br>";
    echo "Nome_produto: " . $row['nome_produto'] . "<br>";
    echo "Quantdade: " . $row['quantidade'] . "<br>";
    echo "<hr>";
    }
} else {
    echo "Nenhum Produto encontrado";
}

$connection->close();

?>