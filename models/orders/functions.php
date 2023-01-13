<?php
function getUserOrders($idUser){
	return execQuery("SELECT* FROM club.orders WHERE id_user=$idUser");
}
function getCountProgramOrders($idPrice){
	return execQuery("SELECT COUNT(*) FROM club.orders WHERE id_price=$idPrice GROUP BY id_program");
}


?>