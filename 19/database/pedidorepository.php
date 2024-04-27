<?php

require_once 'DatabaseRepository.php';
require_once 'model/Pedido.php';



class PedidoRepository{
    public static function getAllPedidos(){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido");
        $pedidos =[];
        if($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                $pedido = new Pedido($row['id'],$row['data_pedido'],$row['status']);
                $pedidos[] = $pedido;
            }
        }
        $connection->close();
        return $pedidos;
    }

    public static function getBuscarPorId($id){
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido WHERE id = $id");
        $pedido = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $pedido=new Pedido($row['id'], $row['nome'], $row['data_pedido'], $row['status']);
        }
        $connection->close();
        return $pedido; 
    }

    public static function inserirPedidos(Pedido $pedido){
        $connection = DatabaseRepository::connect();
        $id = $pedido->getId();
        $data = $pedido->getData();
        $status = $pedido->getStatus();
        $sql = "INSERT INTO pedido VALUES ($id,$data,$status)";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }
    
    public static function atualizarPedido(){
        $connection = DatabaseRepository::connect();
    }

}



?>