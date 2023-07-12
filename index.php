<?php 
    require_once __DIR__.'/models/comunication.php';
    require_once __DIR__.'/models/email.php';
    require_once __DIR__.'/models/notifications.php';
    require_once __DIR__.'/models/sms.php';

    $mess = new Comunicazione('Antonio', 'Giuseppe', 'Titolo della mail','Contenuto della mail');
    echo "Mittente: ".$mess->getMittente()."<br/>";
    echo "Destinatario: ".$mess->getDestinatario()."<br/>";
    echo "Titolo: ".$mess->getTitolo()."<br/>";
    echo "Messaggio: ".$mess->getMessaggio()."<br/>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php OOP 3</title>
    </head>
    <body>
        
    </body>
</html>