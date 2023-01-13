<?php
	require "../config/connection.php"; 

	if(isset($_POST['dugmeLogin'])){
		$errors = array();
		$regexUser = "/^(?=.*[A-z])(?!\s)[A-z\d\.]{3,25}$/";
		$regexPassword = "/^(?=.*[a-z])(?=.*\d)(?=.*[A-Z]).{3,30}$/";

		$username = $_POST['usernameLogin'];
		$password = $_POST['passwordLogin'];

		if(!preg_match($regexUser,$username)){
			array_push($errors,'Username in invalid format');
		}
		if(!preg_match($regexPassword,$password)){
			array_push($errors,'Password in invalid format');
		}

		if(count($errors)!=0){
			header("Location: ../index.php?page=login&log=invalid&username=$username");
			exit();
		}
		else{
			$selUser = $conn->prepare("SELECT * FROM club.user WHERE username=:user");
			$selUser->bindParam(":user", $username);
			$selUser->execute();

			if($selUser->rowCount()!=1){
				header("Location: ../index.php?page=login&log=notexists&username=$username");
				
				exit();
			}
			else{
				$password = md5($password);
				$selPass = $conn->prepare("SELECT * FROM club.user WHERE username=:user AND password=:pass");
				$selPass->bindParam(":user", $username);
				$selPass->bindParam(":pass", $password);
				$selPass->execute();

				if($selPass->rowCount()!=1){
					header("Location: ../index.php?page=login&log=nomatch&username=$username");
					writeLoginError($username);
					exit();
				}
				else{
					session_start();
					$result = $selPass->fetch();
					$_SESSION['username'] = $username;
					$_SESSION['role'] = $result['role_id'];
					header('Location: ../index.php?&log=success');
					exit();
				}
			}
		}
	}
?>