<?php
require 'vendor/autoload.php';

if (isset($_POST["submit"])) {
	$from = new SendGrid\Email("Example User", "noreply@smtp.sendgrid.net");
	$subject = "Sending with SendGrid is Fun";
	$to = new SendGrid\Email("Example User", "edenilson.passos@yahoo.com");
	$content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
	$mail = new SendGrid\Mail($from, $subject, $to, $content);
	$apiKey = getenv('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');
	$sg = new \SendGrid($apiKey);
	$response = $sg->client->mail()->send()->post($mail);
	echo $response->statusCode();
	print_r($response->headers());
	echo $response->body();
}
?>