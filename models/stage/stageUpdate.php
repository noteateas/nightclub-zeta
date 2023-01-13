<?php
	require "../../config/connection.php";
		if(isset($_POST['stageUpdateSubmit'])){
			$errors = array();

			$regexName = "/^[A-z]{1,110}$/";
			$regexCapacity = "/^[\d]{1,4}$/";
			$regexDesc = "/^.{1,1500}$/";

			$id = $_POST['stageUpdateSelect'];
			$name = $_POST['nameStageUpdate'];
			$description = $_POST['descriptionStageUpdate'];
			$capacity = $_POST['capacityUpdate'];
			$file = $_FILES['stagePhotoUpdate'];
			

			if(!preg_match($regexName,$name)){
				array_push($errors,'name not in right format');
			}
			if(!preg_match($regexCapacity,$capacity)){
				array_push($errors,'capacity not in right format');
			}
			if(!preg_match($regexDesc,$description)){
				array_push($errors,'description not in right format');
			}
			if($id==0){
				array_push($errors,'stage not chosen');
			}

			if(count($errors)==0){
				$update = $conn->prepare("UPDATE club.stage SET name = :name, capacity =:capacity, stage_description = :description WHERE id_stage=$id");
					$update->bindParam(":name",$name);
					$update->bindParam(":capacity",$capacity);
					$update->bindParam(":description",$description);
					$update->execute();
					

					if(!$update){
						header('Location: ../../index.php?page=controlpanel&stageU=invalid');
					}
					
					else{
						if($file){
							$fileSize = $file['size'];
							$fileType = $file['type'];

							if(($fileSize>2002000)||(($fileType!='image/jpeg')&&($fileType!='image/jpg')&&($fileType!='image/png'))){
								array_push($errors,'Photo must be of extension jpeg, jpg, png and smaller than 2MB.');
							}
							else{
								$fileName = time().$file['name'];
								$tmpFolderName = $file['tmp_name'];
								$uploadFolder = '../../assets/img/stage/';
								$filePath = $uploadFolder.$fileName;

								$transfer = move_uploaded_file($tmpFolderName, $filePath);
								if($transfer){
									$updatePhoto = $conn->prepare("UPDATE club.stage_photo SET photo=:photo WHERE id_stage=:idStage");
									$updatePhoto->bindParam(":idStage",$id);
									$updatePhoto->bindParam(":photo",$fileName);
									$updatePhoto->execute();

									if($updatePhoto){
										header('Location: ../../index.php?page=controlpanel&stageU=success');
									}
									else{
										header('Location: ../../index.php?page=controlpanel&stageU=invalid');
									}
								}
								else{
									header('Location: ../../index.php?page=controlpanel&stageU=invalid');
								}
							}
						}
						header('Location: ../../index.php?page=controlpanel&stageU=success');
					}
			}
			else{
				header('Location: ../../index.php?page=controlpanel&stageU=invalid');
			}
		}
?>