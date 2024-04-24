<?php

class Cliente{
    // Atributos
        private $id;
        private $nome;
        private $cpf;
        //metodo Construtor
        public function __construct($id, $nome, $cpf)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        
        public function getId(){
            return $this->id;
        }
    
        public function getNome()
        {
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function _toString(){
            return "Nome: $this->nome - CPF: $this->cpf";
        }
    }

?>