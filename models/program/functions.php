<?php
function getOneProgram($id){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist INNER JOIN club.price pr ON pr.id_program = p.id_program WHERE p.id_program = $id ORDER BY price_date DESC LIMIT 1")[0];
}
function getAllProgram(){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist");
}
function getCustomProgram($order, $limit, $offset){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist ORDER BY $order LIMIT $limit OFFSET $offset");
}
function getProgramWhere($order, $limit, $offset,$where){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist WHERE $where ORDER BY $order LIMIT $limit OFFSET $offset");
}
function getLimitOffset( $limit, $offset){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist LIMIT $limit OFFSET $offset");
}

function pagesInTotal($limit){
	$totalProgram = count(getAllProgram());
	$pagesInTotal = ceil($totalProgram / $limit);
	return $pagesInTotal;
}
function paginate($order, $limit, $num){
	$pagesInTotal = pagesInTotal($limit);
	$offset = ($num - 1) * $limit;
	return getCustomProgram($order, $limit, $offset);
}
?>