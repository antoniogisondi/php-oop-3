<?php 
// STAMPO A SCHERMO LE ISTANZE DELLA CLASSE COMUNICAZIONE
$mess = new Comunicazione('Antonio', 'Giuseppe', 'Titolo della comunicazione','Contenuto della comunicazione');
echo "Mittente: ".$mess->getMittente()."<br/>";
echo "Destinatario: ".$mess->getDestinatario()."<br/>";
echo "Titolo: ".$mess->getTitolo()."<br/>";
echo "Messaggio: ".$mess->getMessaggio()."<br/>";
echo "Stato invio: ".$mess->invio()."<br/>";

echo "<hr/>";

// STAMPO A SCHERMO LE ISTANZE DELLA CLASSE EMAIL
$email = new Email('Antonio', 'Giuseppe', 'Titolo della mail', 'Contenuto della mail', 'allegato.pdf', true);
echo "Mittente: ".$email->getMittente()."<br/>";
echo "Destinatario: ".$email->getDestinatario()."<br/>";
echo "Titolo: ".$email->getTitolo()."<br/>";
echo "Messaggio: ".$email->getMessaggio()."<br/>";
echo "Allegato: ".$email->getAllegato()."<br/>";
if($email->getNotificaConsegna()){
    echo 'L\'email è stata consegnata correttamente <br/>';
}
else{
    echo 'L\'email non è stata consegnata correttamente <br/>';
}
echo "Stato invio: ".$email->invio()."<br/>";
echo "Stato inoltro: ".$email->inoltro()."<br/>";
echo "Stato stampa: ".$email->stampa()."<br/>";

echo "<hr/>";

// STAMPO A SCHERMO LE ISTANZE DELLA CLASSE SMS
$sms = new SMS('Antonio', 'Francesco', 'Titolo dell\' SMS', 'Contenuto dell\' SMS', true, false);
echo "Da ".$sms->getMittente()."<br/>";
echo "a ".$sms->getDestinatario()."<br/>";
echo $sms->getTitolo()."<br/>";
echo "Messaggio: ".$sms->getMessaggio()."<br/>";
echo $sms->invio()."<br/>";
if($sms->getNotificaLettura()){
    echo 'Il messaggio è stato visualizzato <br/>';
}
else{
    echo 'Il messaggio non è stato visualizzato <br/>';
}

if($sms->getRispostaAccettata()){
    echo 'Hai ricevuto risposta <br/>';
}
else{
    echo 'Non hai ricevuto risposta <br/>';
}

echo "<hr/>";

$notify = new Notifiche_PUSH('Antonio', 'Instagram', 'Titolo della notifica', 'Contenuto della notifica', false, 'Icona della notifica');
echo $notify->getMittente()." ";
echo "hai ricevuto una notifica da ".$notify->getDestinatario()."<br/>";
echo $notify->getTitolo()."<br/>";
echo $notify->getMessaggio()."<br/>";
if($notify->getEventoClick()){
    echo 'La notifica è stata letta <br/>';
}
else{
    echo 'Hai 1 notifica non letta <br/>';
}
echo $notify->getIcona();

?>