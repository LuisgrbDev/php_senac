<?php

class Pedido implements JsonSerializable{
    private $id;
    private $data_pedido;
    private $status;
    private $produtos;
    
    public function __construct($id,$data_pedido,$status)
    {
        $this->id = $id;
        $this->data_pedido=$data_pedido;
        $this->status=$status;
    }

    public function getId(){
        return $this->id;
    }

    public function getData(){
        return $this->data_pedido;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setData($data){
        $this->data_pedido = $data;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function jsonSerialize(){
        return [
            'id'=> $this->id,
            'data_pedido' => $this->data_pedido,
            'status' => $this->status
        ];
    }
}

?>