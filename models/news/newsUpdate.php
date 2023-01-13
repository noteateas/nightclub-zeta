<?php
	require "../../config/connection.php";

		if(isset($_POST['newsUpdateSubmit'])){
			$errors = array();

			$regexName = "/^[A-z]{1,110}$/";
			$regexDesc = "/^.{1,1500}$/";

			$id = $_POST['newsUpdateSelect'];
			$title = $_POST['titleNewsUpdate'];
			$text = $_POST['textUpdateArea'];
			

			if(!preg_match($regexName,$title)){
				array_push($errors,'title not in right format');
			}
			if(!preg_match($regexDesc,$text)){
				array_push($errors,'text not in right format');
			}
			if($id==0){
				array_push($errors,'news not chosen');
			}

			if(count($errors)==0){
				$update = $conn->prepare("UPDATE club.news SET title = :title, text = :text WHERE id_news=$id");
					$update->bindParam(":title",$title);
					$update->bindParam(":text",$text);
					$update->execute();
					
					if(!$update){
						header('Location: ../../index.php?page=controlpanel&newsU=invalid');
					}
					else{
						header('Location: ../../index.php?page=controlpanel&newsU=success');
					}
			}
			else{
				header('Location: ../../index.php?page=controlpanel&newsU=invalid');
			}
		}
?>