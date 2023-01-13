<?php
	require "../config/connection.php";

	if(isset($_POST['dugmeContact'])){
		$errors = array();
		$fullName = $_POST['fullNameContact'];
		$subject = $_POST['subjectContact'];
		$msg = $_POST['messageContact'];

		$regexFullName = "/^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})+$/";
		$regexSubject = "/^[\w\d]{1,30}$/";
		$regexMessage = "/^.{5,150}$/";

		if(!preg_match($regexFullName,$fullName)){
			array_push($errors,'Name in invalid format.');
		}
		if(!preg_match($regexSubject,$subject)){
			array_push($errors, 'Subject in invalid format.');
		}
		if(!preg_match($regexMessage,$msg)){
			array_push($errors, 'Message in invalid format.');
		}

		if(count($errors)==0){
			$adminEmail = execQuery("SELECT email FROM club.user WHERE role_id = 1");
			mail($adminEmail,$subject,$msg);
			header('Location: ../index.php?page=contact&msg=success');
		}
		else{
			header('Location: ../index.php?page=contact&msg=invalid');
		}
	}
?>