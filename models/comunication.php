<?php 
    class Comunicazione {
        private $titolo;
        private $mittente;
        private $messaggio;
        private $destinatari;

        public function __construct($titolo, $mittente, $messaggio, $destinatari){
            $this->mittente = $mittente;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->destinatari = $destinatari;
        }
    }
?>