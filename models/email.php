<?php 
    class Email extends Comunicazione {
        public String $allegato;
        private Bool $notificaConsegna;

        public function __construct(String $mittente, String $destinatario, String $titolo, String $messaggio, String $allegato, Bool $notificaConsegna){
            parent::__construct($mittente, $destinatario, $titolo, $messaggio);
            $this->allegato = $allegato;
            $this->notificaConsegna = $notificaConsegna;
        }

        public function setAllegato(){
            $this->allegato = $allegato;
        }

        public function getAllegato(){
            return $this->allegato;
        }

        public function setNotificaConsegna(){
            $this->notificaConsegna = $notificaConsegna;
        }

        public function getNotificaConsegna(){
            return $this->notificaConsegna;
        }

        public function inoltro(){
            return 'Email inoltrata';
        }

        public function stampa(){
            return 'Email stampata';
        }

        public function invio(){
            return 'Email inviata correttamente';
        }
    }
?>