
<?php
/*
1 - Defina uma classe chamada Veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veículo está ligado ou desligado)
 
2 - Implemente um método construtor na classe Veiculo que inicialize as propriedades marca, modelo e ano. O método construtor também deve definir a propriedade "ligado" como false por padrão.
3 - Implementar métodos na classe Veículo:
- ligar(): Este método deve alterar a propriedade "ligado" pra true, se o veículo estiver desligado.
- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
*/
echo "Exercicios 1 <br>";
 class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $ligado;

    public function __construct($marca, $modelo,$ano,$ligado){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->ligado = $ligado;
    }

 }

 $meuCarro = new Carro("Fiat ","Toro ","2024", true);

 echo "Meu carro é da marca: $meuCarro->marca, do modelo: $meuCarro->modelo, do ano: $meuCarro->ano, carro esta ligado: $meuCarro->ligado <br>";

 echo "Exercicios 2 <br>";

 class Carro0{
    public $marca;
    public $modelo;
    public $ano;
    public $ligado1;

    public function __construct($marca,$modelo,$ano){
        $this->marca =$marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->ligado1 = false;
    }
 }

 $meuCarro01 = new Carro0("Fiat","Uno",2024);
 echo "Meu carro é da marca: $meuCarro01->marca, do modelo: $meuCarro01->modelo, do ano: $meuCarro01->ano, carro esta ligado: $meuCarro01->ligado1 <br>";


 echo "Exercicios 3 <br>";
 
class Veiculo{
    public $marca;
    public $modelo;
    public $ano;
    public $ligado;

    public function __construct($marca,$modelo,$ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano =$ano;
        $this->ligado = false;
    }

    public function ligar(){
        $this->ligado == false? $this->ligado = true :null ;
    }
    public function desligar(){
        $this->ligado == true? $this->ligado = false :null ;
    }
    public function exibirDados(){
        echo "marca: $this->marca,modelo: $this->modelo, do ano: $this->ano, ligado: $this->ligado <br>";
    }
}

$meuVeiculo =  new Veiculo("Toyota","Corolla", 2022 );
$meuVeiculo->exibirDados();
?>
 