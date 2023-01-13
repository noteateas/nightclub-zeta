<?php
require_once "config.php";
include ABSOLUTE_PATH."models/functions.php";
pageEntry();
session_start();
	
try{
	$conn = new PDO("mysql:host=".SERVER.";dbname =".DBNAME, USERNAME, PASSWORD);
	$conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
	$ex->getMessage();
	exit('Server not responding, please try again later.');
}

//db queries
function execQuery($query){
	global $conn;
	return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

?>