<?php
function getOneInfo(){
	return execQuery("SELECT* FROM club.info")[0];
}

?>