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
    }

?>