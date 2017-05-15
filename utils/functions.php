<?php

const ERROR_MSG = "error";

function api_response($value)
{
	header('Content-Type: application/json');
	echo json_encode($value);
	exit();
}
function api_response_error($message)
{
	api_response(array(ERROR_MSG=>$message));

}

function api_login_response($message){
	api_response(array('SessionId: ' => $message,
		ERROR_MSG => NULL));
}

function api_data_response($message){
	api_response(array('text: ' => $message,
		ERROR_MSG => NULL));
}

function successful($message){
	api_response(array('text' => $message, 
		ERROR_MSG => NULL
		));
}


?>