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


//exemplo de consulta sql para selecionar todos os registros da tabela


$sql =  "SELECT * FROM contatos_info";
// Método 1: Utilizando fetche_assoc()

$result = $connection->query($sql);


    if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
            //exibe os valores dos campos utilizando o método fetch_assoc();
            echo "ID: ".$row["id"]."<br>";
            echo "Nome: ".$row["nome"]."<br>";
            echo "Email: ".$row["email"]."<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum Registro Encontrado";
    }
?>