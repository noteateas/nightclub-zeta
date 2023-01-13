<?php

require "../../config/connection.php";
include "functions.php";
include "../user/functions.php";


if(isset($_POST['orderTicketSubmit'])){

	if(isset($_SESSION['username'])){
		$errors = array();

		$numOfTickets = $_POST['orderTicketSelect'];
		$urlAddress = $_POST['urlAddress'];
		$programId = $_POST['programId'];
		$programName = $_POST['programName'];			

		$username = $_SESSION['username'];
		$userAllInfo = getOneUser($username);
		$userId = $userAllInfo['id_user'];

		$programAllInfo = getOneProgram($programId);
		$priceId = $programAllInfo['id_price'];


		if($numOfTickets==0){
			array_push($errors, 'tickets not chosen');
		}

		if(count($errors)!=0){
			header("Location: ../../$urlAddress&order=fail");
		}
		else{
			$ins = $conn->prepare("INSERT INTO club.orders (id_user,id_program,id_price,ticketsQuantity) VALUES(:user,:idProgram,:price,:quantity)");
			$ins-> bindParam(':user',$userId);
			$ins-> bindParam(':idProgram',$programId);
			$ins-> bindParam(':price',$priceId);
			$ins-> bindParam(':quantity',$numOfTickets);
			$ins-> execute();
			mail("nedeljkovicteodora3@gmail.com","Zeta Ticket","We have received your order concering the event".$programName.".");
			header("Location: $urlAddress&order=success");
		}
	}
	
}

?>