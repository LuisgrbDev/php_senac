<?php
require_once'./18/model/conta.php';

class ContaPoupanca extends Conta{
    private $taxaRendimento; 

    public function __construct($cliente,$numero,$saldo,$taxaRendimento)
    {
        parent::__construct($cliente,$numero,$saldo);
        $this->taxaRendimento = $taxaRendimento;
    }
    public function aplicarRendimento(){
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}

?>