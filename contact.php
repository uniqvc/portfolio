<?php
	
	// This is to check if the request is coming from a specific domain
	$ref = $_SERVER['HTTP_REFERER'];
	$refData = parse_url($ref);

	if($refData['host'] !== 'uniq.vc') {
	  // Output string and stop execution
	  die("Hotlinking not permitted");
	}

	if( !isset($_POST['mensagem']) )
	{
		die();
	}

	if( !isset($_POST['mensagem']) )
	{
		die();
	}

	//filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$email = isset($_POST['email']) ? $_POST['email'] : 'vazio';
	$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'vazio';

	
	$html = "
		<h3>Mensagem enviada a partir do site</h3><br/>
		<strong>E-mail:</strong> %s
		<br/></br/>
		%s
	";

	$html = sprintf($html,$email,$mensagem);

	/**
	 * This example shows settings to use when sending via Google's Gmail servers.
	 */
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');
	require 'phpmailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	//$mail->SMTPDebug = 2;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "servidoruniq@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "MeMB901D";
	//Set who the message is to be sent from
	$mail->setFrom('servidoruniq@gmail.com', 'Site Uniq');
	//Set an alternative reply-to address
	$mail->addReplyTo('replyto@example.com', 'First Last');
	//Set who the message is to be sent to
	$mail->addAddress('fernandosiebra@gmail.com', 'Fernando Siebra');
	$mail->addAddress('contato@uniq.vc', 'Contato Uniq');
	//Set the subject line
	$mail->Subject = 'Site Uniq Contato';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($html);
	//Replace the plain text body with one created manually
	$mail->AltBody = strip_tags($html);
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}