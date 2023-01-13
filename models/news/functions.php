<?php

function getCustomNews($order, $limit, $offset){
	return execQuery("SELECT * FROM club.news ORDER BY $order LIMIT $limit OFFSET $offset");
}
function getAllNews(){
	return execQuery("SELECT * FROM club.news");
}

?>