<?php 
    class Email extends Comunicazione {
        protected $allegati;
        protected $notificaConsegna;

        public function __construct($titolo, $mittente, $messaggio, $destinatari, $allegati, $notificaConsegna){
            parent::__construct($titolo, $mittente, $messaggio, $destinatari);
            $this->allegati = $allegati;
            $this->notificaConsegna = $notificaConsegna;
        }
    }
?>