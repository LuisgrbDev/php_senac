<?php
//Definição da classe cliente

class Cliente{
// Atributos
    private $nome;
    private $cpf;
    //metodo Construtor
    public function __construct($nome,$cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
}

abstract class Conta{
    protected $cliente;
    protected $numero;
    protected $saldo;

    public function __construct($cliente,$numero,$saldo)
    {
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
}

class ContaCorrente extends Conta{
    private $lilmiteChequeEspecial;

    public function __construct($cliente,$numero,$saldo,$lilmiteChequeEspecial)
    {
        parent::__construct($cliente,$numero,$saldo);
        $this->limiteChequeEspecial = $lilmiteChequeEspecial;
    }
}

class ContaPoupanca extends Conta{

}

?>