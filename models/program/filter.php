<?php

require "../../config/connection.php";
include "functions.php";


header('Content-Type: application/json');

$value = $_POST['value'];

if(isset($_POST['stages'])){
	if($value!=0){
		$new = getProgramWhere('date',6,0,"p.stage_id=$value");
	}
	else{
		$new = getCustomProgram('date', 6, 0);
	}
	echo json_encode($new,JSON_UNESCAPED_UNICODE);
	http_response_code(200);
	
}

?>