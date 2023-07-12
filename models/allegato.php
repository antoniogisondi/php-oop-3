<?php 
    class Allegato {
        private String $nome;
        private String $tipo;
        private Float $dimensione;

        public function __construct(String $nome, String $tipo, Float $dimensione){
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->dimensione = $dimensione;
        }

        public function setNome(){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTipo(){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDimensione(){
            $this->dimensione = $dimensione;
        }

        public function getDimensione(){
            return $this->dimensione;
        }
    }

?>