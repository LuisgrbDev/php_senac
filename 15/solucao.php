<?php

class DatabaseRepository{
    private $server = 'localhost';
    private $username = 'usuario_lista_compras';
    private $password = 'Senha@123';
    private $database = 'lista_compras';
    private $connection;

    public function __construct()
    {
     $this->connection = new mysqli($this->server,$this->username,$this->password,$this->database);
     if($this->connection->connect_errno){
        die("Erro na conexão:".$this->connection->connect_error);
     }   
    }


    public function getAllItens(){
        $sql = "SELECT * FROM itens_compra";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $itens = $result->fetch_all();
        $stmt->close();
        return $itens;
    }
}