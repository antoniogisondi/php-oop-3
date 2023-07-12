<?php 
    class Email extends Comunicazione {
        protected $allegati;
        protected $notificaConsegna;

        public function __construct($mittente, $destinatari, $titolo, $messaggio, $allegati, $notificaConsegna){
            parent::__construct($mittente, $destinatari, $titolo, $messaggio);
            $this->allegati = $allegati;
            $this->notificaConsegna = $notificaConsegna;
        }
    }
?>