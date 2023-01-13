<?php
	require "../../config/connection.php";

		if(isset($_POST['programInsertSubmit'])){
			$errors = array();
			$currentDate = date('Y-m-d');

			$regexName = "/^.{1,110}$/";
			$regexDesc = "/^.{1,1500}$/";
			$regexPrice = "/^[\d]{1,4}$/";

			$name = $_POST['nameProgramInsert'];
			$desc = $_POST['descProgramInsert'];
			$stageId = $_POST['programStageInsertSelect'];
			$artistId = $_POST['artistProgramInsertSelect'];
			$price = $_POST['priceProgramInsert'];
			$date = $_POST['dateProgramInsert'];
			$time = $_POST['timeProgramInsert'];

			$file = $_FILES['programPhotoInsert'];
			$fileSize = $file['size'];
			$fileType = $file['type'];

			if(!preg_match($regexName,$name)){
				array_push($errors,'name not in right format');
			}
			if(!preg_match($regexDesc,$desc)){
				array_push($errors,'description not in right format');
			}
			if(!preg_match($regexPrice,$price)){
				array_push($errors,'price not in right format');
			}
			if($artistId == 0){
				array_push($errors,'artist not in right format');
			}
			if(!$date){
				array_push($errors,'date not in right format');
			}
			if(!$time){
				array_push($errors,'time not in right format');
			}
			if(($fileSize>2002000)||(($fileType!='image/jpeg')&&($fileType!='image/jpg')&&($fileType!='image/png'))){
				array_push($errors,'Photo must be of extension jpeg, jpg, png and smaller than 2MB.');
			}



			if(count($errors)==0){

				$fileName = time().$file['name'];
				$tmpFolderName = $file['tmp_name'];
				$uploadFolder = '../../assets/img/program/';
				$filePath = $uploadFolder.$fileName;

				$transfer = move_uploaded_file($tmpFolderName, $filePath);

				if($transfer){
					$insert = $conn->prepare("INSERT INTO club.program (program_name,program_description,cover,stage_id,date) VALUES(:name,:description,:cover,:stageId,:programDate)");
					$insert->bindParam(":name",$name);
					$insert->bindParam(":description",$desc);
					$insert->bindParam(":cover",$fileName);
					$insert->bindParam(":stageId",$stageId);
					$insert->bindParam(":programDate",$date);
					$insert->execute();

					$lastInsertId = $conn->lastInsertId();

					$insertProgramArtist = $conn->prepare("INSERT INTO club.program_artist (id_program,id_artist,time) VALUES(:programId,:artistId,:programTime)");
					$insertProgramArtist->bindParam(":programId",$lastInsertId);
					$insertProgramArtist->bindParam(":artistId",$artistId);
					$insertProgramArtist->bindParam(":programTime",$time);
					$insertProgramArtist->execute();

					$insertPrice = $conn->prepare("INSERT INTO club.price (id_program,price,price_date) VALUES(:programId,:price,:priceDate)");
					$insertPrice->bindParam(":programId",$lastInsertId);
					$insertPrice->bindParam(":price",$price);
					$insertPrice->bindParam(":priceDate",$currentDate);
					$insertPrice->execute();

					if($insert && $insertProgramArtist && $insertPrice)
						header('Location: ../../index.php?page=controlpanel&programI=success');
					else
						header('Location: ../../index.php?page=controlpanel&programI=invalid');
				}
				else{
					header('Location: ../../index.php?page=controlpanel&programI=invalid');
				}
				
			}
			else{
				header('Location: ../../index.php?page=controlpanel&programI=invalid');
			}
		}
?>