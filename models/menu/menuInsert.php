<?php
	require "../../config/connection.php";
		if(isset($_POST['menuInsertSubmit'])){
			$errors = array();

			$regexTitle = "/^[A-z0-9\s\.\,\-\'\"\*\/\:]{1,100}$/";
			$regexLevel = "/^[\d]{1,3}$/";

			$name = $_POST['nameMenuInsert'];
			$link = $_POST['linkMenuInsert'];
			$level = $_POST['levelMenuInsert'];
			$type = $_POST['typeInsertSelect'];
			$parentId = $_POST['menuParentInsertSelect'];

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

				$insert = $conn->prepare("INSERT INTO club.menu (name,link,level,type,parent_id) VALUES(:name,:link,:level,:type,:parentId)");
				$insert->bindParam(":name",$name);
				$insert->bindParam(":link",$link);
				$insert->bindParam(":level",$level);
				$insert->bindParam(":type",$type);
				$insert->bindParam(":parentId",$parentId);
				$insert->execute();

				header('Location: ../../index.php?page=controlpanel&menuI=success');	
			}
			else{
				header('Location: ../../index.php?page=controlpanel&menuI=invalid');
			}
		}
?>