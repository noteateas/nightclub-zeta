<?php
function getOneUser($username){
	return execQuery("SELECT * FROM club.user WHERE username = '$username'")[0];
}