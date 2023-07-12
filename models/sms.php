<?php 
    class SMS extends Comunicazione {
        protected $notificaLettura;
        protected $rispostaAccettata;

        public function __construct($mittente, $titolo, $messaggio, $destinatari, $notificaLettura, $rispostaAccettata){
            parent::__construct($mittente, $titolo, $messaggio, $destinatari);
            $this->notificaLettura = $notificaLettura;
            $this->rispostaAccettata = $rispostaAccettata;
        }
    }
?>