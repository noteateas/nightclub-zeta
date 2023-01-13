<?php
	require "../../config/connection.php";
		if(isset($_POST['menuUpdateSubmit'])){
			$errors = array();

			$regexTitle = "/^[A-z0-9\s\.\,\-\'\"\*\/\:]{1,100}$/";
			$regexLevel = "/^[\d]{1,3}$/";

			$menuId = $_POST['menuUpdateSelect'];
			$name = $_POST['nameMenuUpdate'];
			$link = $_POST['linkMenuUpdate'];
			$level = $_POST['levelMenuUpdate'];
			$type = $_POST['typeMenuUpdateSelect'];
			$parentId = $_POST['menuParentUpdateSelect'];

			if($menuId == 0){
				array_push($errors,'menu not chosen');
			}
			if(!preg_match($regexTitle,$name)){
				array_push($errors,'name not in right format');
			}
			if(!preg_match($regexTitle,$link)){
				array_push($errors,'link not in right format');
			}
			if(!preg_match($regexLevel,$level)){
				array_push($errors,'level not in right format');
			}
			if($type == '0'){
				array_push($errors,'type has to be selected');	
			}
			if($parentId == 0){
				$parentId = NULL;
			}

			if(count($errors)==0){

				$update = $conn->prepare("UPDATE club.menu SET name=:name,link=:link,level=:level,type=:type,parent_id=:parentId WHERE id_menu=:menuId");
				$update->bindParam(":menuId",$menuId);
				$update->bindParam(":name",$name);
				$update->bindParam(":link",$link);
				$update->bindParam(":level",$level);
				$update->bindParam(":type",$type);
				$update->bindParam(":parentId",$parentId);
				$update->execute();

				header('Location: ../../index.php?page=controlpanel&menuU=success');	
			}
			else{
				header('Location: ../../index.php?page=controlpanel&menuU=invalid');
			}
		}
?>