<?php
require_once 'DatabaseRepository.php';
require_once '../model/cliente.php';


class ContaRepository
{

    public static function getAllContas()
    {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta");
        $conta = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $conta[] = $row;
            }
        }
        $connection->close();
        return $conta;
    }

    public static function getContabyId($id){
        $connection = DatabaseRepository::connect();
        $sql =  "SELECT * FROM conta WHERE id=$id";
        $result = $connection->query($sql);
        $conta=null;
        if($result->num_rows > 0){
            $conta=$result->fetch_assoc();
        }
        $connection->close();
        return $conta;
        
    }

    public static function insertConta($id,$numero,$saldo,$tipo,$limite,$taxa){
        $connection  = DatabaseRepository::connect();
        $sql =  "INSERT INTO conta (cliente_id,numero,saldo,tipo,limite_cheque_especial,taxa_rendimento) VALUES ($id,$numero,$saldo,'$tipo','$limite','$taxa')";
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

    public static function updateConta($id,$saldo,$limite,$taxa){
        $connection  = DatabaseRepository::connect();
        $sql =  "UPDATE conta SET  saldo = $saldo, limite_cheque_especial = $limite,taxa_rendimento = $taxa WHERE id = $id";
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }

    public static function deleteConta($id){
        $connection = DatabaseRepository::connect();
        $sql = $connection->query("DELETE FROM conta WHERE id = $id");
        // $success = $connection->query($sql);
        $connection->close();
        return $sql;
    }
}
