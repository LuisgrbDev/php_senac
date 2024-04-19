<?php
require_once 'DatabaseRepository.php';

class clienteRepository{

    public static function getAllclientes(){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM cliente");
        $cliente = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $cliente[] =$row;
            }
        }
        $connection->close();
        return $cliente;
    }

    public static function getClienteById($id){
        $connection = DatabaseRepository::connect();
        $sql =  "SELECT * FROM cliente WHERE id=$id";
        $result = $connection->query($sql);
        $cliente=null;
        if($result->num_rows > 0){
                $cliente= $result->fetch_assoc();
        }
        $connection->close();
        return $cliente;
    }

    public static function insertCliente($nome,$cpf){
        $connection =  DatabaseRepository::connect();
        $sql = "INSERT INTO cliente (nome,cpf) VALUES ('$nome','$cpf')";
        $succes = $connection->query($sql);
        $connection->close();
        return $succes;
    }

    public static function updateCliente($id,$nome,$cpf){
        $connection = DatabaseRepository::connect();
        $sql= "UPDATE cliente SET nome='$nome', cpf= '$cpf' WHERE id=$id";
        $succes = $connection->query($sql);
        $connection->close();
        return $succes;

    }

    public static function deleteCliente($id){
        $connection = DatabaseRepository::connect();
        $succes = $connection->query("DELETE FROM cliente WHERE id =$id");
        $connection->close();
        return $succes;
    }
}

?>