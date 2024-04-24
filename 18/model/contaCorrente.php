<?php
require_once'./18/model/conta.php';


class ContaCorrente extends Conta{
    private $lilmiteChequeEspecial;

    public function __construct($cliente,$numero,$saldo,$lilmiteChequeEspecial)
    {
        parent::__construct($cliente,$numero,$saldo);
        $this->limiteChequeEspecial = $lilmiteChequeEspecial;
    }
   
    public function sacar($valorSaque){
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;
        if($valorSaque <=$valorLimiteEspecial){
        return parent::sacar($valorSaque);
    }

    return false;

    }
}

?>