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
            $pedido=new Pedido($row['id'], $row['data_pedido'], $row['status']);
        }
        $connection->close();
        return $pedido; 
    }

    public static function inserirPedidos(Pedido $pedido){
        $connection = DatabaseRepository::connect();
        $id = $pedido->getId();
        $data = $pedido->getData();
        $status = $pedido->getStatus();
        $sql = "INSERT INTO pedido (data_pedido,status) VALUES ('$data','$status')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }
    
    public static function atualizarPedido(Pedido $pedido){
        $connection = DatabaseRepository::connect();
        $id = $pedido->getId();
        $data = $pedido->getData();
    
        $status = $pedido->getStatus();
        echo "id: $id, data: $data status: $status";
        $sql = "UPDATE pedido SET data_pedido = '$data', status = '$status' WHERE id= $id";
        $success = $connection->query($sql);
        
        $connection->close();
        return $success;
    }
    
    public static function deletePedido($id){
        $connection = DatabaseRepository::connect();
        $success = $connection->query("DELETE pedido WHERE id = $id");
        $connection->close();
        return $success;
    }
    
    public static function buscarPedidoProduto(){
        $connection = DatabaseRepository::connect();
        $sql = "SELECT pedido.id as PEDIDO, produto_pedido.quantidade as Quantidade, produto.nome as PRODUTO, produto.descricao as DESCRIÇÃO, produto.preco as PREÇO, pedido.data_pedido as DATA_PEDIDO, pedido.status as STATUS 
        FROM produto_pedido 
        INNER JOIN produto ON produto_pedido.produto_id = produto.id 
        INNER JOIN pedido ON produto_pedido.pedido_id = pedido.id";
         $success = $connection->query($sql);
         $produtoPedido = [];
        if($success->num_rows > 0 ){
            while($row = $success->fetch_assoc()){
                $produtoPedido[] = $row;
            }
        }
       
        $connection->close();
        return $produtoPedido;

    }
}



?>