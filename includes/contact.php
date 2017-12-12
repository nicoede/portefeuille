<?php
if(isset($_POST['submit'])){
	require 'vendor/autoload.php';
	
	$sendgrid = new SendGrid("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");
	$email    = new SendGrid\Email();
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
		
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			$email->addTo("app82900688@heroku.com")
	    ->setFrom("edenilson.passos@yahoo.com")
	    ->setSubject('$subject')
	    ->setHtml('$body');
			$sendgrid->send($email);
			
		}
		$message = "User Updated!";
      echo "<script type='text/javascript'>alert('$message');</script>";
			
}
?>