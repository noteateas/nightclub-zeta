<?php
require_once "../config/connection.php";

if(isset($_POST['dugmeRegister'])){
	echo 'this';
	$errors = array();
	$regexFirstName = "/^[A-Z][a-z]{2,30}(\s[A-Z][a-z]{2,30})*$/";
	$regexLastName = "/^[A-Z][a-z]{2,30}(\s[A-Z][a-z]{2,30})*$/";
	$regexUser = "/^(?=.*[A-z])(?!\s)[A-z\d\.]{3,25}$/";
	$regexEmail = "/^([A-z][A-z0-9-._]{2,35})\@([A-z]{3,10}\.[a-z]{2,5}(.[a-z]{2,5})?)$/";
	$regexPassword = "/^(?=.*[a-z])(?=.*\d)(?=.*[A-Z]).{3,30}$/";

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$username = $_POST["usernameRegister"];
	$email = $_POST["emailRegister"];
	$password = $_POST["passwordRegister"];
	$passwordConfirm = $_POST["passwordConfirm"];


	if(!preg_match($regexFirstName,$firstName)){
		array_push($errors,'First name invalid');
	}
	if(!preg_match($regexLastName,$lastName)){
		array_push($errors,'Last name invalid');
	}
	if(!preg_match($regexUser,$username)){
		array_push($errors,'Username invalid');
	}
	if(!preg_match($regexEmail,$email)){
		array_push($errors,'Email invalid');
	}
	if(!preg_match($regexPassword,$password)){
		array_push($errors,'Password has to contain one lc letter, uc letter and a number');
	}
	if($password!=$passwordConfirm){
		array_push($errors,"Passwords don't match");
	}

	
	if(count($errors)!=0){
		header("Location: ../index.php?page=register&reg=error&firstName=$firstName&lastName=$lastName&email=$email&username=$username");
	}
	else{
		$password = md5($password);

		$sel = $conn->prepare("SELECT username,email FROM club.user WHERE username=:user OR email=:email");
		$sel->bindParam(":user",$username);
		$sel->bindParam(":email",$email);
		$sel->execute();
		$result= $sel->fetchAll();

		if(count($result)>0){
			foreach($result as $element){
				if($element['username']==$username){
					header("Location: ../index.php?page=register&reg=username&firstName=$firstName&lastName=$lastName&email=$email&username=$username");
					exit();
				}
				if($element['email']==$email){
					header("Location: ../index.php?page=register&reg=email&firstName=$firstName&lastName=$lastName&email=$email&username=$username");
					exit();
				}
			}
		}
		else{
			$insert = $conn->prepare("INSERT INTO club.user(first_name,last_name,username,email,password) VALUES (:fName,:lName,:user,:email,:pass)");
			$insert->bindParam(":fName", $firstName);
			$insert->bindParam(":lName", $lastName);
			$insert->bindParam(":user", $username);
			$insert->bindParam(":pass", $password);
			$insert->bindParam(":email", $email);
			$insert->execute();

			if($insert->rowCount()==1){
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['role'] = 2;
				header('Location: ../index.php?reg=success');
			}
			else{
				header("Location: ../index.php?page=register&reg=error&firstName=$firstName&lastName=$lastName&email=$email&username=$username");
			}
		}
	}
}
?>