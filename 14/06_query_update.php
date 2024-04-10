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


// criacao de dados para o update
$nome = "Waltinho";
$telefone = "1195865235";
$email = "Waltinho_carnaval_2017@mail.com";
$id = 1;

// Query para atualizar um contato (utilizando consulta preparada);

$meu_update =  "UPDATE contatos_info SET nome = ?, telefone = ?, email= ? WHERE id = ?";
$stmt = $connection->prepare($meu_update);

//verifica se deu certo a QUERY 
if($stmt){
    $stmt->bind_param("sssi",$nome,$telefone,$email,$id);
    //executa a consulta
    if($stmt->execute()){
        echo "Contato Atualizado com sucesso";
    }else{
        echo "Erro ao atualizar o contato". $connection->error;
    }

    //fecho a consulta prerada
    $stmt->close();
} else{
    echo "Erro na consulta preparada: ". $connection->error;
}
$connection->close();

