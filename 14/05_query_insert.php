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

// criacao de dados para a inserção
$nome = "beltrano";
$telefone = null;
$email = "beltrano@mail.com";


//query para inserir um contato (Utilizando uma consulta preparada)

$meu_insert = "INSERT INTO contatos_info (nome,telefone,email) VALUES(?,?,?)";
$stmt = $connection->prepare($meu_insert);

//verifica se a consulta preparada foi bem sucedida

if($stmt){
    //associa os parâmetros à consulta preparada
    $stmt->bind_param("sss",$nome,$telefone,$email);

    //executa a consulta
    if($stmt->execute()) {
        echo "Contato inserido com suceso";
    } else {
        echo "Erro ao inserir o Contato:". $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "ERRO NA CONSULTA PREPARADA". $connection->error;

}
$connection->close();

?>


