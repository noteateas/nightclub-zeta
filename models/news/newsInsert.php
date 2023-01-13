<?php
	require "../../config/connection.php";

		if(isset($_POST['newsInsertSubmit'])){
			$errors = array();

			$regexName = "/^[A-z]{1,110}$/";
			$regexDesc = "/^.{1,1500}$/";

			$title = $_POST['titleNewsInsert'];
			$text = $_POST['textInsertArea'];
			$file = $_FILES['photoNewsInsert'];
			$fileSize = $file['size'];
			$fileType = $file['type'];
			

			if(!preg_match($regexName,$title)){
				array_push($errors,'title not in right format');
			}
			if(!preg_match($regexDesc,$text)){
				array_push($errors,'text not in right format');
			}
			if(($fileSize>2002000)||(($fileType!='image/jpeg')&&($fileType!='image/jpg')&&($fileType!='image/png'))){
				array_push($errors,'Photo must be of extension jpeg, jpg, png and smaller than 2MB.');
			}

			if(count($errors)==0){
				$fileName = time().$file['name'];
				$tmpFolderName = $file['tmp_name'];
				$uploadFolder = '../../assets/img/news/';
				$filePath = $uploadFolder.$fileName;

				$transfer = move_uploaded_file($tmpFolderName, $filePath);

				if($transfer){
					$insert = $conn->prepare("INSERT INTO club.news (title,text,photo) VALUES (:title,:text,:photo)");
					$insert->bindParam(":title",$title);
					$insert->bindParam(":text",$text);
					$insert->bindParam(":photo",$fileName);
					$insert->execute();
					
					if(!$insert){
						header('Location: ../../index.php?page=controlpanel&newsI=invalid');
					}
					else{
						header('Location: ../../index.php?page=controlpanel&newsI=success');
					}
				}
				else{
				header('Location: ../../index.php?page=controlpanel&newsI=invalid');
			}
			}
			else{
				header('Location: ../../index.php?page=controlpanel&newsI=invalid');
			}
		}
?>