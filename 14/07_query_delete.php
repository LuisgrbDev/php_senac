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

$id = 2;// id do registro que sera excluido

$meu_delete = "DELETE FROM contatos_info WHERE id = ?";
$stmt = $connection->prepare($meu_delete);

if($stmt){
    $stmt->bind_param("i",$id);

    if($stmt->execute()){
        echo "CONTATO DELETADO COM SUCESSO";
    }else{
        echo "ERRO AO DELETAR DADOS". $connection->error;
    }
    $stmt->close();
}else {
    echo "ERRO AO REALIZAR A CONSULTA".$connection->error;
}
$connection->close();
