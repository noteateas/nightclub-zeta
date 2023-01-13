<?php

require_once "config/connection.php";

include "views/fixed/head.php";
include "views/fixed/menu.php";

include "models/stage/functions.php";
include "models/program/functions.php";
include "models/orders/functions.php";
include "models/artist/functions.php";
include "models/news/functions.php";
include "models/info/functions.php";

if(!isset($_GET['page'])){
	include "views/main.php";
}
else{
	switch($_GET['page']){
		case 'register':
			include "views/registerForm.php";
		break;

		case 'login':
			include "views/loginForm.php";
		break;

		case 'controlpanel':
			include "views/controlPanel.php";
		break;

		case 'program':
			include "views/program.php";
		break;

		case 'author':
			include "views/author.php";
		break;

		case 'stages':
			include "views/stages.php";
		break;

		case 'contact':
			include "views/contact.php";
		break;

	}
}
if(isset($_GET['page'])){
	if(($_GET['page']!='controlpanel')&&($_GET['page']!='login')&&($_GET['page']!='register')&&($_GET['page']!='author')){
		include "views/fixed/news.php";
	}
}
else{
	include "views/fixed/news.php";
}

include "views/fixed/footer.php";
?>