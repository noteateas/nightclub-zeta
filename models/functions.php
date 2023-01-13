<?php 

function pageEntry(){
	$file = fopen(LOG_FILE,'ab');
	if($file){
		$page = $_SERVER['REQUEST_URI'];
		$date = date('d-m-Y H:i:s');
		$ipAddr = $_SERVER['REMOTE_ADDR'];

		fwrite($file, $page.SEPARATOR.$ipAddr.SEPARATOR.$date."\n");
		fclose($file);
	}
}
//general
function formatDate($date){
	return @date('j  M, Y', mktime($date));
}
function writeLoginError($username){
	
	$file = fopen(ERR_FILE,'ab');
	if($file){
		$page = $_SERVER['REQUEST_URI'];
		$date = date('d-m-Y H:i:s');
		$ipAddr = $_SERVER['REMOTE_ADDR'];

		fwrite($file, $username.SEPARATOR.$ipAddr.SEPARATOR.$date."\n");
		fclose($file);
	}
}
//sort
function compareOldest($a, $b){
	if($a['date'] > $b['date']) return -1; 
	if($a['date'] < $b['date']) return 1; 
	if($a['date'] == $b['date']) return 0;
}
function compareAZ($a, $b){
	if($a['name'] > $b['name']) return 1; 
	if($a['name'] < $b['name']) return -1; 
	if($a['name'] == $b['name']) return 0;
}
function compareZA($a, $b){
	if($a['name'] > $b['name']) return -1; 
	if($a['name'] < $b['name']) return 1; 
	if($a['name'] == $b['name']) return 0;
}
function compareNewest($a, $b){
	if($a['date'] > $b['date']) return 1; 
	if($a['date'] < $b['date']) return -1; 
	if($a['date'] == $b['date']) return 0;
}

