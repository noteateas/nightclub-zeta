<?php

require "../../config/connection.php";
include "functions.php";

header('Content-Type: application/json');

if(isset($_POST['sortProgram'])){
	$value = $_POST['value'];
	$num = $_POST['num'];
	if($num == 'null'){
		$num = 1;
	}
	else if($num == null){
		$num = 1;
	}

	$shown = paginate('date', 6, $num);

	if(!in_array($value,['Z-A','A-Z','newest','oldest'])){
		http_response_code(400);
	}
	else{
		if($value =='Z-A'){
			usort($shown,'compareZA');
		}
		else if($value =='A-Z'){
			usort($shown,'compareAZ');
		}
		else if($value =='newest'){
			usort($shown,'compareNewest');
			
		}
		else if($value =='oldest'){
			usort($shown,'compareOldest');
		}

		echo json_encode($shown,JSON_UNESCAPED_UNICODE);
		http_response_code(200);
	}
}

?>