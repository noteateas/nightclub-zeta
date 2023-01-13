<?php
	function allMenu(){
		return execQuery("SELECT * FROM club.menu");
	}
	function types(){
		return execQuery("SELECT DISTINCT type FROM club.menu");
	}
	
	function primaryMenuHeader(){
		return execQuery("SELECT * FROM club.menu WHERE parent_id is NULL AND type='header' ");
	} 
	function primaryMenuFooter(){
		return execQuery("SELECT * FROM club.menu WHERE parent_id is NULL AND type='footer' ");
	}

	function recursiveMenu($id){
		return execQuery("SELECT * FROM club.menu WHERE parent_id = $id");
	}

?>