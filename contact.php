<?php

	require('config.php');
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;
	
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

	$mg = Mailgun::create(MAILGUN_API_KEY); // For US servers
	$domain = MAILGUN_DOMAIN;
	
	$mg->messages()->send($domain, [
		'from'	=> 'Visitante <mailgun@sandboxca47f7d1554243fc96f8b4bc19eb28c0.mailgun.org>',
		'to'	=> 'fernandosiebra@gmail.com',
		'subject' => 'Contato Site Uniq',
		'text'	=> $html
	]);

	$result = $mg->sendMessage($domain, array(
		
	));
	
	echo "Message sent!";