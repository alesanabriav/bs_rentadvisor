<?php 

function storeContact($data = []) {
	$to = $data['to'];
	$subject = $data['subject'];
	$msg = $data['message'];
	$mail = mail($to, $subject ,$msg);
	return ["success" => true];
}