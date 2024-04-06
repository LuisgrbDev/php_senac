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

    public function getNome()
    {
        return $this->nome;
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

    public function __toString()
    {
        return "Numero: $this->numero - Saldo: $this->saldo - Cliente: {$this->cliente->getNome()}";
    }
}

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

$cliente1 = new Cliente(" Luis","30225475892");
$cliente2 = new Cliente(" Joana","5082549874");
$cliente3 = new Cliente(" Paulo", "987654321-00");


$contaCorrente = new ContaCorrente($cliente1,1012,250,100);
$contaPoupanca = new ContaPoupanca($cliente2,1222,100,0.35);
$contaCorrente2 = new ContaCorrente($cliente3, 1002, 3000, 1000);


echo "Exibir dados $contaCorrente <br>";
echo "Exibir dados $contaPoupanca <br>";
echo "Exibir dados $contaCorrente2 <br>";

$contaCorrente->sacar(100);
echo "Exibir dados $contaCorrente <br>";

?>