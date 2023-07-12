<?php 
    class Comunicazione {
        protected $titolo;
        protected $mittente;
        protected $messaggio;
        protected $destinatari;

        public function __construct($titolo, $mittente, $messaggio, $destinatari){
            $this->mittente = $mittente;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->destinatari = $destinatari;
        }
    }

?>