<?php 
    class Notifiche_PUSH extends Comunicazione {
        private Bool $eventoClick;
        private String $icona;

        public function __construct(String $mittente, String $destinatario, String $titolo, String $messaggio, Bool $eventoClick, String $icona){
            parent::__construct($mittente, $destinatario, $titolo, $messaggio);
            $this->eventoClick = $eventoClick;
            $this->icona = $icona;
        }
        public function setEventoClick(){
            $this->eventoClick = $eventoClick;
        }

        public function getEventoClick(){
            return $this->eventoClick;
        }

        public function setIcona(){
            $this->icona = $icona;
        }

        public function getIcona(){
            return $this->icona;
        }
    }
?>