<?php

function getOneStage($id){
	return execQuery("SELECT * FROM club.stage WHERE id_stage=$id")[0];
}
function getOneStageWithPhotos($id){
	return execQuery("SELECT * FROM club.stage s INNER JOIN club.stage_photo sp ON s.id_stage=sp.id_stage WHERE s.id_stage=$id");
}
function getAllStageGrouped(){
	return execQuery("SELECT * FROM club.stage s INNER JOIN club.stage_photo sp ON s.id_stage = sp.id_stage GROUP BY s.id_stage");
}

?>