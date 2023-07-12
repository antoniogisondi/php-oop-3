<?php 
    class Notifiche_PUSH extends Comunicazione {
        protected $icona;
        protected $eventoClick;

        public function __construct($mittente, $titolo, $messaggio, $destinatari, $icona, $eventoClick){
            parent::__construct($mittente, $titolo, $messaggio, $destinatari);
            $this->icona = $icona;
            $this->eventoClick = $eventoClick;
        }
    }
?>