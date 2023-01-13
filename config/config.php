<?php

//main
define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/7 praktphp/");
//other
define("ENV_FILE", ABSOLUTE_PATH."config/.env");
define("LOG_FILE", ABSOLUTE_PATH."data/pageEntry.txt");
define("ERR_FILE", ABSOLUTE_PATH."data/errLog.txt");
define("IMG_FOLDER", ABSOLUTE_PATH."img/");

define("SEPARATOR","\t");
//db parameters
define("SERVER", env("SERVER"));
define("DBNAME", env("DBNAME"));
define("USERNAME", env("USERNAME"));
define("PASSWORD", env("PASSWORD"));

function env($name){
	$envFile = file(ENV_FILE);
	$result = '';
	foreach ($envFile as $row) {
		$config = explode("=", $row);
		if($config[0]==$name){
			$result = trim($config[1]);
			break;
		}
	}
	return $result;
	fclose($envFile);
}

?>