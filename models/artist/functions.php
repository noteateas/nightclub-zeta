<?php
/*function getOneProgram($id){
	return execQuery("SELECT * FROM club.program p INNER JOIN club.program_artist pa ON p.id_program = pa.id_program INNER JOIN club.artist a ON pa.id_artist = a.id_artist INNER JOIN club.price pr ON pr.id_program = p.id_program WHERE p.id_program = $id ORDER BY price_date DESC LIMIT 1")[0];
}*/
function getAllArtist(){
	return execQuery("SELECT * FROM club.artist");
}

?>