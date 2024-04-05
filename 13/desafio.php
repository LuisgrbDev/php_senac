<?php

 class Cliente{
    public $nome;
    public $cpf;

    public function __construct($nome,$cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;

    }
  
}

abstract class Conta{
    protected $cliente;
    protected $numeroConta;
    protected $saldo;

    public function __construct($cliente,$numeroConta,$saldo)
    {
        $this->cliente = $cliente;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }

    public function exibirDados(){
        echo "Nome:{$this->cliente->nome} - conta:{$this->numeroConta} - Saldo:{$this->saldo} <br>";
    }
    
    abstract public function sacar($valorSaque);

    public function depositar($valorDeposito){
        if($valorDeposito>0){
            $this->saldo += $valorDeposito;
            return true;
        }
    }

    public function transferir($valorTransferencia,$contaDestino){
        if($this->sacar($valorTransferencia)){
            $contaDestino->depositar($valorTransferencia);
            return true;
        }
    }

   
}


class ContaCorrente extends Conta {
    private $limiteChequeEspecial;

    public function __construct($cliente,$numeroConta,$saldo,$limiteChequeEspecial)
    {
        parent::__construct($cliente,$numeroConta,$saldo);
        $this->limiteChequeEspecial = $limiteChequeEspecial;
    }

    public function sacar($valorSaque){
        $valorLimiteEspecial = $this->saldo + $this->limiteChequeEspecial;
        if($valorSaque <= $valorLimiteEspecial){
            $this->saldo -= $valorSaque;
            return true;
        } else if ($this->saldo >= $valorSaque && $valorSaque > 0){
            $this->saldo -= $valorSaque;
            return true;
        } else {
            return false;
        }
    }

}


class ContaPoupanca extends Conta {
    private $taxaRendimento;
    
    public function __construct($cliente,$numeroConta,$saldo,$taxaRendimento)
    {
        parent::__construct($cliente,$numeroConta,$saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function sacar($valorSaque){
        if ($this->saldo >= $valorSaque && $valorSaque > 0){
            return true;
        } else {
            return false; 
        }
    }

    public function aplicarRendimento(){
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}
$cliente1 = new Cliente(" Luis","30225475892");
$cliente2 = new Cliente(" Joana","5082549874");
$cliente3 = new Cliente(" Paulo", "987654321-00");


$contaCorrente = new ContaCorrente($cliente1,1012,250,100);
$contaPoupanca = new ContaPoupanca($cliente2,1222,100,0.35);
$contaCorrente2 = new ContaCorrente($cliente3, 1002, 3000, 1000);


$contaCorrente->exibirDados();
echo "{$cliente1->nome}, fez um saque de R$100,00 <br>";
$contaCorrente->sacar(100);
$contaCorrente->exibirDados();
echo "<br>";
$contaCorrente2->exibirDados();
$contaPoupanca->exibirDados();
echo "{$cliente3->nome}, fez uma transferencia de R$200,00 para o destinatario {$cliente2->nome} <br>";
$contaCorrente2->transferir(200, $contaPoupanca);
$contaCorrente2->exibirDados();
$contaPoupanca->exibirDados();
echo "<br>";
echo "Aplicado rendimento de 0.35$<br>";
$contaPoupanca->aplicarRendimento();
$contaPoupanca->exibirDados();


?>


