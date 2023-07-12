<?php 
    class SMS extends Comunicazione {
        protected $notificaLettura;
        protected $rispostaAccettata;

        public function __construct($mittente, $destinatario, $titolo, $messaggio, $notificaLettura, $rispostaAccettata){
            parent::__construct($mittente, $destinatario, $titolo, $messaggio);
            $this->notificaLettura = $notificaLettura;
            $this->rispostaAccettata = $rispostaAccettata;
        }
    }
?>