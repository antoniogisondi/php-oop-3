<?php 
    class SMS extends Comunicazione {
        private Bool $notificaLettura;
        private Bool $rispostaAccettata;

        public function __construct(String $mittente, String $destinatario, String $titolo, String $messaggio, Bool $notificaLettura, Bool $rispostaAccettata){
            parent::__construct($mittente, $destinatario, $titolo, $messaggio);
            $this->notificaLettura = $notificaLettura;
            $this->rispostaAccettata = $rispostaAccettata;
        }

        public function setNotificaLettura(){
            $this->notificaLettura = $notificaLettura;
        }

        public function getNotificaLettura(){
            return $this->notificaLettura;
        }

        public function setRispostaAccettata(){
            $this->rispostaAccettata = $rispostaAccettata;
        }

        public function getRispostaAccettata(){
            return $this->rispostaAccettata;
        }

        public function invio(){
            return 'SMS inviato';
        }
    }
?> 