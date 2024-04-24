<?php

abstract class Conta{
    protected $id;
    protected $cliente;
    protected $numero;
    protected $saldo;

    public function __construct($id, $cliente,$numero,$saldo)
    {
        $this->id =$id;
        $this->cliente = $cliente;
        $this->numero = $numero;
        $this->saldo = $saldo;

    }

    public function sacar($valorSaque){
        if($this->saldo >= $valorSaque && $valorSaque > 0){
            $this->saldo-=$valorSaque;
            return true;
        } 

        return false;

    }
    //Método  para depositar

    public function depositar($valorDeposito){
        if($valorDeposito > 0 ){
            $this->saldo +=$valorDeposito;
            return true;
        }

        return false;
    }

    //metodo transferir

    public function transferir($valorTransferencia,$contaDestino){
        if($this->sacar($valorTransferencia)){
            $contaDestino->depositar($valorTransferencia);
            return true;
        }

        return false;
    }

    public function __toString()
    {
        return "Numero: $this->numero - Saldo: $this->saldo - Cliente: {$this->cliente->getNome()}";
    }
}

?>