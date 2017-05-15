<?php

require_once(dirname(path)."/utils/functions.php");
function user_doesnt_exists() {

api_response_error("Such user doesn't exists!");
	exit();
}

function unknown_action($message){
	api_response(array(ERROR_MSG=> "Unknown action -- $message"));
	exit();
}


?>