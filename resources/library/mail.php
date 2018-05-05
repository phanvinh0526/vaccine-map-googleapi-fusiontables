<?php

require_once(realpath(dirname(__FILE__) . "/../config.php"));

/*
	AJAX Request & Response
*/
if(isset($_POST['countries']) && isset($_POST['vaccines']) && isset($_POST['email'])){
	$countries = $_POST['countries'];
	$vaccines  = json_decode($_POST['vaccines']);
	$emails	   = $_POST['email'];

	prepare_send($countries, $vaccines, $emails, $email_config);
}

/*
	Support Functions
*/
function sendEmail($email_to, $message, $email_conf){
	$to 		= $email_to;
	$subject 	= $email_conf['subject'];
	$headers	= $email_conf['version'];
	$headers	.= $email_conf['content'];
	$headers	.= $email_conf['from'];
	$headers	.= $email_conf['cc'];	
	
	if(mail($to,$subject,$message,$headers))
		echo "success";
	else
		echo "unsuccess";
}

/*
	LENGTH:		The number of emails sending to
	ARRAY:		The emails
*/
function prepare_send($countries, $vaccines, $emails, $email_config){
	// Send to
	$emails 	= implode($emails);
	$countries 	= explode(',', $countries);
	$sms		= getMessage($countries, $vaccines);
	// echo $emails;
	sendEmail($emails, $sms, $email_config);
}

function getMessage($countries, $vaccines){
	$str = '
		<html>
		<head>
			<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>HTML email</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		</head>
		<body>
			<div class="container">
				<div class="row">
					<h1>Your Recommended Vaccinations</h1>
					<h4>You selected the following countries</h4>
					<ol>';
		foreach($countries as $value){
			$str .= '<li><strong>'.$value.'<strong></li>';
		}
	$str .= '</ol>
				</div>
				<div class="row table-responsive">
					<table class="table table-hover">
						<tr class="info">
							<th>Vaccination</th>
							<th>Description</th>
						</tr>';
		foreach($vaccines as $value){
			// $value = (object) $value;
			if(sizeof($value) >0 ){
				$str .= '<tr>
						<td>'.$value->vacc_name.'</td>
						<td>'.$value->vacc_desc.'</td>
					</tr>';
			}
		}
	$str .= '</table>
				</div>
			</div>
		</body>
		</html>';

	// echo $str;
	return $str;
}

?>