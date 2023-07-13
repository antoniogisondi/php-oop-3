<?php 
    require_once __DIR__.'/models/comunication.php';
    require_once __DIR__.'/models/email.php';
    require_once __DIR__.'/models/notifications.php';
    require_once __DIR__.'/models/sms.php';
    require_once __DIR__.'/db.php';
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
        <header class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>Comunication System</h1>
                </div>
            </div>
        </header>
        <main class="container-fluid">
            <div class="row d-flex flex-column">
                <div class="col mt-2">
                <h3>Comunicazione</h3>
                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mittente</th>
                                    <th scope="col">Destinatario</th>
                                    <th scope="col">Oggetto</th>
                                    <th scope="col">Messaggio</th>
                                    <th scope="col">Notifica</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($comunications as $comm) { ?>
                                    <tr>
                                        <td><?php echo $comm->getMittente() ?></td>
                                        <td><?php echo $comm->getDestinatario() ?></td>
                                        <td><?php echo $comm->getTitolo() ?></td>
                                        <td><?php echo $comm->getMessaggio() ?></td>
                                        <td><?php echo $comm::$notification ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col mt-4">
                    <h3>Email</h3>
                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mittente</th>
                                    <th scope="col">Destinatario</th>
                                    <th scope="col">Oggetto</th>
                                    <th scope="col">Messaggio</th>
                                    <th scope="col">Allegato</th>
                                    <th scope="col">Notifica di consegna</th>
                                    <th scope="col">Colore LED</th>
                                    <th scope="col">Notifica</th>
                                    <th scope="col">Invio/Inoltro/Stampa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($emails as $email) { ?>
                                    <tr>
                                        <td><?php echo $email->getMittente() ?></td>
                                        <td><?php echo $email->getDestinatario() ?></td>
                                        <td><?php echo $email->getTitolo() ?></td>
                                        <td><?php echo $email->getMessaggio() ?></td>
                                        <td><?php echo $email->allegato ?></td>
                                        <td><?php echo $email->getNotificaConsegna() ? 'L\'email è stata consegnata' : 'L\'email non è stata consegnata' ?></td>
                                        <td><?php echo $email::$ledColor ?></td>
                                        <td><?php echo $email::$notification ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="mx-2"><?php echo $email->invio() ?></div>
                                                <div class="mx-2"><?php echo $email->inoltro()?></div>
                                                <div class="mx-2"><?php echo $email->stampa() ?></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col mt-4">
                    <h3>SMS</h3>
                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mittente</th>
                                    <th scope="col">Destinatario</th>
                                    <th scope="col">Oggetto</th>
                                    <th scope="col">Messaggio</th>
                                    <th scope="col">Invio del messaggio</th>
                                    <th scope="col">Notifica di lettura</th>
                                    <th scope="col">Notifica di risposta</th>
                                    <th scope="col">Colore LED</th>
                                    <th scope="col">Invio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($sms as $ssm) { ?>
                                    <tr>
                                        <td><?php echo $ssm->getMittente() ?></td>
                                        <td><?php echo $ssm->getDestinatario() ?></td>
                                        <td><?php echo $ssm->getTitolo() ?></td>
                                        <td><?php echo $ssm->getMessaggio() ?></td>
                                        <td><?php echo $ssm->invio() ?></td>
                                        <td><?php echo $ssm->getNotificaLettura() ? 'Il messaggio è stato letto' : 'Il messaggio non è stato letto' ?></td>
                                        <td><?php echo $ssm->getRispostaAccettata() ? 'Sta scrivendo...' : 'Non hanno risposto al tuo messaggio' ?></td>
                                        <td><?php echo $ssm::$ledColor ?></td>
                                        <td><?php echo $ssm::$notification ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col mt-4">
                    <h3>Notifiche PUSH</h3>
                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Mittente</th>
                                    <th scope="col">Destinatario</th>
                                    <th scope="col">Oggetto della notifica</th>
                                    <th scope="col">Contenuto della notifica</th>
                                    <th scope="col">Notifica visualizzata</th>
                                    <th scope="col">Icona</th>
                                    <th scope="col">Colore LED</th>
                                    <th scope="col">Notifica</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($notifies as $notify) { ?>
                                    <tr>
                                        <td><?php echo $notify->getMittente() ?></td>
                                        <td><?php echo $notify->getDestinatario() ?></td>
                                        <td><?php echo $notify->getTitolo() ?></td>
                                        <td><?php echo $notify->getMessaggio() ?></td>
                                        <td><?php echo $notify->getEventoClick() ? 'La notifica è stata visualizzata' : 'Hai 1 notifica non letta'?></td>
                                        <td><?php echo $notify->getIcona() ?></td>
                                        <td><?php echo $notify::$ledColor ?></td>
                                        <td><?php echo $notify::$notification ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>