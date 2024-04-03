<?php

class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;

    //Método Contrutor
    public function __construct($marca, $modelo,$ano){
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> ano = $ano;        
    }
    //função/ comportamento /metodo
    public function ligar(){
    echo "O carro está ligado. <br>";
    }
}

$meuCarro = new Carro("Toyota","Corolla",2022);
echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano";
$meuCarro->ligar();
?>