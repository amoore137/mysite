<?php 
require __DIR__ . '/vendor/autoload.php';

// Import PHPMailer classes into the global namespace 
	use PHPMailer\PHPMailer\PHPMailer; 
	use PHPMailer\PHPMailer\Exception; 
	 
	//require 'PHPMailer/Exception.php'; 
	//require 'PHPMailer/PHPMailer.php'; 
	//require 'PHPMailer/SMTP.php'; 

function sendemail($to,$subject,$body)
{

	 
	$mail = new PHPMailer; 
	 
	$mail->isSMTP();                      // Set mailer to use SMTP 
	$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
	$mail->SMTPAuth = true;               // Enable SMTP authentication 
	$mail->Username = 'alex.moore19992507@gmail.com';   // SMTP username 
	$mail->Password = 'Blackberry137';   // SMTP password 
	$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
	$mail->Port = 587;                    // TCP port to connect to 
	 
	// Sender info 
	$mail->setFrom('alex.moore19992507@gmail.com', 'Alex Moore'); 
	$mail->addReplyTo('alex.moore19992507@gmail.com', 'Alex Moore'); 
	 
	// Add a recipient 
	$mail->addAddress($to); 
	 
	//$mail->addCC('cc@example.com'); 
	//$mail->addBCC('bcc@example.com'); 
	 
	// Set email format to HTML 
	$mail->isHTML(true); 
	 
	// Mail subject 
	$mail->Subject = $subject; 
	 
	// Mail body content 
	$mail->Body    = $body; 
	 
	// Send email 
	if(!$mail->send()) { 
	    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
	} else { 
	    echo 'Message sent.'; 
	} 
}
?>