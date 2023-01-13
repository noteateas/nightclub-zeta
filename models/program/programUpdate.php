<?php
	require "../../config/connection.php";


		if(isset($_POST['programUpdateSubmit'])){
			$errors = array();
			$todayDate = date('Y-m-d');

			$regexName = "/^.{1,110}$/";
			$regexDesc = "/^.{1,1500}$/";

			$programId = $_POST['idProgramUpdate'];
			$name = $_POST['nameProgramUpdate'];
			$desc = $_POST['descProgramUpdate'];
			$stageId = $_POST['programStageUpdateSelect'];
			$artistId = $_POST['artistProgramUpdateSelect'];
			$price = $_POST['priceProgramUpdate'];
			$date = $_POST['dateProgramUpdate'];
			$time = $_POST['timeProgramUpdate'];
			$file = $_FILES['programPhotoUpdate'];
			

			if(!preg_match($regexName,$name)){
				array_push($errors,'name not in right format');
			}
			if(!preg_match($regexDesc,$desc)){
				array_push($errors,'description not in right format');
			}
			if($artistId == 0){
				array_push($errors,'artist not in right format');
			}
			if($programId == 0){
				array_push($errors,'program not in right format');
			}
			if(!$date){
				array_push($errors,'date not in right format');
			}
			if(!$time){
				array_push($errors,'time not in right format');
			}
			

			if(!empty($file['name'])){
				$fileSize = $file['size'];
				$fileType = $file['type'];
				if(($fileSize>2002000)||(($fileType!='image/jpeg')&&($fileType!='image/jpg')&&($fileType!='image/png'))){
					array_push($errors,'Photo must be of extension jpeg, jpg, png and smaller than 2MB.');
				}
			}

			if(count($errors)==0){
				if($file){
					$fileName = time().$file['name'];
					$tmpFolderName = $file['tmp_name'];
					$uploadFolder = '../../assets/img/program/';
					$filePath = $uploadFolder.$fileName;

					$transfer = move_uploaded_file($tmpFolderName, $filePath);
				}

				if($file && $transfer){
					$update = $conn->prepare("UPDATE club.program SET program_name=:name, program_description=:description, cover=:cover, stage_id=:stageId, date=:programDate WHERE programId = :programId");
					$update->bindParam(":programId",$programId);
					$update->bindParam(":name",$name);
					$update->bindParam(":description",$desc);
					$update->bindParam(":cover",$fileName);
					$update->bindParam(":stageId",$stageId);
					$update->bindParam(":programDate",$date);
					$update->execute();

				}
				else{
					$update = $conn->prepare("UPDATE club.program SET program_name=:name, program_description=:description, stage_id=:stageId, date=:programDate WHERE id_program = :programId");
					$update->bindParam(":programId",$programId);
					$update->bindParam(":name",$name);
					$update->bindParam(":description",$desc);
					$update->bindParam(":stageId",$stageId);
					$update->bindParam(":programDate",$date);
					$update->execute();

				}

				$updatePrice = $conn->prepare("UPDATE club.price SET price=:price, price_date=:priceDate WHERE id_program = :programId");
				$updatePrice->bindParam(":programId",$programId);
				$updatePrice->bindParam(":price",$price);
				$updatePrice->bindParam(":priceDate",$todayDate);
				$updatePrice->execute();



				$updateProgramArtist = $conn->prepare("UPDATE club.program_artist SET id_artist=:artistId, time=:programTime WHERE id_program=:programId");

				$updateProgramArtist->bindParam(":programId",$programId);
				$updateProgramArtist->bindParam(":artistId",$artistId);
				$updateProgramArtist->bindParam(":programTime",$time);
				$updateProgramArtist->execute();


				if($update && $updateProgramArtist && $updatePrice)
					header('Location: ../../index.php?page=controlpanel&programU=success');
				else
					header('Location: ../../index.php?page=controlpanel&programU=invalid');
			}
			else{
				header('Location: ../../index.php?page=controlpanel&programU=invalid');
			}
		}
?>