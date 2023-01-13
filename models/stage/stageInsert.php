<?php
	require "../../config/connection.php";
		if(isset($_POST['stageInsertSubmit'])){
			$errors = array();

			$regexName = "/^[A-z]{1,110}$/";
			$regexCapacity = "/^[\d]{1,4}$/";
			$regexDesc = "/^.{1,1500}$/";

			$name = $_POST['nameStageInsert'];
			$capacity = $_POST['capacityInsert'];
			$file = $_FILES['stagePhotoInsert'];
			$description = $_POST['descriptionStageInsert'];
			$fileSize = $file['size'];
			$fileType = $file['type'];

			if(!preg_match($regexName,$name)){
				array_push($errors,'name not in right format');
			}
			if(!preg_match($regexDesc,$description)){
				array_push($errors,'description not in right format');
			}
			if(!preg_match($regexCapacity,$capacity)){
				array_push($errors,'capacity not in right format');
			}
			if(($fileSize>2002000)||(($fileType!='image/jpeg')&&($fileType!='image/jpg')&&($fileType!='image/png'))){
				array_push($errors,'Photo must be of extension jpeg, jpg, png and smaller than 2MB.');
			}



			if(count($errors)==0){

				$fileName = time().$file['name'];
				$tmpFolderName = $file['tmp_name'];
				$uploadFolder = '../../assets/img/stage/';
				$filePath = $uploadFolder.$fileName;

				$transfer = move_uploaded_file($tmpFolderName, $filePath);

				$dimensions = getimagesize($filePath);
				$width = $dimensions[0];
				$height = $dimensions[1];

				$newWidth = 800;
				$newHeight = 534;

				$platno = imagecreatetruecolor($newWidth, $newHeight);
				
				
			
				if(($fileType=='image/jpeg')||($fileType=='image/jpg')){
					$uploadedPhoto = imagecreatefromjpeg($filePath);
					$brandNewNameJPG = "small".time().".jpg";
					imagecopyresampled($platno, $uploadedPhoto, 0,0,0,0, $newWidth, $newHeight, $width, $height);
					imagejpeg($platno, '../../assets/img/stage/'.$brandNewNameJPG);
				}
				else if(($fileType=='image/png')){
					$uploadedPhoto = imagecreatefrompng($filePath);
					$brandNewNamePNG = "small".time().".png";
					imagecopyresampled($platno, $uploadedPhoto, 0,0,0,0, $newWidth, $newHeight, $width, $height);
					imagepng($platno, '../../assets/img/stage/'.$brandNewNamePNG);
				}
				

				
					$insert = $conn->prepare("INSERT INTO club.stage (name,capacity,stage_description) VALUES(:name,:capacity,:description)");
					$insert->bindParam(":name",$name);
					$insert->bindParam(":capacity",$capacity);
					$insert->bindParam(":description",$description);
					$insert->execute();

					$lastInsertId = $conn->lastInsertId();

					$insertPhoto = $conn->prepare("INSERT INTO club.stage_photo (id_stage,photo) VALUES(:idStage,:photo)");
					$insertPhoto->bindParam(":idStage",$lastInsertId);
					if(isset($brandNewNamePNG)) $insertPhoto->bindParam(":photo",$brandNewNamePNG);
					else if(isset($brandNewNameJPG)) $insertPhoto->bindParam(":photo",$brandNewNameJPG);
					$insertPhoto->execute();

					if($insert && $insertPhoto)
						header('Location: ../../index.php?page=controlpanel&stageI=success');
					else
						header('Location: ../../index.php?page=controlpanel&stageI=invalid');
				
			}
			else{
				header('Location: ../../index.php?page=controlpanel&stageI=invalid');
			}
			/*foreach ($errors as $key => $value) {
				echo $value."<br>";
			}*/
		}
?>