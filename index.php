<?php 
    require_once __DIR__.'/models/allegato.php';
    require_once __DIR__.'/models/comunication.php';
    require_once __DIR__.'/models/email.php';
    require_once __DIR__.'/models/notifications.php';
    require_once __DIR__.'/models/sms.php';

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
    echo "Mittente: ".$sms->getMittente()."<br/>";
    echo "Destinatario: ".$sms->getDestinatario()."<br/>";
    echo "Titolo: ".$sms->getTitolo()."<br/>";
    echo "Messaggio: ".$sms->getMessaggio()."<br/>";
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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Php OOP 3</title>
    </head>
    <body>
        <header>

        </header>
        <main>

        </main>
    </body>
</html>