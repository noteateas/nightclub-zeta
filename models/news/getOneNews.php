<?php
require "../../config/connection.php";

	header('Content-Type: application/json');

	$id = $_POST['id'];

	$arr = execQuery("SELECT * FROM club.news WHERE id_news=$id")[0];

	if($arr){
		echo json_encode($arr,JSON_UNESCAPED_UNICODE);
		http_response_code(200);
	}
	else{
		http_response_code(500);
	}
