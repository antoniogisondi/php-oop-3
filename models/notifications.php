<?php 
    class Notifiche_PUSH extends Comunicazione {
        protected $icona;
        protected $eventoClick;

        public function __construct($mittente, $destinatario, $titolo, $messaggio, $icona, $eventoClick){
            parent::__construct($mittente, $destinatario, $titolo, $messaggio);
            $this->icona = $icona;
            $this->eventoClick = $eventoClick;
        }
    }
?>