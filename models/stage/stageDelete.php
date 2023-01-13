<?php
	require "../../config/connection.php";
		if(isset($_POST['stageDeleteSubmit'])){
			$errors = array();


			$id = $_POST['stageDeleteSelect'];
			
			if($id==0){
				header('Location: ../../index.php?page=controlpanel&stageD=invalid');
			}
			else{
				$delete = $conn->prepare("DELETE FROM club.stage WHERE id_stage=:id");
				$delete->bindParam(":id",$id);
				$delete->execute();	

				if(!$delete){
					header('Location: ../../index.php?page=controlpanel&stageD=invalid');
				}	
				else{
					header('Location: ../../index.php?page=controlpanel&stageD=success');
				}
			}
		}
?>