<?php
require 'vendor/autoload.php';
require_once('../resources/functions/sendgrid/lib/SendGrid.php');
require_once('../resources/functions/unirest/lib/Unirest.php');
SendGrid::register_autoloader();

$sendgrid = new SendGrid('app82900688@heroku.com', 'ruhtj15h8987');

$sendgrid_email = new SendGrid\Email();
$sendgrid_email->addTo('edenilson.passos@yahoo.com')->
                setFrom('Name <edenilson.passos@yahoo.com>')->
                setSubject('Name | Test Mail')->
                setText("TEST MESSAGE");
$sendgrid->smtp->send($sendgrid_email);

echo 'mail sent';

?>