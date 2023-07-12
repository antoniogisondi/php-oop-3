<?php 
    class Comunicazione {
        // CREO LE PROPRIETà DI UNA CLASSE
        private String $mittente;
        private String $destinatario;
        private String $titolo;
        private String $messaggio;

        // DEFINISCO IL COSTRUTTORE
        public function __construct(String $mittente, String $destinatario, String $titolo, String $messaggio){
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
        }

        // FUNZIONI SET E GET
        public function setMittente(){
            $this->mittente = $mittente;
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function setDestinatario(){
            $this->destinatario = $destinatario;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function setTitolo(){
            $this->titolo = $titolo;
        }

        public function getTitolo(){
            return $this->titolo;
        }

        public function setMessaggio(){
            $this->messaggio = $messaggio;
        }

        public function getMessaggio(){
            return $this->messaggio;
        }

        public function invio(){
            return 'Comunicazione inviata';
        }
    }
?>