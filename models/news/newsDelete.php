<?php
	require "../../config/connection.php";

		if(isset($_POST['newsDeleteSubmit'])){
			$errors = array();


			$id = $_POST['newsDeleteSelect'];
			
			if($id==0){
				header('Location: ../../index.php?page=controlpanel&newsD=invalid');
			}
			else{
				$delete = $conn->prepare("DELETE FROM club.news WHERE id_news=:id");
				$delete->bindParam(":id",$id);
				$delete->execute();	

				if(!$delete){
					header('Location: ../../index.php?page=controlpanel&newsD=invalid');
				}	
				else{
					header('Location: ../../index.php?page=controlpanel&newsD=success');
				}
			}
		}
?>