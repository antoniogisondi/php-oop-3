<?php 
    require_once __DIR__.'/models/comunication.php';
    require_once __DIR__.'/models/email.php';
    require_once __DIR__.'/models/notifications.php';
    require_once __DIR__.'/models/sms.php';

    $mess = new Comunicazione('Antonio', 'Giuseppe', 'Titolo della comunicazione','Contenuto della comunicazione');
    echo "Mittente: ".$mess->getMittente()."<br/>";
    echo "Destinatario: ".$mess->getDestinatario()."<br/>";
    echo "Titolo: ".$mess->getTitolo()."<br/>";
    echo "Messaggio: ".$mess->getMessaggio()."<br/>";
    echo "Stato invio: ".$mess->invio()."<br/>";

    echo "<hr/>";

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