<?php
require_once "../config/connection.php";

$file = fopen(LOG_FILE,"r");

/*if($file){
	$arr = file(LOG_FILE);
	fclose($file);
	$count = count($arr);
	$last24=[];

	define("secondsInADay",24*60*60);

	for($i = 0; $i < $count; $i++){
		$row = explode(SEPARATOR, $arr[$i]);
		$t = $row[2];
		$dayBefore = time()-secondsInADay;
		$utT = strtotime($t);

		if($utT >= $dayBefore){
			$last24[] = $row[0];
		}
	}


	$count = count($last24);
	$last24Distinct=[];

	for($i = 0; $i < $count; $i++){
		if(!in_array($last24[$i], $last24Distinct)){
			$last24Distinct[] = $last24[$i];
		}
	}

	$arrFinal=[];

	foreach($last24Distinct as $key => $value){
		$arrFinal[$value]=0;
	}
	foreach($arrFinal as $key => $value){
		foreach($last24 as $log){
			if($key == $log){
				$arrFinal[$key] += 1;
			}
		}
	}

	$total=0;
	foreach($arrFinal as $ar){
		$total+=$ar;
	}
	var_dump($total);
}*/

if($file){
	$data = file(LOG_FILE);
	fclose($file);

	$oneDay = 24*60*60;

	$min = time() - $oneDay;
	$max = time();

	$arrLast24h = array();
	$i = 0;
	foreach($data as $key=>$value){
		$parts = explode(SEPARATOR, $value);
		$dateTime = $parts[2];
		$timestamp = strtotime($dateTime);

		if(intval($timestamp) > intval($min) && intval($timestamp) < intval($max)){
			$arrLast24h[$i] = $value."<br>";
			$i+=1;
		}
	}
	$distinct = array();
	for($k = 0; $k < $i; $k++){
		//echo $arrLast24h[$k]."<br>";
		$parts = explode(SEPARATOR, $value);
		$ipAddress = $parts['1'];
		
		if(!in_array($arrLast24h[$k], $distinct)){
			$distinct[] = $arrLast24h[$k];
		}
	}
	var_dump($distinct);

	/*foreach ($arrLast24h as $key => $value) {
		$parts = explode(SEPARATOR, $value);
		$ipAddress = $parts['1'];
		echo $ipAddress."<br>";
	}*/
}