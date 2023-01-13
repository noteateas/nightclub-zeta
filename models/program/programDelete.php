<?php
	require "../../config/connection.php";

		if(isset($_POST['programDeleteSubmit'])){
			$errors = array();

			$id = $_POST['nameProgramDelete'];

			if($id == 0){
				array_push($errors,'program not chosen');
			}


			if(count($errors)==0){

					$delete = $conn->prepare("DELETE FROM club.program WHERE id_program = :id");
					$delete->bindParam(":id",$id);
					$delete->execute();

					if($delete)
						header('Location: ../../index.php?page=controlpanel&programD=success');
					else
						header('Location: ../../index.php?page=controlpanel&programD=invalid');
				
			}
			else{
				header('Location: ../../index.php?page=controlpanel&programD=invalid');
			}
		}
?>