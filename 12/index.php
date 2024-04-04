<?php

//definição da classe abstrata Personagem
    abstract class Personagem{
        //atributos protegidos para encapsulamento
        protected $nome;
        protected $pontosVida;
        protected $poderAtaque;
        private $vivo;

        // método construtor
        public function __construct($nome,$pontosVida,$poderAtaque){
            $this->nome = $nome;
            $this->pontosVida = $pontosVida;
            $this->poderAtaque = $poderAtaque;
            $this->vivo = true;
        }
        //metodo para exibir dados do personagem
        public function exibirDados(){
            echo "Nome: {$this->nome}, Pontos de Vida: {$this->pontosVida}, vivo: ".
            ($this->vivo? 'Sim':'Não'). "<br>";
        }

        public function sofrerDano($danoSofrido){
            $this->pontosVida -= $danoSofrido;
            if($this->pontosVida<=0){
                $this->morrer();
            }
        }

        public function recuperarVida($quantidade){
            $this->pontosVida +=$quantidade;
            echo "{$this->nome} Recuperou um total de $quantidade de pontos de vida";
        }

        abstract public function atacar($inimigo);

        private function morrer(){
            $this->vivo = false;
            echo "{$this->nome} Morreu";

        }
    }

    class Guerreiro extends Personagem{
        public function atacar($inimigo){

        }

    }

    class Mago extends Personagem{
        public function atacar($inimigo){
            
        }

    }

    //Não é possivel instanciar um objeto a partir de uma classe abstrata
    //$personagem1 = new Personagem();

    $guerreiro = new Guerreiro("Aragorn",100,20);
    $mago = new Mago("Gandalf",80,30);
  
    echo "Dados do Guerreiro: <br>";
    echo $guerreiro->exibirDados();
    echo "Dados do Mago: <br>";
    echo $mago->exibirDados();


    $guerreiro->sofrerDano(120);
    echo "Sofreu dano de 120";
    $guerreiro->exibirDados();
?>