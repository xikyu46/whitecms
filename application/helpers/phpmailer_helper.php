<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function config_check($config=false){
	if(is_object($config)){
		$result = new stdClass();
		$result->host = isset($config->host) ? $config->host : false;
		$result->username = isset($config->username) ? $config->username : false;
		$result->password = isset($config->password) ? $config->password: false;
		$result->port = isset($config->port) ? $config->port : 25;
		$result->ssl = isset($config->ssl) ? $config->ssl : false;
		if($result->host && $result->username){
			return $result;
		}
	}
	return false;
}


function email_check($email=false){
	if(is_object($email)){
		$result = new stdClass();
		if (filter_var($email->from_name, FILTER_VALIDATE_EMAIL)) {
			$result->from = isset($email->from_name) ? $email->from_name : $email->from;
		}else{
			$result->from = isset($email->from_name) ? $email->from : $email->from;
		}
		$result->from_name = isset($email->from_name) ? $email->from_name : $result->from;
		$result->reply = isset($email->reply) ? $email->reply : false;
		$result->reply_name = isset($email->reply_name) ? $email->reply_name : $result->reply;
		$result->to = isset($email->to) ? $email->to : false;
		$result->bcc = isset($email->bcc) ? $email->bcc : false;
		$result->subject = isset($email->subject) ? $email->subject: 'No Subject';
		$result->message = isset($email->message) ? $email->message : "";
		$result->attachment = isset($email->attachment) ? $email->attachment : false;
		$result->nohtml = isset($email->nohtml) ? $email->nohtml : false;
		if($result->from && $result->to){
			return $result;
		}
	}
	return false;
}

function send_email($config=false, $email=false){
	$config = config_check($config);
	$email = email_check($email);
	if($config && $email){
// 		require_once("phpmailer/class.phpmailer.php");
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		
		log_message('error','nohtml.'.print_r($email->nohtml,true));
		if($email->nohtml){
			$mail->IsHTML(false);
		}else{
			$mail->IsHTML(true);
		}
			$mail->IsSMTP(); // enable SMTP
// 			$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			if($config->ssl){
				if(trim($config->host) == 'smtp.live.com'){
					$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
				}else{
					if(preg_match('/amazonaws.com/',$config->host)){
						$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
					}else{
						$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail	
					}
					
				}
			}
			$mail->Host = $config->host;
			$mail->Port = $config->port; 
			$mail->Username = $config->username;
			$mail->Password = $config->password;
			if($email->reply){
				$mail->AddReplyTo($email->reply, $email->reply_name);
			}
			
			if($email->bcc){
				if(count($email->bcc) > 1){
					foreach($email->bcc as $rowbcc){
						$mail->AddBCC($rowbcc);
					}
				}else{
					$mail->AddBCC($email->bcc);
				}	
			}
		
			
			if($email->attachment){
				foreach($email->attachment as $row){
					$mail->AddAttachment($row);
				}
			}
			
			$mail->SetFrom($email->from , $email->from_name );
			$mail->Subject = $email->subject;
			$mail->Body = $email->message;
			$mail->AddAddress($email->to,$email->to);
			if($mail->Send()){
				return 1;
			}else{
				return $mail->ErrorInfo;
			}
	}
	return 0;
}