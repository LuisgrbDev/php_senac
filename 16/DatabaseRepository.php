<?php

class DatabaseRepository{
    private static $server = 'localhost';
    private static $username = 'usuario_contatos';
    private static $password = 'Senha@123';
    private static $database = 'contatos';
 
    public static function connect(){

        return new mysqli(self::$server, self::$username, self::$password, self::$database);
    }

    public static function getAllContacts(){
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM contatos_info");
        $contatos = [];
        if($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                $contatos[] = $row;
            }
        }
        $connection->close();
        
      return $contatos;


    }

    public static function getContactById($id){
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM contatos_info WHERE id = $id");
        $contact = null;

        if($result-> num_rows > 0){
            $contact = $result->fetch_assoc();
        }

        $connection->close();

        return $contact;
    }

    public static function getContactByName($nome){
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM contatos_info WHERE nome = '$nome' ");
        $nome = null;
        if($result-> num_rows > 0 ){
           $nome =  $result->fetch_assoc();
        }
        $connection->close();

        return $nome;

    }


    public static function InsertContact($nome, $telefone, $email){
        $connection = self::connect();
        $sql = "INSERT INTO contatos_info (nome,telefone,email) VALUES ('$nome','$telefone','$email')";
        $sucess = $connection->query($sql);
        $connection->close();
        return $sucess;
    }

    public static function updateContact($id,$nome,$telefone,$email){
        $connection = self::connect();
        $sql = "UPDATE contatos_info SET nome ='$nome', telefone = '$telefone', email = '$email' WHERE id = $id";
        $sucess =  $connection->query($sql);
        $connection->close();
        return $sucess;
    }

    

    public static function deleteContact($id){
        $connection =self::connect();
        $result = $connection->query("DELETE FROM contatos_info WHERE id = $id ");
        $connection->close();
        return $result;
    }

    public static function getServerValues(){
       return self::$server." - ". self::$username;
    }
}
?>