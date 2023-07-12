<?php 
    class SMS extends Comunicazione {
        protected $notificaLettura;
        protected $rispostaAccettata;

        public function __construct($mittente, $destinatari, $titolo, $messaggio, $notificaLettura, $rispostaAccettata){
            parent::__construct($mittente, $destinatari, $titolo, $messaggio);
            $this->notificaLettura = $notificaLettura;
            $this->rispostaAccettata = $rispostaAccettata;
        }
    }
?>