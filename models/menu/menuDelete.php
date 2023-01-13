<?php
	require "../../config/connection.php";
		if(isset($_POST['menuDeleteSubmit'])){
			$errors = array();

			$menuId = $_POST['menuDeleteSelect'];

			if($menuId == 0){
				array_push($errors, 'menu not chosen');
			}

			if(count($errors)==0){

				$insert = $conn->prepare("DELETE FROM club.menu WHERE id_menu=:menuId");
				$insert->bindParam(":menuId",$menuId);
				$insert->execute();

				header('Location: ../../index.php?page=controlpanel&menuD=success');	
			}
			else{
				header('Location: ../../index.php?page=controlpanel&menuD=invalid');
			}
		}
?>