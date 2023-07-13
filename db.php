<?php 
// STAMPO A SCHERMO LE ISTANZE DELLA CLASSE COMUNICAZIONE
$comunications = [
    new Comunicazione('Antonio', 'Giuseppe', 'Titolo della comunicazione','Contenuto della comunicazione'),
];

$emails = [
    new Email('Antonio', 'Andrea', 'Titolo della mail', 'Contenuto della mail', 'allegato.pdf', true),
    new Email('Antonio', 'Ferruccio', 'Titolo della mail', 'Contenuto della mail', 'allegato.word', false),
    new Email('Antonio', 'Gianmauro', 'Titolo della mail', 'Contenuto della mail', 'allegato.png', true),
    new Email('Antonio', 'Daniele', 'Titolo della mail', 'Contenuto della mail', 'allegato.jpg', false),
];

$sms = [
    new SMS('Antonio', 'Francesco', 'Titolo dell\' SMS', 'Contenuto dell\' SMS', true, true),
    new SMS('Antonio', 'Michele', 'Titolo dell\' SMS', 'Contenuto dell\' SMS', true, false),
    new SMS('Antonio', 'Giovanni', 'Titolo dell\' SMS', 'Contenuto dell\' SMS', false, false),
];
 
$notifies = [
    new Notifiche_PUSH('Antonio', 'Instagram', 'Titolo della notifica', 'Contenuto della notifica', false, 'Icona della notifica'),
    new Notifiche_PUSH('Antonio', 'Whatsapp', 'Titolo della notifica', 'Contenuto della notifica', true, 'Icona della notifica'),
    new Notifiche_PUSH('Antonio', 'TikTok', 'Titolo della notifica', 'Contenuto della notifica', false, 'Icona della notifica'),
    new Notifiche_PUSH('Antonio', 'Linkedin', 'Titolo della notifica', 'Contenuto della notifica', false, 'Icona della notifica'),
    new Notifiche_PUSH('Antonio', 'Facebook', 'Titolo della notifica', 'Contenuto della notifica', true, 'Icona della notifica'),
    new Notifiche_PUSH('Antonio', 'Snapchat', 'Titolo della notifica', 'Contenuto della notifica', false, 'Icona della notifica'),
];  
?>